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

$app = JFactory::getApplication();
$sitename = $app->getCfg('sitename');

$logopath = $this->baseurl . '/templates/' . $this->template . '/images/logo.png';
$logo = $this->params->get('logo', $logopath);
$logoimage = $this->params->get('logoimage');

$sitetitle = $this->params->get('sitetitle');
$sitedescription = $this->params->get('sitedescription');

s
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
</head>
<body>

<div id="wrapper">

	<!-- TopNav -->
    <div id="topnav_wrap">
	<?php if($this->countModules('position-13') || ($socialposition == 0 && $socialstring)): ?>
		<div id="topnav">
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
		<?php // TODO supprimer position 4, 5 ?>


		<!-- Contents -->
		
		<div id="content-w3">	
		
			<?php if ($this->countModules('position-12')): ?>
			<div id="content-top">
                <div class="content-item"><jdoc:include type="modules" name="position-12" style="xhtml" /></div>
                <div class="content-item content-esp"><jdoc:include type="modules" name="position-121" style="xhtml" /></div>
                <div class="content-item content-esp"><jdoc:include type="modules" name="position-122" style="xhtml" /></div>
                <div class="content-item content-esp"><jdoc:include type="modules" name="position-123" style="xhtml" /></div>
                <div class="content-item content-esp" id ="moduleDon"><jdoc:include type="modules" name="position-124" style="xhtml" /></div>
			</div>
			<?php endif; ?>

			<jdoc:include type="message" />
			<jdoc:include type="component" />
		</div>


		<?php //TODO supprimer les positions 6, 8, 3 pour right menu ?>

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
		</div>
	</div>

</div>


</div>
</body>
</html>
