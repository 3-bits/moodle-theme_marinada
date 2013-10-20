<?php

/**
 * @package    theme
 * @subpackage marinada
 * @copyright  2013 Fernando Acedo. http://3-bits.com
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


function marinada_process_css($css, $theme) {
  
    // Set body background color 
    if (!empty($theme->settings->bodybgcolor)) {
        $bodybgcolor = $theme->settings->bodybgcolor;
    } else {
        $bodybgcolor = null;
    }
    $css = marinada_set_bodybgcolor($css, $bodybgcolor);

    
    // Set link color 
    if (!empty($theme->settings->linkcolor)) {
        $linkcolor = $theme->settings->linkcolor;
    } else {
        $linkcolor = null;
    }
    $css = marinada_set_linkcolor($css, $linkcolor);

    // Set link color 
    if (!empty($theme->settings->linkcolor)) {
        $linkcolor = $theme->settings->linkcolor;
    } else {
        $linkcolor = null;
    }
    $css = marinada_set_linkcolor($css, $linkcolor);

    
    // Set link hover color 
    if (!empty($theme->settings->linkhovercolor)) {
        $linkhovercolor = $theme->settings->linkhovercolor;
    } else {
        $linkhovercolor = null;
    }
    $css = marinada_set_linkhovercolor($css, $linkhovercolor);


    // Set menu background color 
    if (!empty($theme->settings->menubgcolor)) {
        $menubgcolor = $theme->settings->menubgcolor;
    } else {
        $menubgcolor = null;
    }
    $css = marinada_set_menubgcolor($css, $menubgcolor);
    
    
    // Set top menu background color 
    if (!empty($theme->settings->topmenubgcolor)) {
        $topmenubgcolor = $theme->settings->topmenubgcolor;
    } else {
        $topmenubgcolor = null;
    }
    $css = marinada_set_topmenubgcolor($css, $topmenubgcolor);

    // Set top menu link color 
    if (!empty($theme->settings->topmenulinkcolor)) {
        $topmenulinkcolor = $theme->settings->topmenulinkcolor;
    } else {
        $topmenulinkcolor = null;
    }
    $css = marinada_set_topmenulinkcolor($css, $topmenulinkcolor);
    

    // Set top menu link hover color 
    if (!empty($theme->settings->topmenulinkhovercolor)) {
        $topmenulinkhovercolor = $theme->settings->topmenulinkhovercolor;
    } else {
        $topmenulinkhovercolor = null;
    }
    $css = marinada_set_topmenulinkhovercolor($css, $topmenulinkhovercolor);

    
    // Set Custom CSS 
    if (!empty($theme->settings->customcss)) {
        $customcss = $theme->settings->customcss;
    } else {
        $customcss = null;
    }
    $css = marinada_set_customcss($css, $customcss);
    
    return $css;
}


function marinada_set_bodybgcolor($css, $bodybgcolor) {
    $tag = '[[setting:bodybgcolor]]';
    $css = str_replace($tag, $bodybgcolor, $css);
    return $css;
}

function marinada_set_linkcolor($css, $linkcolor) {
    $tag = '[[setting:linkcolor]]';
    $css = str_replace($tag, $linkcolor, $css);
    return $css;
}

function marinada_set_linkhovercolor($css, $linkhovercolor) {
    $tag = '[[setting:linkhovercolor]]';
    $css = str_replace($tag, $linkhovercolor, $css);
    return $css;
}

function marinada_set_menubgcolor($css, $menubgcolor) {
    $tag = '[[setting:menubgcolor]]';
    $css = str_replace($tag, $menubgcolor, $css);
    return $css;
}

function marinada_set_topmenubgcolor($css, $topmenubgcolor) {
    $tag = '[[setting:topmenubgcolor]]';
    $css = str_replace($tag, $topmenubgcolor, $css);
    return $css;
}

function marinada_set_topmenulinkcolor($css, $topmenulinkcolor) {
    $tag = '[[setting:topmenulinkcolor]]';
    $css = str_replace($tag, $topmenulinkcolor, $css);
    return $css;
}

function marinada_set_topmenulinkhovercolor($css, $topmenulinkhovercolor) {
    $tag = '[[setting:topmenulinkhovercolor]]';
    $css = str_replace($tag, $topmenulinkhovercolor, $css);
    return $css;
}

function marinada_set_customcss($css, $customcss) {
    $tag = '[[setting:customcss]]';
    $replacement = $customcss;
    if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}


// Load JQuery and plugins libraries
function theme_marinada_page_init(moodle_page $page) {
    $page->requires->jquery();
    $page->requires->jquery_plugin('flexslider');
}

























