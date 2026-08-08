<?php get_header(); ?>
<main>
    <?php greetings(); ?>


<section id="home">
    <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Shoes.png" alt=""> -->

</section>

<section id="about">
    <h1>This is my index page</h1>
    <img id="shoe" src="<?php echo get_template_directory_uri(); ?>/assets/images/Shoes.png" alt="">

</section>

<section id="services">

</section>
</main>

<h1><?php the_title(); ?></h1>
<h2><?php the_content(); ?></h2>

<?php get_footer(); ?>



 