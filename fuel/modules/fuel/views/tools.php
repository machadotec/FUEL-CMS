<div id="fuel_main_content_inner">
	
	<div class="boxbuttons">
		<ul>
	<?php 
	foreach($nav['tools'] as $key => $val) : ?>
		<?php if ($this->fuel_auth->has_permission($key) && $val != 'View All...') : ?>
		<li<?php if ($this->nav_selected == $key) {?> class="active"<?php } ?>><a href="<?=fuel_url($key)?>" class="ico_<?=url_title(str_replace('/', '_', $key),'_', TRUE)?>"><?=$val?></a></li>
		<?php endif; ?>
	<?php endforeach; ?>
		</ul>
	</div>
	
	<div class="clear"></div>
	
	
</div>


