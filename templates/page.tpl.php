<?php
/**
 * @file
 * Zen theme's implementation to display a single Drupal page.
 */
?>
<div id="wpwrap">
	<div id="adminmenuback"></div>
	<div id="adminmenuwrap">
		<div id="adminmenushadow"></div>
		<?php  $block = module_invoke('system', 'block_view', 'management');
		print render($block);?>
	</div>
	<div id="wpcontent">
		<div id="wpbody"><div id="wpbody-content" >
			<div id="content" class="column"><div id="content-inner" class="section">
				<a id="main-content"></a>
				<?php if ($title): ?>
					<h1 class="title" id="page-title"><?php print $title; ?></h1>
				<?php endif; ?>
				<?php print $messages; ?>
				<?php if ($tabs = render($tabs)): ?>
					<div class="tabs"><?php print $tabs; ?></div>
				<?php endif; ?>
				<?php print render($page['help']); ?>
				<?php if ($action_links): ?>
					<ul class="action-links"><?php print render($action_links); ?></ul>
				<?php endif; ?>
				<?php print render($page['content']); ?>
			</div></div>
		</div></div>
		<div class="clear"></div>
		<?php print render($page['footer']); ?></div></div><?php print render($page['bottom']); ?>