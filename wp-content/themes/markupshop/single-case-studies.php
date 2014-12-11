<?php get_header(); ?>
<div class="case-study">
<section class="case-study-header">
	<h2 class="category-title">Case Studies</h2>
	<h3 class="study-title"><?php the_field('client_name'); ?></h3>
</section>

<section class="problem">
	<div class="section-text">
		<h4 class="section-header">The Problem</h4>
		<?php the_field('client_problem'); ?>
	</div>
	<img src="<?php the_field('problem_screenshot'); ?>">
</section>

<section class="solution">
	<div class="section-text">
		<h4 class="section-header">The Solution</h4>
		<?php the_field('our_solution'); ?>
	</div>
	<img src="<?php the_field('solution_screenshot'); ?>" />
</section>
</div>
<?php get_footer(); ?>