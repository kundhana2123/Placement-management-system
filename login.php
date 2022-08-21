<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url("https://geeedubd.files.wordpress.com/2019/08/srm-university-ap-campus.jpg");
  
  background-size: 100%;
}

* {
  box-sizing: border-box;
}



/* Add styles to the form container */
.container {
  position: absolute;
  left: 750px;
  top: 10px;
  margin: 20px;
  max-width: 450px;
  padding: 25px;
  height: 375px;
  background-color: white;
  padding-top: 10px;
  
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>



<div class="bg-img">
<form method="post" action="process.php" class="container">
    
    <h1>Login</h1>

    <label for="Username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="Username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:10px"> Remember me
    </label>
<button type="submit" class="btn">Login</button>
   <p>click here to create an account? <a style="color: dodgerblue;" href="signup.php">Signup</a>.</p>
   <a href ="index.php" style="color: black;">Home</a>
 
  </form>
  <?php if(isset($_GET['err'])){
	echo "<script>alert('Invalid Username or Password')</script>";
	} ?>
</div>



</body>
</html>