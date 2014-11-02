<?php get_header(); ?>

<section id="intro">
	<h2>A small development agency focused on helping people build the things they need.</h2>
</section>

<section id="about">
	
	<h3 class="access">About Us</h3>
	
	<div class="about-text">
		<p>Organizations and their clients are desperate for reliable development when they need it &mdash; and we're here to help.</p>
		<p>We believe that well-crafted development is necessary to produce quality products. We're obsessive about delivering high-quality code and doing it on time.</p>
		<p>We're not interested in being the biggest agency around &mdash; just a valuable partner for the folks we work with.</p>
	</div>
	
	<div class="about-bios">
		
		<dl>
			<img src="<?php echo get_template_directory_uri();?>/assets/images/mobley_circle.jpg" />
			<dt class="name">Josh Mobley</dt>
			<dd class="job-title">Managing Partner</dd>
			<dd class="skill">Front-end Development</dd>
			<dd class="skill">User Experience Design</dd>
		</dl>
		
		<dl>
			<img src="<?php echo get_template_directory_uri();?>/assets/images/rucker_circle.jpg" />
			<dt class="name">Josh Rucker</dt>
			<dd class="job-title">Partner</dd>
			<dd class="skill">Full-stack Development</dd>
			<dd class="skill">Content Direction</dd>
		</dl>
		
	</div>
	
</section><!--#about-->
	
<section id="services">
	
	<h3 class="access">Services</h3>

	<dl class="development">
		<dt>Front-End Development</dt>
		<dd>Our bread and butter is custom built sites that convert on your goals.</dd>
	</dl>
	
	<dl class="customization">
		<dt>CMS Customization</dt>
		<dd>Have a CMS that just needs a little work? We're here for you, too.</dd>
	</dl>
	
	<dl class="support">
		<dt>Ongoing Support</dt>
		<dd>We can also be your retainer-free support team.</dd>
	</dl>
	
</section><!--#services-->

<section id="contact">
	
	<div class="contact-text">
	
		<h3>Get In Touch</h3>
	
		<p>If you've got a project ready to start, or are just looking for someone to be your "go-to" developers in the future, we'd love to hear from you. We love talking with others about their projects and helping folks map out the way forward.</p>
		
	</div>
	
	<form>
		<fieldset>
			<input type="text" name="name" placeholder="Name" />
			<input type="email" name="email" placeholder="Email" />
			<input type="text" name="organization" placeholder="Organization" />
			<textarea name="summary" placeholder="Summary of Project"></textarea>
			<input type="submit" name="submit" value="Submit" />
		</fieldset>
	</form>
	
</section>

<?php get_footer(); ?>
	