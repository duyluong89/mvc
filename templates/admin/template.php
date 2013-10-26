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
				<div id="logo"><img src=<?php echo $config->default_logo?> /></div>
				<nav>
				<ul>
					<li><a href="<?php echo $config->siteUrl?>"><?php echo $trans->t('home')?></a></li>
					<li><a href="<?php echo $config->siteUrl?>"><?php echo $trans->t("info")?></a></li>
					<li><a href="<?php echo $config->siteUrl?>"><?php echo $trans->t('person')?></a></li>
					<li><a href="<?php echo $config->siteUrl?>"><?php echo $trans->t('manager')?></a></li>
				</ul>
				
				</nav>
				<div class="block-user-info">
				<ul class="right">
					<li><a href="<?php echo $config->siteUrl?>"><?php echo $trans->t('register')?></a></li>
					<li><a href="<?php echo $config->siteUrl?>"><?php echo $trans->t("login")?></a></li>
				</ul>
				</div>
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