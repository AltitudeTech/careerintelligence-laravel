<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title> @yield('title')	 | Career Intelligence </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="" />

@section('css')
	@include('layouts.cssimport')
@show

	
</head>

<!-- Body -->
<body>

<!-- banner -->
	@yield('banner')	
	<!-- //banner -->
<!-- Modal1 -->
	@section('modal')

		<div id="ModalLoginForm" class="modal fade" style="margin-top: 150px;">
		    <div class="modal-dialog" role="document">
		        <div class="modal-content" style="border-radius:0px !important;">
		            <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
		                <h4 class="modal-title">Candidate Login</h4>
		            </div>
		            <div class="modal-body">
		                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-info">
                                        Login
                                    </button>

                                    <span>OR</span>

                                    <button type="button" style="border-radius: 0px ;" class="btn btn-primary"><span style="border: 1px solid #fff; padding: 5px ; border-radius: 2px ;" class="fa fa-facebook"></span>
                                        Login with Facebook
                                    </button>

                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>
                        </form>
		            </div>
		        </div><!-- /.modal-content -->
		    </div><!-- /.modal-dialog -->
		</div>

        <div id="empModalLoginForm" class="modal fade" style="margin-top: 150px;">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="border-radius:0px !important;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Employer Login</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-info">
                                        Login
                                    </button>

                                    <span>OR</span>

                                    <button type="button" style="border-radius: 0px ;" class="btn btn-primary"><span style="border: 1px solid #fff; padding: 5px ; border-radius: 2px ;" class="fa fa-facebook"></span>
                                        Login with Facebook
                                    </button>

                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>

        <div id="empModalRegForm" class="modal fade">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="border-radius:0px !important;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Employer</h3>
                    </div>
                    <div class="modal-body" style="padding: 0px 60px;">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                    <input id="firstname" type="text" name="firstname" placeholder="First name" value="{{ old('firstname') }}" required autofocus>
                                    @if ($errors->has('firstname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('firstname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                    <input id="lastname" type="text" name="lastname" placeholder="Last name" value="{{ old('lastname') }}" required autofocus>
                                    @if ($errors->has('lastname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('lastname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                    <input id="phone" type="text" name="phone" placeholder="Phone" value="{{ old('phone') }}" required autofocus>
                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input id="email" type="text" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
                                    <input id="company" type="text" name="company" placeholder="Company" value="{{ old('company') }}" required autofocus>
                                    @if ($errors->has('company'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('company') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('jobtitle') ? ' has-error' : '' }}">
                                    <input id="jobtitle" type="text" name="jobtitle" placeholder="Job Title" value="{{ old('jobtitle') }}" required autofocus>
                                    @if ($errors->has('jobtitle'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('jobtitle') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                                    <input id="website" type="text" name="website" placeholder="Website" value="{{ old('website') }}" required autofocus>
                                    @if ($errors->has('website'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('website') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                                    @if ($errors->has('website'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('website') }}</strong>
                                        </span>
                                    @endif
                                    <textarea style="width: 100% ; resize: none;" rows="5"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="button" style="border-radius: 0px;" class="btn btn-block btn-danger btn-lg">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>

        <div id="canModalRegForm" class="modal fade">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="border-radius:0px !important;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Candidate</h3>
                    </div>
                    <div class="modal-body" style="padding: 0px 60px;">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                    <input id="firstname" type="text" name="firstname" placeholder="First name" value="{{ old('firstname') }}" required autofocus>
                                    @if ($errors->has('firstname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('firstname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                    <input id="lastname" type="text" name="lastname" placeholder="Last name" value="{{ old('lastname') }}" required autofocus>
                                    @if ($errors->has('lastname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('lastname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                    <input id="phone" type="text" name="phone" placeholder="Phone" value="{{ old('phone') }}" required autofocus>
                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input id="email" type="text" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                                    @if ($errors->has('website'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('website') }}</strong>
                                        </span>
                                    @endif
                                    <textarea style="width: 100% ; resize: none;" rows="5"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="button" style="border-radius: 0px ;" class="btn btn-danger btn-block btn-lg">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
	@show	
<!-- //Modal1 -->

<!-- welcome -->
@yield('body')
<!-- //subscribe section -->

@include('layouts.footer')
<!-- //copyright -->

<!-- Default-JavaScript-File -->

@include('layouts.jsimport')

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-59c55ee9a6332134"></script>
<script type="text/javascript">
    function bs_input_file() {
    $(".input-file").before(
        function() {
            if ( ! $(this).prev().hasClass('input-ghost') ) {
                var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0'>");
                element.attr("name",$(this).attr("name"));
                element.change(function(){
                    element.next(element).find('input').val((element.val()).split('\\').pop());
                });
                $(this).find("button.btn-choose").click(function(){
                    element.click();
                });
                $(this).find("button.btn-reset").click(function(){
                    element.val(null);
                    $(this).parents(".input-file").find('input').val('');
                });
                $(this).find('input').css("cursor","pointer");
                $(this).find('input').mousedown(function() {
                    $(this).parents('.input-file').prev().click();
                    return false;
                });
                return element;
            }
        }
    );
}
$(function() {
    bs_input_file();
});
</script>

</body>

@yield('basicjs')
<!-- //Body -->
</html>