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
                    <div style="float: left;">
                        <div style="float: left;">
                            <h4><i class="fa fa-angle-right"></i> Product</h4>
                        </div>
                        <div style="float: right; padding-top: 2px; padding-left: 20px;">
                            <h5><a href="{{url('table_user')}}">Come back</a></h5>
                        </div>
                    </div>
                    <div class="col-md-4" style="float: right;">
                        <form action="{{ route('page_user')}}" class="subscribe-form" method="get">
                            <div style="float: left;">
                                <input type="text" name="key" class="form-control" placeholder="Search">
                            </div>
                            <div style="float: right; padding-top: 5px;">
                                <input type="submit" value="Submit" class="submit px-3">
                            </div>
                        </form>
                    </div>

                    <section id="unseen">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                                <tr>
                                    <th class="numerics">Id</th>
                                    <th class="numerics">Name</th>
                                    <th class="numerics">Email</th>
                                    <th class="numerics">Address</th>
                                    <th class="numerics">Phone</th>
                                    <th class="numerics">

                                    </th>
                                </tr>
                            </thead>

                            @if($message = Session::get('success'))
                            <br><br>
                            <div style="padding-top: 10px;" class="alert alert-success">
                                <p>{{$message}}</p>
                            </div>
                            @endif

                            @foreach($tableUser as $value)
                            <tbody>
                                <tr>
                                    <td class="numerics">{{$value->id}}</td>
                                    <td class="numerics">{{$value->name}}</td>
                                    <td class="numerics">{{$value->email}}</td>
                                    <td class="numerics">{{$value->address}}</td>
                                    <td class="numerics">{{$value->phone}}</td>
                                    <td class="numerics">
                                        <a onclick="return confirm('Are you sure you want to delete?')"
                                            href="{{route('delete_user', $value->id)}}" class="btn btn-danger btn-xs"><i
                                                class="fa fa-trash-o "></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </section>
                </div>
                {{$tableUser->links('paginate.ms-paginate')}}
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