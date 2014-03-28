<?php
/**
 * Copyright (C) 2012 joomla.buldozer.fr
 * http://joomla.buldozer.fr
 * Template		: template vide 
 * Joomla		: 2.5
 * @license 	: GNU/GPL
 * @ version	: 1.0
**/
defined('_JEXEC') or die;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
</head>
<body>
    <div id="page">
    	<div>
        	<div id="haut">
            	<div class="contact"><jdoc:include type="modules" name="contact" style="xhtml" /></div>
            </div>
            <div id="haut2">
        		<div class="logo"></div>
            	<div class="menu"><jdoc:include type="modules" name="menu" style="xhtml" /></div>
            </div>
        </div>
        <div id="centre1"><jdoc:include type="modules" name="centre" style="xhtml" /></div>
        <div id=""><jdoc:include type="component" style="xhtml" /></div>
        <div class="clr"></div>
        <div id="footer"><jdoc:include type="modules" name="bas" style="xhtml" /></div>
    </div>
</body>


