<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //begin loop?>
<div class="case-study">
<section class="case-study-header">
	<h2 class="category-title">Case Studies</h2>
	<h3 class="study-title"><?php the_field('client_name'); ?></h3>
	<img src="<?php the_field('client_screenshot'); ?>" />
</section>

<section>
	<div class="client">
		<dl>
			<dt style="background-image: url('<?php the_field('client_logo'); ?>')"><?php the_field('client_name'); ?></dt>
			<dd><a href="<?php the_field('client_website');?>"><?php the_field('client_website'); ?></a></dd>
		</dl>
	</div>
	<div class="services">
		<?php 
		echo '<ul>';
		foreach(get_field('services_provided') as $service ){
			foreach($service as $name){
				echo '<li>'.$name.'</li>';
			}
		}
		echo '</ul>';
		?>
	</div>
	<?php the_content(); ?>
</section>
</div>
<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; //end loop?>

<?php get_footer(); ?>