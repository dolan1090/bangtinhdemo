<?php

//Shortcode
function EcenturaCalculator_shortcode($atts)
{
    ob_start();
    include __DIR__ . '/../template-parts/main.php';
    return ob_get_clean();
}
add_shortcode('Ecentura_Calculator_shortcode', 'EcenturaCalculator_shortcode');