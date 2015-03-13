<?php global $option_setting;
$count = 1;
if( $option_setting['slider-enable-on-home'] && (is_front_page() || is_home() )) : 
	if ( count($option_setting['slider-main']) > 0 ) : ?>

    <div id="slider-wrapper">
    <ul class="bxslider">
    	<?php
		  		foreach ( $option_setting['slider-main'] as $slider ) {
		  				if ($count > 5) { break; }
						echo "<li><a href='".esc_url($slider['url'])."'><img src='".$slider['image']."'><div class='slider-caption'><div class='slider-caption-title'>".$slider['title']."</div><div class='slider-caption-desc'>".$slider['description']."</div></div></a></li>";  
						$count++;  
				}
           ?>
     </ul>   
     	<span id="slider-prev"></span>
     	<span id="slider-next"></span>
	</div>
    
<?php endif;
endif; ?>