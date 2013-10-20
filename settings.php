<?php

/**
 * @package    theme
 * @subpackage marinada
 * @copyright  2013 Fernando Acedo. http://3-bits.com
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

 
defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    

//Logo
	$name = 'theme_marinada/logo_url';
	$title = get_string('logo_url','theme_marinada');
	$description = get_string('logo_urldesc', 'theme_marinada');
	$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
	$settings->add($setting);

//Logo2
	$name = 'theme_marinada/logo2_url';
	$title = get_string('logo2_url','theme_marinada');
	$description = get_string('logo2_urldesc', 'theme_marinada');
	$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
	$settings->add($setting);




//Body background
    $name = 'theme_marinada/bodybgcolor';
    $title = get_string('bodybgcolor','theme_marinada');
    $description = get_string('bodybgcolordesc', 'theme_marinada');
    $default = '#fdfdfd';
    $previewconfig = NULL;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

//Link color
    $name = 'theme_marinada/linkcolor';
    $title = get_string('linkcolor','theme_marinada');
    $description = get_string('linkcolordesc', 'theme_marinada');
    $default = '#0066cc';
    $previewconfig = NULL;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

//Link Hover color
    $name = 'theme_marinada/linkhovercolor';
    $title = get_string('linkhovercolor','theme_marinada');
    $description = get_string('linkhovercolordesc', 'theme_marinada');
    $default = '#00cccc';
    $previewconfig = NULL;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);
    
    
//Top Menu background color
    $name = 'theme_marinada/topmenubgcolor';
    $title = get_string('topmenubgcolor','theme_marinada');
    $description = get_string('topmenubgcolordesc', 'theme_marinada');
    $default = '#0066cc';
    $previewconfig = NULL;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

//Top Menu link color
    $name = 'theme_marinada/topmenulinkcolor';
    $title = get_string('topmenulinkcolor','theme_marinada');
    $description = get_string('topmenulinkcolordesc', 'theme_marinada');
    $default = '#ffffff';
    $previewconfig = NULL;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

//Top Menu link hover color
    $name = 'theme_marinada/topmenulinkhovercolor';
    $title = get_string('topmenulinkhovercolor','theme_marinada');
    $description = get_string('topmenulinkhovercolordesc', 'theme_marinada');
    $default = '#ffffff';
    $previewconfig = NULL;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);
    
    
//Menu background color
    $name = 'theme_marinada/menubgcolor';
    $title = get_string('menubgcolor','theme_marinada');
    $description = get_string('menubgcolordesc', 'theme_marinada');
    $default = '#0066cc';
    $previewconfig = NULL;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);

    
    
// Custom CSS   
	$name = 'theme_marinada/customcss';
	$title = get_string('customcss','theme_marinada');
	$description = get_string('customcssdesc', 'theme_marinada');
	$default = '';
	$setting = new admin_setting_configtextarea($name, $title, $description, $default);
	$settings->add($setting);

    

// Foot note setting
	$name = 'theme_marinada/footnote';
	$title = get_string('footnote','theme_marinada');
	$description = get_string('footnotedesc', 'theme_marinada');
	$setting = new admin_setting_confightmleditor($name, $title, $description,'');
	$settings->add($setting);

}

