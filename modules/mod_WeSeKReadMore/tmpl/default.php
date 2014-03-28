<?php
/**
 * $mod_WeSeKReadMore
 * 
 * @version	1.0
 * @package	modules
 * @copyright	Copyright (C) Dec 2013 www.wesek.de All rights reserved.
 * @license	GNU General Public License version 2
 * -------------------------------------
 */
defined( '_JEXEC' ) or die;
$document = JFactory::getDocument();

$title 					= $params->get('title', 'Title');
$description 			= $params->get('description', 'Description');
$Directory 				= $params->get('Directory', '');
$link 					= $params->get('link', 'Link');
$picH 					= $params->get('pxHeight', 0);
$picW 					= $params->get('pxWidth', 0);
$textcolor 				= $params->get('textcolor', 0);
$bgcolor 				= $params->get('bgcolor', 0);
$WeSeK_moduleid         = $module->id ;
$readMore				= $params->get('readMore', 'ReadMore');
?>
<div class="wesekReadMore<?php echo $WeSeK_moduleid; ?>">
	<div class="wesekReadMore">
		<div class="readMore">                   
			<div class="mask">
<<<<<<< HEAD
			<div class="news_img"><div class="jaune_trans"></div><img src="<?php echo $Directory; ?>"/></div>
				<a href="<?php echo $link; ?>" class="info"><h2 class="news_h2"><?php echo $title; ?></a></h2>
=======
			<div class="jaune_trans"><div class="news_img"><img src="<?php echo $Directory; ?>"/></div></div>
				<a href="<?php echo $link; ?>" class="info"><h2 class="news_h2"><?php echo $title; ?></a></h2>
                                <div class="trait"><hr style=" margin-top: 2px;"></div>
>>>>>>> 5319fd752a4105a24f8e67246e39d49b725b2d5c
				<div class="news_desc"><?php echo $description; ?></div>
			</div>
		</div>  
	</div>
</div>


