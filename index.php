<!DOCTYPE html>
<html>
<head>
   	<title>Facebook</title>
     <link rel="stylesheet" href="style.css" type="text/css" />
	 <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
	</head>
<body>
	<div class = "headerDiv">
		<div class = "headerMarginDiv">
			<div class = "headerLogoDiv">
				<h1>Facebook</h1>
			</div>
			<div class = "headerLoginDiv">
			<form action = "loginuser.php" method = "POST">
				<table>
				<tr>
					<td>
						<label for = "email">Email</label>
					</td>
					<td>
						<label for = "password">Password</label>
					</td>
				</tr>
				<tr>
					<td>
						<input type = "text" name = "email">
					</td>
					<td>
						<input type = "password" name = "password">
					</td>
					<td>
						<button type = "submit">Log In</button>
					</td>
				</tr>
				<tr>
					<td>
						
						<input type = "checkbox" >
						<label for = "checkbox">Keep me Logged In</label>
					</td>
					<td>
						<label>Forgot Password</label>
					</td>
				</tr>
			</form>
			</table>
			</div>
		</div>
	</div>
	<div class = "containerDiv">
		<div class = "containerMarginDiv">
			<div class = "containerUpdateDiv">
			
				<h1 class = "update1">connect with friends and world around you in facebook.</h1>
				<h2 class = "update2">See photos and updates from friends in News Feed.</h2>
				<h2 class = "update2">Share what's new in your life on your Timeline.</h2>
				<h2 class = "update2">Find more of what you're looking for with Facebook Search.</h2>
			</div>
			<div class = "containerSignUpDiv">
				<span class = "signUpFontSize">Sign Up</span>
				<h2>Its Free and always will be</h2>
				<form action = "registeruser.php" method = "POST" id="signup-form">
		
						<input class = "inputBoxHeight inlineBox" type = "text" id="firstname" name = "firstname" placeholder = "First Name">
						<input class = "inputBoxHeight inlineBox" type = "text" name = "lastname" placeholder = "Last Name">
						<input class = "inputBoxHeight" type = "email" name = "email" placeholder = "Email">
						<input class = "inputBoxHeight" type = "tel" id="mobile" name = "mobile" placeholder = "Mobile Number">
						<input class = "inputBoxHeight" type = "text" id="repeatmobile" name = "repeatemailormobile" placeholder = "Re-enter Email or Mobile Number">
						<input class = "inputBoxHeight" type = "password" name = "password" placeholder = "New Password">
					
					<div class = "">
						<div class = "genderDivA genderDiv">
							<input type="radio" name="gender" value="male"> Male<br>
						</div>
						<div class = "genderDivB genderDiv">
							<span><input type="radio" name="gender" value="female"> Female<br> </span>
						</div>	
				    </div>
					<h3>By clicking Sign Up, you agree to our Terms and that you have read our Data Policy, including our Cookie Use.</h3>
					<button class = "buttonSize" type = "submit">Submit</button>
			
				</form>
			</div>
			<div class = "floatFixed">
			</div>
		</div>
	</div>
	<div class = "footerDiv">
		<div class = "footerMarginDiv">
			<h4>English (US)العربيةFrançais (France)Bahasa IndonesiaनेपालीTürkçeதமிழ்Españolहिन्दीPortuguês (Brasil)…</h4>
			<div class = "footerUpperDiv">
			</div>
			<div class = "footerLowerDiv">
				<div class ="div1">
					<h4>Sign Up</h4>
					<h4>locations</h4>
				
				
					<h4>Login</h4>
					<h4>About</h4>
				</div>
				<div class ="div3">
					<h4>Messanger</h4>
					<h4>Create Ad</h4>
				</div>
				<div class ="div4">
					<h4>Facebook Lite</h4>
					<h4>Create Page</h4>
				</div>
				<div class ="div5">
					<h4>Mobile</h4>
					<h4>Developers</h4>
				</div>
				<div class ="div6">
					<h4>Find Friends</h4>
					<h4>Careers</h4>
				</div>
				<div class ="div7">
					<h4>Badges</h4>
					<h4>Privacy</h4>
				</div>
				<div class ="div8">
					<h4>People</h4>
					<h4>Cookies</h4>
				</div>
				<div class ="div9">
					<h4>Pages</h4>
					<h4>Add Choices</h4>
				</div>
				<div class ="div10">
					<h4>Places</h4>
					<h4>Terms</h4>
				</div>
				<div class ="div11">
					<h4>Games</h4>
					<h4>Help</h4>
				</div>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="app.js"></script>
</html>