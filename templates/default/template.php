<!DOCTYPE html>
<html>
<head>
	<title>Test mvc</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
	<header>
	header
	</header>
	<nav>
		navication
	</nav>
	<section>
		<?php echo isset($content) ? $content : "" ?>
	</section>
	<footer>
	footer
	</footer>
</body>
</html>