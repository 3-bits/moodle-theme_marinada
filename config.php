<?php

/**
 * @package    theme
 * @subpackage marinada
 * @copyright  2013 Fernando Acedo. http://3-bits.com
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$THEME->name = 'marinada';

/////////////////////////////////
// The only thing you need to change in this file when copying it to
// create a new theme is the name above. You also need to change the name
// in version.php and lang/en/theme_bootmood.php as well.
//////////////////////////////////
//
$THEME->doctype = 'html5';
$THEME->parents = array('bootstrapbase3b');
$THEME->sheets = array(
    'marinada',
    'settings',
    'custom'
);


$THEME->supportscssoptimisation = false;
$THEME->yuicssmodules = array();

$THEME->editor_sheets = array();

$THEME->plugins_exclude_sheets = array(
    'block' => array(
        'html'
    ),
    'gradereport' => array(
        'grader',
    ),
);


$THEME->rendererfactory = 'theme_overridden_renderer_factory';
$THEME->csspostprocess = 'marinada_process_css';

$useragent = '';
if (!empty($_SERVER['HTTP_USER_AGENT'])) {
    $useragent = $_SERVER['HTTP_USER_AGENT'];
}
if (strpos($useragent, 'MSIE 8') || strpos($useragent, 'MSIE 7')) {
    $THEME->javascripts[] = 'html5shiv';
}