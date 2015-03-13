<?php global $option_setting; ?>
<?php if ($option_setting['facebook']) : ?>
<a href="<?php echo $option_setting['facebook'] ?>"><i class="fa fa-facebook"></i></a>
<?php endif; ?>
<?php if ($option_setting['google']) : ?>
<a href="<?php echo $option_setting['google'] ?>"><i class="fa fa-google-plus"></i></a>
<?php endif; ?>
<?php if ($option_setting['twitter']) : ?>
<a href="<?php echo $option_setting['twitter'] ?>"><i class="fa fa-twitter"></i></a>
<?php endif; ?>
<?php if ($option_setting['rss-feed']) : ?>
<a href="<?php echo $option_setting['rss-feed'] ?>"><i class="fa fa-rss"></i></a>
<?php endif; ?>
<?php if ($option_setting['instagram']) : ?>
<a href="<?php echo $option_setting['instagram'] ?>"><i class="fa fa-instagram"></i></a>
<?php endif; ?>
<?php if ($option_setting['flickr']) : ?>
<a href="<?php echo $option_setting['flickr'] ?>"><i class="fa fa-flickr"></i></a>
<?php endif; ?>