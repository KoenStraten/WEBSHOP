<!DOCTYPE html>
<html>

<head>
<title>Webshop</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style type="text/css">
</style>
</head>

<header> 
<?php
require_once 'header.php';
?>
</header>

<body>
	<h3>Register</h3>
	<div class="container pt-5">
		<div class="row">
			<div class="col-sm-3 col-md-4"></div>
			<div class="col-md-4 col-md-offset-3">
				<div class="panel panel-register">
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="register-form"
									action="https://phpoll.com/register/process" method="post"
									role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1"
											class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1"
											class="form-control" placeholder="Email Address" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password"
											tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<input type="password" name="confirm-password"
											id="confirm-password" tabindex="2" class="form-control"
											placeholder="Confirm Password">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit"
													id="register-submit" tabindex="4"
													class="form-control btn btn-register" value="Register Now">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-3 col-md-4"></div>
		</div>
	</div>



	<!-- scripts  -->
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
	</script>
	<script src="js/bootstrap.min.js"></script>
</body>

<footer>
<?php
require_once 'footer.php';
?>
</footer>

</html>