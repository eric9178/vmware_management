<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{asset('assets/images/logo/favicon.png')}}" />
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/main.css')}}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/font-awesome.min.css')}}">
    <title>{{$page_title}} | {{$general->sitename}}</title>
    <script src="{{asset('assets/admin/js/sweetalert.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/admin/css/sweetalert.css')}}">
    <style>
        .login-content .login-box {
            min-height: 330px;
        }
    </style>
</head>
<body>
<section class="material-half-bg">
    <div class="cover" style="background-color: #{{$general->color}};"></div>
</section>
<section class="login-content">
    <div class="logo">
        <h1>{{$page_title}}</h1>
    </div>
    <div class="login-box">
        <form class="login-form" id="login-form" action="{{route('admin.password.email')}}" method="post">
            {{ csrf_field() }}
            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Email Address</h3>

            <div id="error">
                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label class="control-label">Email Address</label>
                <input class="form-control" style="border-color: #{{$general->color}}" name="email" type="email" placeholder="Your Email Address" value="{{ old('email') }}" autofocus required>
            </div>

            <div class="form-group btn-container" id="working">
                <button class="btn btn-primary btn-block login-button-pranto" style="background: #{{$general->color}}; border-color: #{{$general->color}}" ><i class="fa fa-sign-in fa-lg fa-fw"></i>RESET PASSWORD</button>
            </div><br>

        </form>

    </div>
</section>
<!-- Essential javascripts for application to work-->
<script src="{{asset('assets/admin/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/admin/js/popper.min.js')}}"></script>
<script src="{{asset('assets/admin/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/admin/js/jquery.validate.min.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/admin/js/main.js')}}"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="{{asset('assets/admin/js/pace.min.js')}}"></script>

@if (Session::has('message'))
    <script type="text/javascript">
        $(document).ready(function () {
            swal("{{ Session::get('message') }}","", "success");
        });
    </script>
@endif

@if (Session::has('success'))
    <script type="text/javascript">
        $(document).ready(function () {
            swal("{{ Session::get('success') }}","", "success");
        });
    </script>
@endif

@if (Session::has('alert'))
    <script type="text/javascript">
        $(document).ready(function () {
            swal("{{ Session::get('alert') }}","", "warning");
        });
    </script>
@endif

</body>
</html>
