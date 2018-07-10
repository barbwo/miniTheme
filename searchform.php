<div class="text-center">
	<?php if(is_search()): ?>
			<h1>Może spróbujesz jeszcze raz?</h1>
	<?php else: ?>
		<h1>Czego szukasz?</h1>
	<?php endif; ?>
	<form id="searchform" method="get" action="<?php echo home_url('/'); ?>">
		<input type="hidden" value="1" name="sentence" />
		<input type="search" class="search-field" name="s" placeholder="Po prostu napisz mi." value="<?php the_search_query(); ?>">
		<input type="submit" value="Szukaj">
	</form>
</div>