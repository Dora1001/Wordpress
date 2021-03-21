
<div class="slider">

<h1 class="slider__header">Heading<h1>
<p class="slider__text">Lorem ipsum dolor sit amet, consect etur adipiscing elit.</p>

<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>
<?php endif; ?> 

</div>
