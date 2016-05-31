<!--[if lte IE 8]>
<p class="browsehappy">Sie verwenden einen <strong>veralteten</strong> Browser. Bitte besuchen Sie <a
    href="http://browsehappy.com/">Aktualisieren Sie Ihren Browser</a> um Ihr Surferlebnis zu verbessern.</p>
<![endif]-->

<?php get_header(); ?>

<section class="aet-section aet-odd">
    <div class="aet-inlay">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>
</section>

<?php get_footer(); ?>