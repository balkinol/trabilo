
<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">

	<label class="sr-only" for="s"><?php esc_html_e( 'Search', 'trabilo' ); ?></label>

		<div class="input-group">
			<input class="field form-control" id="s" name="s" type="text" placeholder="<?php esc_attr_e( 'Search', 'trabilo' ); ?>" value="<?php the_search_query(); ?>">

			<span class="input-group-append">
				<button name="submit" type="submit" id="searchsubmit" class="btn btn-default btn-search" value="<?php esc_attr_e( 'Search', 'trabilo' ); ?>">
					<i class="fas fa-search"></i>
				</button>
			</span>
		</div>

</form>