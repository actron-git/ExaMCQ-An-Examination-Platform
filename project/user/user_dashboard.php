<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title> User Dashboard </title>
    <style>
	.header{font-size:3rem;color:gray}
	html{font-size:62.5%;}
	@media(max-width:900px)
	{
	html{
	font-size:60%;
	}
	}
	@media(max-width:600px)
	{
	html{
	font-size:40%;
	}
	}
	</style>
    </head>
   <body style="background-image:url('bg.jpeg');background-repeat:no-repeat;background-size:cover;" oncontextmenu="return false" oncopy="return false" onpaste="return false">
  <div class="navbar-inverse">
  <div class="navbar-header">
  <button class="navbar-toggle" data-toggle="collapse" data-target="#menu"> 
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
  </button>
  </div>
  
  <div class="collapse navbar-collapse" id="menu">
 <ul class="nav navbar-nav navbar-right">
 
 <li class="active"><a href="user_dashboard.php">Home</a></li>
 <li ><a href="my_profile.php">My Profile</a></li>
 <li><a href="edit_profile.php">Edit Profile</a></li>
 <li><a href="start_exam.php">Start Exam</a></li>
 <li><a href="view_result.php">View Result</a></li>
 <li><a href="logout.php">Log-Out</a></li>
 </ul>
  </div>
  
  </div>
  <br></br>
  <center><p class="header"> 
  <?php 
  session_start(); 
  if(isset($_SESSION["user"]))
  {
	echo "Welcome ".$_SESSION["user"];   
  }
  else
  {
	  header("Location:http://localhost/project/login.php");
  }
  
  ?>
  </p>  </center>
</body>
</html>