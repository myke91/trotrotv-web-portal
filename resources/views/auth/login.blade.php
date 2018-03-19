<!DOCTYPE html>
<html lang="en">
<head>
    <title>TrotroTV App Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        {!! Html::style('vendor/bootstrap/css/bootstrap.min.css') !!}
        {!! Html::style('fonts/font-awesome-4.7.0/css/font-awesome.min.css') !!}
        {!! Html::style('fonts/iconic/css/material-design-iconic-font.min.css') !!}
        {!! Html::style('vendor/animate/animate.css') !!}
        {!! Html::style('vendor/css-hamburgers/hamburgers.min.css') !!}
        {!! Html::style('vendor/animsition/css/animsition.min.css') !!}
        {!! Html::style('vendor/select2/select2.min.css') !!}
        {!! Html::style('vendor/daterangepicker/daterangepicker.css') !!}
        {!! Html::style('css/util.css') !!}
        {!! Html::style('css/main.css') !!}
</head>
<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <form class="login100-form validate-form" method="post" action="{{route('login')}}">
                {{ csrf_field() }}
                <a href="/" class="logo" style="color:$000000; font-weight: bold">
                    <span style="color: #EC2028">Tro</span style="color: #000000"><span>tro.</span><span style="color: #EC2028">TV</span>
                </a>
                <span class="login100-form-title p-b-49">
						Login
					</span>

                <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
                    <span class="label-input100">Username</span>
                    <input class="input100" type="text" name="username" placeholder="Type your username" autocomplete="off">
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                </div>
                <div>
                    @if ($errors->has('username'))
                        <span class="help-block" style="color: red">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <span class="label-input100">Password</span>
                    <input class="input100" type="password" name="password" placeholder="Type your password">
                    <span class="focus-input100" data-symbol="&#xf190;"></span>
                </div>
                <div>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="text-right p-t-8 p-b-31">
                    <a href="{{ route('password.request') }}">
                        Forgot password?
                    </a>
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" type="submit">
                            Login
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
{!! Html::script('vendor/jquery/jquery-3.2.1.min.js') !!}
{!! Html::script('vendor/animsition/js/animsition.min.js') !!}
{!! Html::script('vendor/bootstrap/js/popper.js') !!}
{!! Html::script('vendor/bootstrap/js/bootstrap.min.js') !!}
{!! Html::script('vendor/select2/select2.min.js') !!}
{!! Html::script('vendor/daterangepicker/moment.min.js') !!}
{!! Html::script('vendor/daterangepicker/daterangepicker.js') !!}
{!! Html::script('vendor/countdowntime/countdowntime.js') !!}
{!! Html::script('js/main.js') !!}
@yield('script')
<script>
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });
</script>
</body>
</html>