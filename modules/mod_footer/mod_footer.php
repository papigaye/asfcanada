<?php
/**
 * Module ASF Footer!
 * 
 * @package    Joomla.asfc_template
 * @subpackage Modules
 * @license        GNU/GPL
 * mod_footer est à la proprité de ASF CANADA
 * annee 2014
 * @auteur Moussa Thimbo
 */
 
// pas access direct
defined( '_JEXEC' ) or die( 'Restricted access' );
 
// Include pour inclure seulement un seul fichier helper.php
require_once( dirname(__FILE__).DS.'helper.php' );
 
$footer_tmpl = modFooterHelper::getFooter( $params );
require( JModuleHelper::getLayoutPath( 'mod_footer' ) );
?>