<?php

session_start();

$user = array('user' => 'fajar' , 'pass' => 'fajar');

if(isset($_post['submit'])) {
	if($_post['username'] == $user['user'] && $_post['password'] == $user['pass']) {

	$_session['username'] = $_post['username'];
	echo "login berhasil, joss joss ! >>>";
}
	else{
		form_login();
		echo "username / password salah";
	}
}
	else{
		form_login();
	}

	function form_login() { ?>

<form action="<?php echo $_server['php_self'];?>" method="post">

	<label for="username">username : </label>
	<input type="text" name="username"><br><br>

	<label for="password">password : </label>
	<input type="password" name="password"><br><br>

	<input type="submit" name="submit" value="login">
</form>

<?php } ?>
