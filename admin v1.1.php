<?php require'database.php' ?>
<?php
if(isset($_POST['signin'])){
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);
	$res=mysqli_query($conn,"SELECT * FROM admin_users WHERE username='$username'");
  $row = mysqli_fetch_array($res);
  $count = mysqli_num_rows($res);
    if($count == 1 && $row['password']==$password){
    	  session_start();
        $_SESSION['admin_id'] = $row['user_id'];
        header("Location: adminHome.php");
	}else{
        $errMSG = "Incorrect Credentials, Try again...";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>RitchEducate</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
        <style>
			#btrit{
				background-color: rgba(0,0,0,0.5);
				color: white;
            .button:hover {
            background-color: #4CAF50; /* Green */
            color: white;
            }
                
            
					
            }
        </style>
	</head>
	<body>
	<video autoplay muted loop id="myVideo">
	<source src="https://css-tricks-post-videos.s3.us-east-1.amazonaws.com/blurry-trees.mov" autoplay loop playsinline muted>
	</video>
		<section id="main-section">
			<div class="overlay">
				<div class="container">
					<div class="row">
						<div class="col-lg-8">
							<div class="main-frame text-center">
								<h1 style="font-size:400%;"><strong><span style="background-color:rgba(0,0,0,0.5);display: block;font-weight:bold;"><i class="fa fa-user"></i> Admin Lounge</span></strong></h1>
							
							<span>
								<h2><span style="background-color:rgba(0,0,0,0.5);display: block;"><a target="_blank" href="https://github.com/ritchiepulikottil">GitHub @ritchiepulikottil</a></span></h2>
							</span>
                            <span>
								<h3><span style="background-color:rgba(0,0,0,0.5);display: block;"><a target="_blank" href="https://github.com/theneoterik">Contributors: Shihaan W S</a></span></h3>
								<a style="background-color:rgba(0,0,0,0.5);position:fixed;bottom:0;left:0;" class="btn btn-primary btn-block" href="index.php">Go to Users Section</a>
							</div>
						</div>
						<div class="col-lg-4">
              <div class="login">
								<ul class="nav nav-pills nav-justified">
                  <li class="active"><a style="background-color:rgba(0,0,0,0.5);">Administrator Sign In</a></li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane in fade active">
										<form action="" method="post" style="padding-left:20px; padding-right:20px"><br><br>
											<div class="form-group"><input class="form-control" type="text" name="username" placeholder="Username"></div><br>
											<div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div><br><br>
											<button id="btrit" class="form-control" type="submit" name="signin" value="Sign In">Sign In</button>
										</form>
									</div>
								</div>
								<br><center><span><?php if(isset($errMSG)){echo $errMSG;}?></span><center>
							</div>
            </div>
				</div>
			</div>
		</div>
	</section>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>
