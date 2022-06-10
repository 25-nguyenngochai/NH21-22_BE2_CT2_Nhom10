<!DOCTYPE html>
<html lang="en">

<!-- BEGIN HEAD -->

<head>
    <meta charset="UTF-8" />
    <title>NH21-22_BE2_CT2_Nhom10</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- PAGE LEVEL STYLES -->
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap-login.css')}}" />
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>

<body>

    <!-- PAGE CONTENT -->
    <div class="container">
        <a class="back btn btn-success" href="{{url('home.index')}}">
            << HOME VEGEFOODS</a>
                <br><br>
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
                <div class="tab-content">
                    <div id="login" class="tab-pane active">
                        <form action="{{route('login_index')}}" method="POST" class="form-signin">
                            @csrf
                            <p class="text-muted text-center btn-block btn btn-primary btn-rect">
                                Enter your username and password
                            </p>
                            @if(session('thongbao'))
                            <br>
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                            @endif
                            <input type="text" placeholder="Username" name="username" class="form-control" />
                            <input type="password" placeholder="Password" name="password" class="form-control" />
                            <button class="btn text-muted text-center btn-success" type="submit">Sign in</button>
                        </form>
                    </div>
                    <div id="forgot" class="tab-pane">
                        <form action="index.html" class="form-signin">
                            <p class="text-muted text-center btn-block btn btn-primary btn-rect">Enter your valid e-mail
                            </p>
                            <input type="email" required="required" placeholder="Your E-mail" class="form-control" />
                            <br />
                            <button class="btn text-muted text-center btn-success" type="submit">Recover
                                Password</button>
                        </form>
                    </div>
                    <div id="signup" class="tab-pane">
                        <form action="{{route('login_signup')}}" method="POST" class="form-signin">
                            @csrf
                            <p class="text-muted text-center btn-block btn btn-primary btn-rect">Please Fill Details To
                                Register
                            </p>
                            <input type="text" placeholder="Username" name="username" class="form-control" required />
                            <input type="text" placeholder="Your Name" name="name" class="form-control" required />
                            <input type="email" placeholder="Your E-mail" name="email" class="form-control" required />
                            <input type="text" placeholder="Your Address" name="address" class="form-control"
                                required />
                            <input type="number" placeholder="Your Phone" name="phone" class="form-control" required />
                            <input type="password" placeholder="password" name="password" class="form-control"
                                required />
                            <button class="btn text-muted text-center btn-success" type="submit">Register</button>
                        </form>
                    </div>
                </div>
                <hr>
                <div class="text-center">
                    <ul class="list-inline">
                        <li><a class="text-muted btn btn-primary" href="#login" data-toggle="tab">Login</a></li>
                        <li><a class="text-muted btn btn-primary" href="#forgot" data-toggle="tab">Forgot Password</a>
                        </li>
                        <li><a class="text-muted btn btn-primary" href="#signup" data-toggle="tab">Signup</a></li>
                    </ul>
                </div>


    </div>

    <!--END PAGE CONTENT -->

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="{{asset('js/jquery-2.0.3.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.login.js')}}"></script>
    <script src="{{asset('js/login.js')}}"></script>
    <!--END PAGE LEVEL SCRIPTS -->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
    $.backstretch("images/bg_2.jpg", {
        speed: 500
    });
    </script>

</body>
<!-- END BODY -->

</html>