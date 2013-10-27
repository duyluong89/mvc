<!DOCTYPE html>
<html>
<head>
<title>Test mvc</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo $view->includeStyle($config->skinCss . 'style.css')?>
<?php echo $view->includeStyle($config->skinCss . 'screen.css')?>
<?php echo $view->includeJs($config->skinJs . 'jquery.js')?>
<?php echo $view->includeJs($config->skinJs . 'easySlider1.7.js')?>

</head>
<body>

	<header>
		<section class="container">
			<div class="header-top">
				<div id="logo"><img src=<?php echo $config->default_logo?> /></div>
				<nav>
				<ul>
					<li><a href="<?php echo $config->siteUrl?>"><?php echo $trans->t('home')?></a></li>
					<li><a href="<?php echo $config->siteUrl . 'about'?>"><?php echo $trans->t("info")?></a></li>
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
		<div class="block slider">
			<?php echo isset($slider) ? $view->extractView($slider) : ""?>
		</div>
		<?php echo isset($content) ? $view->extractView($content) : ""?>
	</section>
	</article>
	<footer>
		<?php echo isset($footer) ? $view->extractView($footer) : ""?>
	 </footer>


</body>
</html>