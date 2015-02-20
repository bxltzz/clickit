<!doctype html>
<html>
	<head>
		<title>Clickit</title>
		<link type="text/css" rel="stylesheet" href="style.css" />
	</head>
	<body>
			<div id="wrapper">
				<div id="header">
					<h1>Example Clickit Community</h1>
					<p>Sample Text</p>
					<p><a href="create.php">New Post</a></p>
				</div>
				<div id="content">
					<?php include('posts.php'); ?>
				</div>
				<div id="footer">
					<p>&copy; Clickit team 2015</p>
				</div>
			</div>
	</body>
</html>
