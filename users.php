<?php
	$string="<table>
	<thead>
		<tr>
			<th>User ID</th>
			<th>Username</th>
		</tr>
	</thead>
	<tbody>";

	require_once "functions.php";

	$oUsers=LoadUsers();

	session_start();

	//print_r($oUsers);
	foreach($oUsers as $x)
	{
		//print_r($x);
		//print_r($_SESSION['user_id']);
		$dodaj="";
		if($x['user_id']==$_SESSION['user_id'])
		{
			$dodaj='<tr style="background-color: green"><td>'.$x['user_id'].'</td><td>'.$x['username'].'</td></tr>';
		}
		else
		{
			$dodaj="<tr><td>".$x['user_id']."</td><td>".$x['username']."</td></tr>";
		}
		$string .=$dodaj;
	}

	$string .="</tbody></table>";
	echo $string;


?>