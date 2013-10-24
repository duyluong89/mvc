<!DOCTYPE html>
<html>
<head>
<title>Test mvc</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo $config->skinCss . 'style.css'?>"
	rel="stylesheet" type="text/css" />

</head>
<body>

	<header>
		<section class="container">
			<div class="header-top">
				<div id="logo">logo</div>
				<nav>
				<ul>
					<li><a href="<?php echo $config->siteUrl?>">Trang chủ</a></li>
					<li><a href="<?php echo $config->siteUrl?>">Giới thiệu</a></li>
					<li><a href="<?php echo $config->siteUrl?>">Cá nhân</a></li>
				</ul>
				</nav>
			</div>
			<div class="header-bottom"></div>
		</section>

	</header>

	<article>
		<section class="container">
		<?php echo isset($content) ? $content : ""?>
	</section>
	</article>
	<footer> footer </footer>


</body>
</html>