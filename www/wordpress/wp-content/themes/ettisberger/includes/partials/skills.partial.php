<div class="aet-skill-boxes aet-row">

    <?php while ( have_rows('skills', 'option') ) : the_row();
            $skill = get_sub_field('skill','option');
            $rating = get_sub_field('rating','option');
        ?>
            <div class="aet-skill-box aet-column-2 slide-in">
                <div class="aet-skill-box-title">
                    <?php echo $skill; ?>
                </div>
                <div class="aet-skill-box-rating">
                    <?php echo $rating; ?>
                </div>
            </div>
    <?php endwhile; ?>
</div>