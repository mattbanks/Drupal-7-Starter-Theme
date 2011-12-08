<?php if ($search_results): ?>
	<h2><?php print t('Search results');?></h2>
	<ol class="search-results <?php print $module; ?>-results">
		<?php print $search_results; ?>
	</ol>
		<?php print $pager; ?>
<?php else : ?>
	<h2><?php print t('Your search yielded no results');?></h2>
	<?php print search_help('search#noresults', drupal_help_arg()); ?>
<?php endif; ?>
