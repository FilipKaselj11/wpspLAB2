<?php
	function LoadUsers()
	{
		$string=file_get_contents("users.json");
		$oUsers=json_decode($string, true);
		//print_r($oUsers);
		return $oUsers;
	}

	function CheckUsers($sUsername,$sPassword)
	{
		$oUser=array(
			'user_id'=> null,
			'username'=> null);

		$oUsers=LoadUsers();
		print_r($oUsers);
		foreach($oUsers as $x)
		{
			if($sUsername==$x['username'])
			{
				if($sPassword==$x['password'])
				{
					$oUser['user_id']=$x['user_id'];
					$oUser['username']=$x['username'];
				}
				break;	
			}
		}
		print_r($oUser);
		return $oUser;
	}

	function SetSessions($oUser)
	{
		session_start();
		$_SESSION['user_id']=$oUser['user_id'];
		$_SESSION['username']=$oUser['username'];
	}

?>