<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Forms</title>

{{ Html::style('Admin/css/bootstrap.min.css') }}
{{ Html::style('Admin/css/datepicker3.css') }}
{{ Html::style('Admin/css/styles.css') }}

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>

	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form role="form" method="POST" action="{{ route('login') }}">
						{{ csrf_field() }}
						<fieldset>
							<div class="form-group">
								<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="" value="{{ old('email') }}">
								@if ($errors->has('email'))
										<span class="help-block">
												<strong>{{ $errors->first('email') }}</strong>
										</span>
								@endif
							</div>
							<div class="form-group">
								<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
								<input class="form-control" placeholder="Password" name="password" type="password" value="" required="">
								@if ($errors->has('password'))
										<span class="help-block">
												<strong>{{ $errors->first('password') }}</strong>
										</span>
								@endif
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
								</label>
							</div>
							<button type="submit" class="btn btn-primary">
									Login
							</button>
							<div>
								<a class="btn btn-link" href="{{ route('password.request') }}">
										Forgot Your Password?
								</a>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){
				$(this).find('em:first').toggleClass("glyphicon-minus");
			});
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>
</body>

</html>
