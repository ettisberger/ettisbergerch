<footer class="aet-footer">
    <div class="aet-inlay">
        <div class="aet-row">
            <div class="aet-footer-box aet-column-6 aet-column-tablet-6 aet-column-phone-12">
                <?php echo get_field('text-left', 'option'); ?>
            </div>
            <div class="aet-footer-box aet-column-6 aet-column-tablet-6 aet-column-phone-12">
                <?php
                $text = get_field('text-right', 'option');

                if (function_exists('encryptx')) {
                    encryptx($text);
                } else {
                    echo $text;
                }
                ?>
            </div>
        </div>
    </div>
</footer>