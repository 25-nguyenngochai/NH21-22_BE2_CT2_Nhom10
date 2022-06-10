<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Catalog;
use App\Models\Product;
use App\Models\Admin;
use App\Models\Comment;
use App\Models\Bill;
use App\Models\User;

class AdminController extends Controller
{
    // Page

    function pageindex(){
        return view('admin.index');
    }


    // Table login
    function authlogout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin.login');
    }

    // Add, Edit, Delete: Table product
    function table_product(Request $request)
    {
        if(isset($request->key)){
        $tableProducts = Product::where('name', 'like', '%'.$request->key.'%')->orderBy('id', 'desc')
        ->paginate(10)->appends(['key' => $request->key]);
        } else{
        $tableProducts = Product::orderBy('id', 'desc')->paginate(20);
        }
        return view('admin.data_table.table_product', [ 
            'tableProducts' => $tableProducts
        ]);
    }

    function gettable_product()
    {
        $allCatalogs = Catalog::all();
        return view('admin.add_table.table_product', [
            'allCatalogs' => $allCatalogs
        ]);
    }

    function add_products(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'upload_image' => 'required',
            'catalog_id' => 'required',
            'description' => 'required',
            'created' => 'required',
            'expiry' => 'required',
		]);

       //Lưu hình thẻ khi có file hình
       if ($request->hasFile('upload_image')) {
            $request->validate( 
                [
                    'upload_image' => 'mimes:jpg,jpeg,png,gif|max:2048',
                ],			
                [
                    'upload_image.mimes' => 'Required image file extension .jpg .jpeg .png .gif',
                    'upload_image.max' => 'Image size limit no more than 2M',
                ]
            );
    
            $file = $request->upload_image;
            $file_name = $file->getClientOriginalName();
            $file-> move(public_path('images'), $file_name);
            $request->merge(['image' => $file_name]);
        }

        $input = $request->all();
        Product::create($input);
        return redirect('table_product')->with('success', 'Product created successfully.');
    }

    function getedit_product($id)
    {
        $product = Product::find($id);
        $catalog = Catalog::all();
        return view('admin.edit_table.table_product', compact('product', 'catalog'));
    }

    function postedit_product(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
		]);
        $product = Product::find($id);
        if ($request->hasFile('upload_image')) {
            $delImage = 'images/'.$product->image;
            if (file_exists($delImage)) {
                unlink($delImage);
            }
            $product->name = $data['name'];
            $product->price = $data['price'];
            $file = $request->upload_image;
            $file_name = $file->getClientOriginalName();
            $file-> move(public_path('images'), $file_name);
            $request->merge(['image' => $file_name]);
            $product->image = $file_name;            
            $product->catalog_id = $request->catalog_id;
            $product->description = $data['description'];
            $product->created = $request->created;
            $product->expiry = $request->expiry;
            $product->save();
        } else {
            $product->name = $data['name'];
            $product->price = $data['price'];
            $product->image = $request->value_image;
            $product->catalog_id = $request->catalog_id;
            $product->description = $data['description'];
            $product->created = $request->created;
            $product->expiry = $request->expiry;
            $product->save();
        }
        return redirect('table_product')->with('success', 'Product edit successfully.');
    }

    function delete_product($id)
    {
        $product = Product::find($id);
        $delImage = 'images/'.$product->image;
        if (file_exists($delImage)) {
            unlink($delImage);
        }
        $product->delete();
        return redirect()->back()->with('success', 'Product delete successfully.');
    }
    // Add, Edit, Delete: Catalog
    function table_catalog()
    {
        $tableCatalogs = Catalog::orderBy('id', 'desc')->paginate(20)->appends(['catalog'=>'catalog']);        
        return view('admin.data_table.table_catalog', [ 
            'tableCatalogs' => $tableCatalogs
        ]);
    }

    function add_catalog(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $input = $request->all();
        Catalog::create($input);
        return redirect('table_catalog')->with('success', 'Catalog created successfully.');
    }

    function getedit_catalog($id)
    {
        $catalog = Catalog::find($id);
        return view('admin.edit_table.table_catalog', compact('catalog'));
    }

    function postedit_catalog(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
		]);
        $catalog = Catalog::find($id);
        $catalog->name = $data['name'];
        $catalog->save();
        return redirect('table_catalog')->with('success', 'Catalog edit successfully.');
    }

    function delete_catalog($id)
    {
        $catalog = DB::table('catalogs')->join('products', 'catalogs.id', '=', 'products.catalog_id')
                                                      ->where('catalogs.id', $id)->count();
        if ($catalog){
            return redirect()->back()->with('success', 'Cannot delete because this catalog contains products.');
        } else {
            Catalog::find($id)->delete();
            return redirect()->back()->with('success', 'Catalog delete successfully.');
        }
    }
     // Delete: Comment
     function table_comment()
    {
        $tableComments = Comment::orderBy('id', 'desc')->paginate(20);
        return view('admin.data_table.table_comment', [ 
            'tableComments' => $tableComments
        ]);
    }
    
    function delete_comment($id)
    {
        Comment::find($id)->delete();
        return redirect()->back()->with('success', 'Comment delete successfully.');
    }
    // order:
    function table_order()
    {
        $tableOrder = DB::table('users')->join('bills', 'users.id', '=', 'bills.user_id')
                                        ->orderBy('bills.id', 'desc')
                                        ->paginate(20);
        return view('admin.data_table.table_order', [ 
            'tableOrder' => $tableOrder
        ]);
    }

    function delete_order($id)
    {
        Bill::find($id)->delete();
        return redirect()->back()->with('success', 'Comment delete successfully.');
    }
    // Delete: User
    function table_user(Request $request)
    {
        if(isset($request->key)){
                $tableUser = User::where('name', 'like', '%'.$request->key.'%')->orderBy('id', 'desc')->paginate(10)
                ->appends(['key' => $request->key]);
            } else{
                $tableUser = User::orderBy('id', 'desc')->paginate(20);
            }
        return view('admin.data_table.table_user', [ 
            'tableUser' => $tableUser
        ]);
    }

    function delete_user($id)
    {
        User::find($id)->delete();
        return redirect()->back()->with('success', 'Comment delete successfully.');
    }
}