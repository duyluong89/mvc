<div class="block <?php echo !is_null($block->getBlockClass()) ? $block->getBlockClass() : "" ?>">
<div class="block-title"><h2><?php echo $block->getTitle()?></h2></div>
<div class="block-content">
<?php echo $block->getContent()?>
</div>
</div>