<?php
require_once(__DIR__.'/includes/util/shortcode.util.php');
require_once(__DIR__.'/includes/util/customfield.util.php');

$shortcodeUtil = new ShortcodeUtil();
$customFieldUtil = new CustomFieldUtils();

add_shortcode('section', array($shortcodeUtil, 'renderSection'));
add_shortcode('contact', array($shortcodeUtil, 'renderContact'));
add_shortcode('skills', array($shortcodeUtil, 'renderSkills'));

?>