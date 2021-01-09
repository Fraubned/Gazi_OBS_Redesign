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

<?php
$host = "localhost";
$port = "5432";
$dbname = "script";
$user = "postgres";
$dbpassword = "123"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$dbpassword} ";
$dbconn = pg_connect($connection_string);

if(isset($_POST['submit'])&&!empty($_POST['submit'])){
    
	$username = pg_escape_string($_POST['id']);
    $hashpassword = md5($_POST['pwd']);
	$sql =" SELECT * FROM student WHERE student_id = '".$username."' AND password = '".$hashpassword."'";
    $data = pg_query($dbconn,$sql); 
    $login_check = pg_num_rows($data);
    if($login_check =! 1){    
		header("location: http://localhost/script_final/pages/deneme.php");
		exit();
    }else{
		header("location: http://localhost/script_final/pages/main.php");
		exit();
    }
}

?>

<head>
	<title>Gazi Üniversitesi</title>
</head>
<div class="main">
	<div class="container">
		<center>
			<div class="middle">
				<div id="login">

					<form method="post" action="">

						<fieldset class="clearfix">

							<p><span class="fa fa-user"></span><input type="text" name="id" id="id" Placeholder="Öğrenci No" required></p>
							<p><span class="fa fa-lock"></span><input type="password" name="pwd" id="pwd" Placeholder="Şifre" required></p>

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