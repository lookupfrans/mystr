<html>

<head>

</head>

<body>
	<form action="validateuser.php" method="post">
		<table border="0" cellspacing="1" cellpadding="3">
			<tr>
				<h1 class="heading">H20 store</h1>
			</tr>
			<tr>
				<td colspan="3" class="top-header" ;>Sign in to Your Account</td>
			</tr>
			<tr>
				<td>Email Address:</td>
				<td> <input type="text" name="emailaddress" placeholder="Enter your email" autocomplete="off"  required></td>
			</tr>
			<tr>
				<th>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="forgetpswd.php">I forgot my password
				</td>
				</th>
			</tr>
			<tr>
				<td>Password:</td>
				<td> <input type="password" min-length="8" id="vispswd" max-length="20" placeholder="Enter your password"
						name="password" autocomplete="off"  required><input type="checkbox" onclick="myFunction()">Show Password</td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" class="submit" value="Login"></td>
			</tr>
			<tr>
				<td>Don't have account yet?<a href="signup.php"> Sign up now</a></td>
			</tr>
		</table>
	</form>
</body>
<html>
