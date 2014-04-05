<?php
/**
 * @subpackage  JaxStorm Blue v1.8 HM03J
 * @copyright   Copyright (C) 2010-2013 Hurricane Media - All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined( '_JEXEC' ) or die( 'Restricted access' );
JHtml::_('behavior.framework', true);

$loadjquery = NULL;
JLoader::import( 'joomla.version' );
$version = new JVersion();
if (version_compare( $version->RELEASE, '2.5', '<=')) {
	if (JFactory::getApplication()->get('jquery') !== true) {
		$loadjquery = TRUE;	
	}
} else {
	JHtml::_('jquery.framework');
}

$LeftMenuOn = false; //($this->countModules('position-4') or $this->countModules('position-5') or $this->countModules('position-7'));
$RightMenuOn = false; //($this->countModules('position-6') or $this->countModules('position-8'));

$app = JFactory::getApplication();
$sitename = $app->getCfg('sitename');

$logopath = $this->baseurl . '/templates/' . $this->template . '/images/logo.png';
$logo = $this->params->get('logo', $logopath);
$logoimage = $this->params->get('logoimage');

$sitetitle = $this->params->get('sitetitle');
$sitedescription = $this->params->get('sitedescription');

/*$slides = $this->params->get('slides');
$slideseffect = $this->params->get('slideseffect');
$slidesimage1 = $this->params->get('slidesimage1');
$slidesimage2 = $this->params->get('slidesimage2');
$slidesimage3 = $this->params->get('slidesimage3');
$slidesimage4 = $this->params->get('slidesimage4');
$slidesimage5 = $this->params->get('slidesimage5');
$slidesimage6 = $this->params->get('slidesimage6');

if ($slidesimage1 || $slidesimage2 || $slidesimage3 || $slidesimage4 || $slidesimage5 || $slidesimage6) {
	// use images from template manager
} else {
	// use default images
	$slidesimage1 = $this->baseurl . '/templates/' . $this->template . '/images/slide1.jpg';
	$slidesimage2 = $this->baseurl . '/templates/' . $this->template . '/images/slide2.jpg';
}

$slideslink1 = $this->params->get('slideslink1');
$slideslink2 = $this->params->get('slideslink2');
$slideslink3 = $this->params->get('slideslink3');
$slideslink4 = $this->params->get('slideslink4');
$slideslink5 = $this->params->get('slideslink5');
$slideslink6 = $this->params->get('slideslink6');*/

$socialposition = $this->params->get('socialposition');
if ($socialposition == 0) {
	$socialsize = ".png";
} else {
	$socialsize = "L.png";
}

$socialiconlist = array(
	1 => "FaceBook",
	2 => "Flickr",
	3 => "Google+",
	4 => "Instagram",
	5 => "LinkedIn",
	6 => "MySpace",
	7 => "Picasa",
	8 => "RSS",
	9 => "SoundCloud",
	10 => "Tumblr",
	11 => "Twitter",
	12 => "Vimeo",
	13 => "Youtube",
);

$socialicon1 = $this->params->get('socialicon1');
$socialicon2 = $this->params->get('socialicon2');
$socialicon3 = $this->params->get('socialicon3');
$socialicon4 = $this->params->get('socialicon4');
$socialicon5 = $this->params->get('socialicon5');
$socialstring = '';

if ($socialicon1 > 0) {
	$socialstring .= '<a href="' . $this->params->get('sociallink1') . '"><img src="' . $this->baseurl . '/templates/' . $this->template . '/images/' . $socialiconlist[$socialicon1] . $socialsize . '" alt="' . $socialiconlist[$socialicon1] . '" title="' . $socialiconlist[$socialicon1] . '"/></a>';
}
if ($socialicon2 > 0) {
	$socialstring .= '<a href="' . $this->params->get('sociallink2') . '"><img src="' . $this->baseurl . '/templates/' . $this->template . '/images/' . $socialiconlist[$socialicon2] . $socialsize . '" alt="' . $socialiconlist[$socialicon2] . '" title="' . $socialiconlist[$socialicon2] . '"/></a>';
}
if ($socialicon3 > 0) {
	$socialstring .= '<a href="' . $this->params->get('sociallink3') . '"><img src="' . $this->baseurl . '/templates/' . $this->template . '/images/' . $socialiconlist[$socialicon3] . $socialsize . '" alt="' . $socialiconlist[$socialicon3] . '" title="' . $socialiconlist[$socialicon3] . '"/></a>';
}
if ($socialicon4 > 0) {
	$socialstring .= '<a href="' . $this->params->get('sociallink4') . '"><img src="' . $this->baseurl . '/templates/' . $this->template . '/images/' . $socialiconlist[$socialicon4] . $socialsize . '" alt="' . $socialiconlist[$socialicon4] . '" title="' . $socialiconlist[$socialicon4] . '"/></a>';
}
if ($socialicon5 > 0) {
	$socialstring .= '<a href="' . $this->params->get('sociallink5') . '"><img src="' . $this->baseurl . '/templates/' . $this->template . '/images/' . $socialiconlist[$socialicon5] . $socialsize . '" alt="' . $socialiconlist[$socialicon5] . '" title="' . $socialiconlist[$socialicon5] . '"/></a>';
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<jdoc:include type="head" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
	<link href='//fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css' />
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/sfhover.js"></script>
	<?php //if (($this->countModules('position-15') && $slides == 2) || ($slides == 1)): ?>
	<!-- Slides Scripts -->
	<?php //if ($loadjquery): ?>
	<!--<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>-->
	<?php //endif; ?>
	<!--<script type="text/javascript" src="<?php //echo $this->baseurl ?>/templates/<?php //echo $this->template; ?>/js/slides.js"></script>-->
	<!--<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#slides').slides({
				play: 5000,
				pause: 2500,
				hoverPause: true<?php //if ($slideseffect == 1): ?>,
				effect: 'fade',
				crossfade: true,
				fadeSpeed: 500<?php //endif; ?>
			});
		});
		
		jQuery(document).ready(function() {
			jQuery("#slides").hover(function() {
		    	jQuery(".slides_nav").css("display", "block");
		  	},
		  		function() {
		    	jQuery(".slides_nav").css("display", "none");
		  	});

		});
	
	</script>-->
	<?php //endif; ?>
</head>
<body>

<div id="wrapper">

	<!-- TopNav -->
    <div id="topnav_wrap">
	<?php if($this->countModules('position-13') || ($socialposition == 0 && $socialstring)): ?>
		<div id="topnav">
			<?php if ($socialposition == 0): ?><div id="topnav_socialicons"><?php echo $socialstring ?></div><?php endif; ?>
			<jdoc:include type="modules" name="position-13" style="xhtml" />
		</div>
	<?php endif; ?>
    </div>
	

	<div id="header_wrap">
		<div id="header">

			<!-- Logo -->
			<div id="logo">

			<?php if ($logo && $logoimage == 1): ?>
				<a href="<?php echo $this->baseurl ?>"><img src="<?php echo htmlspecialchars($logo); ?>"  alt="<?php echo $sitename; ?>"  height="128" width="247"/></a>
			<?php endif; ?>
			<?php if (!$logo || $logoimage == 0): ?>

				<?php if ($sitetitle): ?>
					<a href="<?php echo $this->baseurl ?>"><?php echo htmlspecialchars($sitetitle); ?></a><br/>
				<?php endif; ?>

				<?php if ($sitedescription): ?>
					<div class="sitedescription"><?php echo htmlspecialchars($sitedescription); ?></div>
				<?php endif; ?>

			<?php endif; ?>

	  		</div>

			<!-- Topmenu -->
			<div id="topmenu">
				<jdoc:include type="modules" name="position-1" />
			</div>
		</div>
	</div>
	


	<!-- Slides -->
			   
	<div id="slideshow">
		<div id="slides">
			<jdoc:include type="modules" name="position-15" />
		</div>
	</div>
	


	<!-- Content/Menu Wrap -->
	<div id="content-menu_wrap_bg">
	<div id="content-menu_wrap">
		
		

		<!-- Breadcrumbs -->
		<?php if ($this->countModules('position-2')): ?>
		<div id="breadcrumbs">
			<jdoc:include type="modules" name="position-2" />
		</div>
		<?php endif; ?>


		<!-- Left Menu -->
		<?php if($LeftMenuOn ): ?>
		<div id="leftmenu">
			<jdoc:include type="modules" name="position-4" style="xhtml" />
			<jdoc:include type="modules" name="position-5" style="xhtml" />
			<?php if ($socialposition == 1): ?><div id="leftmenu_socialicons"><?php echo $socialstring ?></div><?php endif; ?>
		</div>
		<?php endif; ?>


		<!-- Contents -->
		<?php if($LeftMenuOn AND $RightMenuOn): ?>
		<div id="content-w1">
		<?php elseif($LeftMenuOn OR $RightMenuOn): ?>
		<div id="content-w2">	
		<?php else: ?>
		<div id="content-w3">	
		<?php endif; ?>
		
			<?php if ($this->countModules('position-12')): ?>
			<div id="content-top">
                <div class="content-item"><jdoc:include type="modules" name="position-12" style="xhtml" /></div>
                <div class="content-item"><jdoc:include type="modules" name="position-121" style="xhtml" /></div>
                <div class="content-item"><jdoc:include type="modules" name="position-122" style="xhtml" /></div>
                <div class="content-item"><jdoc:include type="modules" name="position-123" style="xhtml" /></div>
                <div class="content-item"><jdoc:include type="modules" name="position-124" style="xhtml" /></div>
			</div>
			<?php endif; ?>

			<jdoc:include type="message" />
			<jdoc:include type="component" />
		</div>


		<!-- Right Menu -->
		<?php if($RightMenuOn ): ?>
		<div id="rightmenu">
			<jdoc:include type="modules" name="position-6" style="xhtml" />
			<jdoc:include type="modules" name="position-8" style="xhtml" />
			<jdoc:include type="modules" name="position-3" style="xhtml" />
			<?php if ($socialposition == 2): ?><div id="rightmenu_socialicons"><?php echo $socialstring ?></div><?php endif; ?>
		</div>
		<?php endif; ?>


	</div>
	</div>


	<!-- Footer -->
    <!-- a supprimer -->
	<div id="footer_wrap">
		<div id="footer">
			<jdoc:include type="modules" name="position-14" />
		</div>
	</div>	

	
	<!-- Banner/Links -->
	<div id="box_wrap">
		<div id="box_placeholder">
        <!-- position footer en colone -->
			<div><jdoc:include type="modules" name="position-9" style="xhtml" /></div>
			<!--<div id="box2"><jdoc:include type="modules" name="position-10" style="xhtml" /></div>
			<div id="box3"><jdoc:include type="modules" name="position-11" style="xhtml" /></div> -->
		</div>
	</div>

</div>


</div>
</body>
</html>
