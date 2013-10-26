<!DOCTYPE html>
<html>
<head>
<title>Test mvc</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo $view->includeStyle($config->skinCss . 'style.css')?>
<?php echo $view->includeJs($config->skinJs . 'jquery.js')?>
<?php echo $view->includeJs($config->skinJs . 'easySlider1.7.js')?>

</head>
<body class="columns-left">

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
			<div class="cols-left left">
				<?php echo isset($left) ? $view->extractView($left) : ""?>	
			</div>
			<div class="content right">
				<?php echo isset($content) ? $view->extractView($content) : ""?>	
			</div>
		
	</section>
	</article>
	<footer> footer </footer>


</body>
</html>