<?php

class ShortcodeUtil
{
    function __construct()
    {
    }

    function renderSection($atts)
    {
        static $sectionCounter = 0;

        $oddEvenStyle = ($sectionCounter++ % 2 == 0 ? 'aet-even' : 'aet-odd');

        return '</div></section><section class="aet-section ' . $oddEvenStyle . '"><div class="aet-inlay">';
    }

    private function render($partial, $params)
    {
        ob_start();
        include(__DIR__ . '/../partials/' . $partial . '.partial.php');
        return ob_get_clean();
    }
}

?>