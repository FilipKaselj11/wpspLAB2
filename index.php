<form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
	<!--form action="hello.php" method="GET"-->
	<label for="username"><b>Username</b></label>
	<br>
	<input type="text" placeholder="Username" name="username" required>
	<br>
	<br>
	<label for="password"><b>Password</b></label>
	<br>
	<input type="password" placeholder="Password" name="password" required>
	<br>
	<br>
	<button type="submit">Login</button>
</form>

<?php
	if(isset($_POST['username']) && isset($_POST['password']))
	{
		require_once('functions.php');
		$oUser=CheckUsers($_POST['username'],$_POST['password']);
		print_r($oUser);
		if($oUser['user_id'] !=null || $oUser['username']!= null)
		{
			SetSessions($oUser);
			header ("Location: users.php");
		}
	}
	else
	{
		echo "popunite sva polja";
	}

?>