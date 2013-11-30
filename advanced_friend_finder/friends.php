<?php
	require("connection.php");
	session_start();
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Friend Finder</title>
		<link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="friends.css">
	</head>
	<body>
		<div id="wrapper">	
			<div class="row" id="header">
				<?php  
				//if logged in
				if(isset($_SESSION['user_info']))
				{
					echo "<div class='col-md-7'><h2>Friend Finder</h2></div>";
					echo "<div class='col-md-3'><h4>Welcome, " . $_SESSION['user_info']['first_name'] . "!</h4></div>"; 
					echo "<div class='col-md-2'>
							<form action='process.php' method='post'>
								<input type='hidden' name='action' value='logout'>
								<input type='submit' value='Log Out' class='btn btn-primary'>
							</form>
						</div>";
				}
				//if not logged in
				else
				{
					echo "<div class='col-md-6'><h2>Friend Finder</h2></div>";
					echo "<div class='col-md-4'><h4>Welcome!  You must be logged in to find friends.</h4></div>";
					echo "<div class='col-md-2'>
							<form action='process.php' method='post'>
								<input type='hidden' name='action' value='log_back_in'>
								<input type='submit' value='Log Back In' class='btn btn-primary'>
							</form>
						</div>";
				}
				?>
			</div> <!-- close header div -->

			<h3>List of Friends</h3>
			<?php
			if(!empty($_SESSION['friends']))
			{
				echo "<table>
						<thead>
							<tr>
								<th>Name</th>
								<th>Email</th>
							</tr>
						</thead>
						<tbody>";
				$friends = $_SESSION['friends'];
				foreach($friends as $friend)
				{
					echo "<tr>" .  
							"<td>" . $friend['full_name'] . "</td>" .
							"<td>" . $friend['email'] . "</td>" .
						"<tr>";
				}
				echo 	"</tbody>
					</table>";
			}
			else
			{
				echo "<p>You have no friends.  Please add some below.</p>";
			}
			?>

			<h3>List of Friend Finder Users</h3>
			<table>
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$users=$_SESSION['users'];
					foreach($users as $user)
					{
						echo "<tr>" . 
								"<td>" . $user['full_name'] . "</td>" . 
								"<td>" . $user['email'] . "</td>" .
								"<td>";
									if($user['id'] == $_SESSION['user_info']['id'])
									{
										echo "Self";
									}
									elseif(in_array($user['id'], $_SESSION['friend_ids']))
									{
										echo "Friends";
									}
									else
									{
									echo "<form action='process.php' method='post'>" .
											"<input type='hidden' name='user_id' value=" . $_SESSION['user_info']['id'] . ">" .
											"<input type='hidden' name='friend_id' value=" . $user['id'] . ">" .
											"<input type='hidden' name='action' value='add_friend'>" .
											"<input type='submit' value='Add Friend' class='btn add_friend'>" . 
										"</form>";
									}
							echo "</td>" .
							"</tr>";
					}	
					?>
				</tbody>
			</table>
		</div> <!-- close wrapper div -->
	</body>
</html>