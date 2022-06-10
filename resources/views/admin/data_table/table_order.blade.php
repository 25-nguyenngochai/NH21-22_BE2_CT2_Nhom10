@extends('admin.master')
@section('content')
<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Data Tables</h3>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="content-panel">
                    <h4><i class="fa fa-angle-right"></i> Order</h4>
                    <section id="unseen">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                                <tr>
                                    <th class="numerics">Id</th>
                                    <th class="numerics">Name</th>
                                    <th class="numerics">Email</th>
                                    <th class="numerics">Data</th>
                                    <th class="numerics">Quantity</th>
                                    <th class="numerics">Total</th>
                                    <th class="numerics">
                                    </th>
                                </tr>
                            </thead>

                            @if($message = Session::get('success'))
                            <div style="padding-top: 10px;" class="alert alert-success">
                                <p>{{$message}}</p>
                            </div>
                            @endif

                            @foreach($tableOrder as $value)
                            <tbody>
                                <tr>
                                    <td class="numerics">{{$value->id}}</td>
                                    <td class="numerics">{{$value->name}}</td>
                                    <td class="numerics">{{$value->email}}</td>
                                    <td class="numerics">{{\Carbon\Carbon::parse($value->data_order)->format('d/m/Y')}}</td>
                                    <td class="numerics">{{$value->totalQty}}</td>
                                    <td class="numerics">{{number_format($value->totalPrice)}} VND</td>
                                    <td class="numerics">
                                        <a href="" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></a>
                                        <a onclick="return confirm('Are you sure you want to delete?')" href="{{route('delete_order', $value->id)}}"
                                            class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </section>
                </div>
                {{$tableOrder->links('paginate.ms-paginate')}}
            </div>
        </div>
    </section>
</section>
<!-- /MAIN CONTENT -->
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
</body>

</html>
@endsection