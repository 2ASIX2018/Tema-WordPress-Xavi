<?php
get_header();
?>

<section class="container">
<article class="col-md-8">

<?php
global $post;
if (have_posts()) {
    while (have_posts()) {
        the_post();
?>
		<div class="col-md-4">
			<h2><?php the_title(); ?></h2>
			<p><?php the_content(); ?></p>
		</div>
<?php
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
	}
}
?>

</article>
</section>
<?php get_sidebar(); ?>

<?php get_footer(); ?>