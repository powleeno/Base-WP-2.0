<?php

add_shortcode('email', function($atts, $content = null) {
    $parameters = shortcode_atts(array(
        'class' => '',
        'message' => '',
        'style' => '',
    ), $atts, 'email');
    $return_html = '';
    $return_html .= '<a href="mailto:' . antispambot($content) . '"';
    if (!empty($parameters['class'])) {
        $return_html .= ' class="' . $parameters['class'] . '"';
    }
    if (!empty($parameters['style'])) {
        $return_html .= ' style="' . $parameters['style'] . '"';
    }
    $return_html .= '>';
    if (!empty($parameters['message'])) {
        $return_html .= $parameters['message'];
    } else {
        $return_html .= antispambot($content);
    }
    $return_html .= '</a>';
    return $return_html;
});
