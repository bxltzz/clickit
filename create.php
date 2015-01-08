<!DOCTYPE html>
<html>
	<head>
		<title>Make a new post</title>
		<link type="text/css" rel="stylesheet" href="style.css" />
	</head>
	<body>
		<div class="post">
			<h1>Add post</h1>
			<form method="POST">
				<table>
					<tr><td>User</td><td><input id="user" name="user" type="text" /></td></tr>
					<tr><td>Title</td><td><input id="title" name="title" type="text" /></td></tr>
					<tr><td>Post</td><td><textarea id="post" name="post"></textarea></td></tr>
					<tr><td></td><td><input name="submit" type="submit" id="submit" value="Submit" /></td></tr>
				</table>
			</form>
			<p><a href="/">Go back</a></p>
		</div>
	</body>
</html>
<?php
	if(isset($_POST['submit'])) {
		$user = stripslashes(htmlspecialchars($_POST['user']));
		$title = stripslashes(htmlspecialchars($_POST['title']));
		$post = stripslashes(htmlspecialchars($_POST['post']));
		$date = date("F d, Y");
		$file = 'posts.php';
		
		 if(empty($user) || empty($title) || empty($post)) {
			echo 'One or more fields are empty!';
		} else {
			$content = file_get_contents($file);
			$content = "\n<div class=\"post\"><h1>$title</h1><p><b>Written by $user on $date:</b> $post</div>".$content;
			file_put_contents($file, $content);
		}
	}