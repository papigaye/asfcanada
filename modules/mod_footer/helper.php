<?php
/**
 * class Helper pour le module footer
 * 
 * @package    Joomla.asfcanada
 * @subpackage Modules
 * @license        GNU/GPL
 * A la propriété de ASF CANCADA
 * Annee 2014
 * @auteur Moussa Thimbo
 */
class modFooterHelper
{
    /**
     * Retrieves the hello message
     *
     * @param array $params An object containing the module parameters
     * @access public
     */    
    public static function getFooter( $params )
    {
		$footer = '<div class="colfoot">
			<span class="footer_head">Call us:</span><br/>
			<span class="footer_details">514-878-2586 poste 33</span><br/>
			<span class="footer_head">Télécopieur</span><br/>
			<span class="footer_details">514-395-2276</span>
		</div>
		<div class="colfoot">
			<span class="footer_head">Adresse :</span><br/>
			<span class="footer_details"> 372, rue Ste-Catherine Ouest, bureau 327,<br/>3ème étage, Montréal (Québec) H3B 1A2 Canada</span><br/>
			<span class="footer_head">Métro</span><br/>
			<span class="footer_details">Place-des-Arts, sortie Bleury</span>
		</div>
		<div class="colfoot">
			<span class="footer_head inline">&copy;</span>
			<span class="footer_details">2014 asfcanada</span>
		</div>
		<div class="colfoot last">
			<span class="footer_socialhead">suivez-nous!</span><br/>
			<img class="imgsoc inline" src="'.JURI::root().'/modules/mod_footer/images/instagram.png" />
			<img class="imgsoc inline" src="'.JURI::root().'/modules/mod_footer/images/twitter-bird-light-bgs.png" />
			<img class="imgsoc inline" src="'.JURI::root().'/modules/mod_footer/images/pinterest-icon.png" />
		</div>';
        return $footer;
    }
}
?>