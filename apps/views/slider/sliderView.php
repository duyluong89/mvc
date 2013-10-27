<div id="slider">
	<ul>	
	<?php foreach ($sliders as $slider):?>			
		<li><a href="<?php echo $slider->getUrl()?>">
		<img src="<?php echo $config->uploadUrl . 'slider/' . $slider->getImage()?>" alt="<?php echo $slider->getAlias()?>" />
		</a></li>
	<?php endforeach;?>
	</ul>
</div>
<script>
$(document).ready(function(){	
	$("#slider").easySlider({
		auto: true,
		continuous: true ,
		lastShow: false,
		numeric: true
	});
});
</script>