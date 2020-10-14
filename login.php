<?php 
	if (!isset($_POST['send'])){
 ?>	
	<form method="post" action="<?php $PHP_SELF;?>">
		<b>Plase enter Username and Password</b><br>
		Username : <input type="text" name="user"><br>
		Password : <input type="password" name="pass"><br>
		<input type="submit" value="OK" name="send">
	</form>

<?php 
	} else {
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		
		echo "My Username is $user <br>";
		echo "My Password is $pass <br>";
	}
 ?>
	
