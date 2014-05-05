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

class JFormFieldNooTimeLine extends JFormField {
	/**
	 * The form field type.
	 *
	 * @var    string
	 */
	public $type = 'nootimeline';
	
	public function __construct($form = null){
		parent::__construct($form);
		//JHtml::_('jquery.ui', array('core','sortable')); 
		//pour adapter le module 3.0 a 2.5
		$document = JFactory::getDocument();
		$document->addScript("//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js");
		$document->addScript("//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js");
		$document->addStyleSheet("//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css"); 
	}
	
	protected function getInput(){
		$document = JFactory::getDocument();
		$uri = str_replace("\\","/", str_replace(JPATH_SITE, JURI::root(true), dirname(__FILE__) ));
		$document->addScript($uri.'/assets/js/nootimeline.js');
		$document->addStyleSheet($uri.'/assets/css/nootimeline.css');
		$document->addScriptDeclaration('
		jQuery(document).ready(function($){
			$("#'.$this->id.'").nootimeline();
		});
		');
		// Initialize some field attributes.
		$class = $this->element['class'] ? ' class="' . (string) $this->element['class'] . '"' : '';
		$disabled = ((string) $this->element['disabled'] == 'true') ? ' disabled="disabled"' : '';

		// Initialize JavaScript field attributes.
		$onchange = $this->element['onchange'] ? ' onchange="' . (string) $this->element['onchange'] . '"' : '';

		return '<input type="hidden" name="' . $this->name . '" id="' . $this->id . '" value="'
			. htmlspecialchars($this->value, ENT_COMPAT, 'UTF-8') . '"' . $class . $disabled . $onchange . ' />';
	}
	
	protected function getLabel(){
		return parent::getLabel();
	}
}