<?php
require_once(__DIR__.'/includes/util/shortcode.util.php');

$shortcodeUtil = new ShortcodeUtil();

add_shortcode('section', array($shortcodeUtil, 'renderSection'));

?>