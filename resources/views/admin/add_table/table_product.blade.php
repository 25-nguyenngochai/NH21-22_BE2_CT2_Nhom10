@extends('admin.master')
@section('content')
<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Form Data-Table</h3>

        <div class="row mt">
            <div class="col-lg-12">
                <!-- table product -->
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Form Product</h4>
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form class="form-horizontal style-form" action="{{route('add_products')}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                                <input name="name" type="text" placeholder="Enter name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Price</label>
                            <div class="col-sm-10">
                                <input name="price" type="number" placeholder="Enter price" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">Catalog Name</label>
                            <div class="col-lg-10">
                                <select name="catalog_id" class="form-control">
                                    @foreach ($allCatalogs as $value)
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Description</label>
                            <div class="col-sm-10">
                                <textarea name="description" rows="4" placeholder="Enter description"
                                    class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Created</label>
                            <div class="col-sm-10">
                                <input name="created" type="date" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">expiry</label>
                            <div class="col-sm-10">
                                <input name="expiry" type="date" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Image</label>
                            <div class="col-sm-10">
                                <input type="file" name="upload_image" id="inputImage" class="form-control">
                                <br>
                                <img id="hinh" alt="" style="width:150px">
                            </div>
                        </div>
                        <script>
                        const inputPro_image = document.querySelector('#inputImage');
                        const hinh = document.querySelector('#hinh');
                        inputImage.onchange = evt => {
                            const [file] = inputImage.files
                            if (file) {
                                hinh.src = URL.createObjectURL(file)
                            }
                        }
                        </script>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Add Product</button>
                            <a href="{{url('table_product')}}" class="btn btn-danger">Cance</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</section>
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


<!--common script for all pages-->
<script src="assets/js/common-scripts.js"></script>

<!--script for this page-->
<script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>

<!--custom switch-->
<script src="assets/js/bootstrap-switch.js"></script>

<!--custom tagsinput-->
<script src="assets/js/jquery.tagsinput.js"></script>

<!--custom checkbox & radio-->

<script type="text/javascript" src="assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/date.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>

<script type="text/javascript" src="assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>


<script src="assets/js/form-component.js"></script>
<script>
//custom select box

$(function() {
    $('select.styled').customSelect();
});
</script>

</body>

</html>
@endsection