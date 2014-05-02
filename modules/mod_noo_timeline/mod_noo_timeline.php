<?php

/**
 * @version		$Id$
 * @author		NooTheme
 * @package		Joomla.Site
 * @subpackage	mod_noo_timeline
 * @copyright	Copyright (C) 2013 NooTheme. All rights reserved.
 * @license		License GNU General Public License version 2 or later; see LICENSE.txt, see LICENSE.php
 */

// no direct access
defined('_JEXEC') or die('Restricted access'); 
require_once __DIR__ . '/helper.php';
$document = JFactory::getDocument();

//pour adapter le module 3.0 a 2.5
$document->addScript("//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js");

//include css

$document->addStyleSheet('modules/' . $module->module . '/assets/css/style.css');
//Include js
$document->addScript('modules/' . $module->module . '/assets/js/script.js');
// changer  : jQuery(document).ready(function($){ a  $(document).ready(function($){
//pour adapter 3.0 a 2.5
$document->addScriptDeclaration('
	$(document).ready(function($){
		$("#noo_tl'.$module->id.'").nootimeline();
	});
');

$lists = modNooTimeLineHelper::getTimeLine($params);

require (JModuleHelper::getLayoutPath('mod_noo_timeline',$params->get('layout', 'default')));