<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<style>
	<?php include "/xampp/htdocs/script_final/css/sign_in.css" ?>
</style>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<head>
	<title>Gazi Üniversitesi</title>
</head>
<div class="main">
	<div class="container">
		<center>
			<div class="middle">
				<div id="login">

					<form action="javascript:void(0);" method="get">

						<fieldset class="clearfix">

							<p><span class="fa fa-user"></span><input type="text" Placeholder="Öğrenci No" required></p>
							<p><span class="fa fa-lock"></span><input type="password" Placeholder="Şifre" required></p>

							<div>
								<span style="width:48%; text-align:left;  display: inline-block;"><a class="small-text" href="#">Şifremi Unuttum</a></span>
								<span style="width:50%; text-align:right;  display: inline-block;"><input type="submit" value="GİRİŞ YAP"></span>
							</div>

						</fieldset>
						<div class="clearfix"></div>
					</form>
				</div>
				<div class="logo">
					<?php
					$log = "/images/logo.jpg";
					echo "<img src='$log' width='100' height='100'/>";
					?>
				</div>

			</div>
		</center>
	</div>

</div>