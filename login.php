<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Sign In / Sign Up Form</title>
  
	<!-- ✅ Link to your external CSS file -->
	<link rel="stylesheet" href="registration.css" />
  
	<!-- ✅ Font Awesome for social icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  </head>
  
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form method="POST">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="https://www.facebook.com/" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="https://in.linkedin.com/" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" name="name">
			<input type="email" placeholder="Email" name="mail">
			<input type="password" placeholder="Password" name="pass">
		    <button type="" name="login">Login</button>
		</form>
		<?php 
		$con = mysqli_connect('localhost','root','','user_system');
		
		if (!$con) {
         die("Connection failed: " . mysqli_connect_error());
		}
       //-----------------------Register User--------------------------
		if(isset($_POST['login']))
		{
		$name=$_POST['name'];
		$email=$_POST['mail'];
		$password=$_POST['pass'];
		
		$query ="INSERT INTO users (name, email, password) VALUES ('$name','$email','$password')";
		$run=mysqli_query($con,$query);
		 if ($run) {
        echo "<script>alert('User registered successfully');</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($con) . "');</script>";
    }
		}

	//------------------------------LOGIN USER-----------------------------
	    if (isset($_POST['signin'])) {
    $email = $_POST['login_email'];
    $password = $_POST['login_pass'];

    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);
        if ($user['password'] === $password) {
            $_SESSION['user'] = $email;
            echo "<script>alert('Login successful!'); window.location='index.php';</script>";
        } else {
            echo "<script>alert('Incorrect password.');</script>";
        }
    } else {
        echo "<script>alert('Email not found.');</script>";
    }
    }
		?>
	</div>
	<div class="form-container sign-in-container">
		<form method="POST">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="https://www.facebook.com/" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="https://accounts.google.com/v3/signin/identifier?dsh=S1812573153%3A1655944654029516&flowEntry=ServiceLogin&flowName=WebLiteSignIn&ifkv=AX3vH39E0iYVTmn-NoMNM_C35EPrno8LWsRx2Qhr0HApkVLZ-Zc_Vql8ouaSQOiXzEmthrpOPAV5" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="https://in.linkedin.com/" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<input type="email" name="login_email" placeholder="Email" required />
            <input type="password" name="login_pass" placeholder="Password" required />
            <a href="#">Forgot your password?</a>
            <button type="submit" name="signin">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Back for more? Let’s go!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Heyy, Buddy!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Login</button>
			</div>
		</div>
	</div>
</div>


<script>
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');
  
	signUpButton.addEventListener('click', () => {
	  container.classList.add("right-panel-active");
	});
  
	signInButton.addEventListener('click', () => {
	  container.classList.remove("right-panel-active");
	});
  </script>
  