<div class="aet-aboutme-boxes aet-row">

    <?php while ( have_rows('aboutmes', 'option') ) : the_row();
            $title = get_sub_field('title','option');
            $icon = get_sub_field('icon','option');
            $text = get_sub_field('text','option');
        ?>
            <div class="aet-aboutme-box aet-column-3 aet-column-tablet-6 aet-column-phone-12 slide-in">
                <div class="aet-aboutme-box-icon">
                    <i class="fa fa-<?php echo $icon;?>"></i>
                </div>
                <div class="aet-aboutme-box-title">
                    <?php echo $title; ?>
                </div>
                <div class="aet-aboutme-box-text">
                    <?php echo $text; ?>
                </div>
            </div>
    <?php endwhile; ?>
</div>