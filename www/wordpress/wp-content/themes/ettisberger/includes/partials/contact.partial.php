<div class="aet-contact-boxes aet-row">

    <?php while ( have_rows('contactboxes', 'option') ) : the_row();
            $title = get_sub_field('title','option');
            $icon = get_sub_field('icon','option');
            $link = get_sub_field('link','option');
            $color = get_sub_field('color','option');
            $description = get_sub_field('description','option');
        ?>
            <div class="aet-contact-box aet-column-3 aet-column-tablet-6 aet-column-phone-12 slide-in">

                <a href="<?php echo $link;?>">
                    <div class="aet-contact-box-icon">
                        <i class="fa fa-<?php echo $icon;?>"></i>
                    </div>
                    <div class="aet-contact-box-title">
                        <?php echo $title; ?>
                    </div>
                </a>
            </div>
    <?php endwhile; ?>
</div>