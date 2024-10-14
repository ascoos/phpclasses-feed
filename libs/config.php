<?php 
/**
 *   __ _  ___  ___ ___   ___   ___     ____ _ __ ___   ___
 *  / _` |/  / / __/ _ \ / _ \ /  /    / __/| '_ ` _ \ /  /
 * | (_| |\  \| (_| (_) | (_) |\  \   | (__ | | | | | |\  \
 *  \__,_|/__/ \___\___/ \___/ /__/    \___\|_| |_| |_|/__/
 * 
 * 
 ************************************************************************************
 * @ASCOOS-NAME        	: ASCOOS CMS 24'                                            *
 * @ASCOOS-VERSION     	: 24.0.0                                                    *
 * @ASCOOS-CATEGORY    	: Block (Frontend and Administrator Side)                   *
 * @ASCOOS-CREATOR     	: Drogidis Christos                                         *
 * @ASCOOS-SITE        	: www.ascoos.com                                            *
 * @ASCOOS-LICENSE     	: [Commercial] http://docs.ascoos.com/lics/ascoos/AGL.html  *
 * @ASCOOS-COPYRIGHT   	: Copyright (c) 2007 - 2024, AlexSoft Software.             *
 ************************************************************************************
 *
 * @package            	: Latest classes from PHPClasses.org
 * @source             	: /latest-phpclasses-packages/libs/config.php
 * @version            	: 1.0.0
 * @created            	: 2024-10-14 07:00:00 UTC+3
 * @updated            	: 
 * @author             	: Drogidis Christos
 * @authorSite         	: www.alexsoft.gr
 * @license 			: AGL-F
 * 
 * @since PHP 5.6.40
 */
namespace ASCOOS\Libraries\PHPClasses\Config;

defined ("ALEXSOFT_RUN_CMS") or die("Prohibition of Access.");


class TPHPClassesConfig {

    public $params = [
        'lang'          => 'en',        // Current Language of package
        'show_title'    => true,        // Show Title in block element.
        'method'        => 'rss',       // What feed method is used (XML or RSS)?
        'count'         => 10,			// How many classes will be displayed.
        'user'		    => 'bigfriend',	// PHPClasses User
        'show_summary'	=> true,		// Show Summary Description
        'show_days'	    => true,		// Show Days
        'theme'         => 'cleargray'	// The Block theme
    ];



}
 
?>