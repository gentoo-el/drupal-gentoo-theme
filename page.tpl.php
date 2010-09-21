<?php
// $Id: page.tpl.php,v 1.28 2008/01/24 09:42:52 goba Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <title><?php print $head_title ?></title>
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
</head>

<body>

<table border="0" cellpadding="0" cellspacing="0" id="header">
  <tr>
    <td style="width:225px; height:129px; padding:0px;" id="logo">
      <?php if ($logo) { ?><a href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" /></a><?php } ?>
    </td>
    <td style="color:white; text-align:left; background-color:black;" id="menu">
		<?php print theme('links', $primary_links, array('class' => 'links', 'id' => 'subnavlist'));
    		 if (in_array('root', array_values($user->roles))) {
			print theme('links', $secondary_links, array('class' => 'links', 'id' => 'subnavlist')); 
		} ?>
    </td>
  </tr>
  <tr>
    <td colspan="2"><div><?php print $header ?></div></td>
  </tr>
</table>

<table border="0" cellpadding="0" cellspacing="0" id="content">
  <tr>
    <?php if ($left) { ?><td style="background-color:#dddaec;" id="sidebar-left">
	<div style="position:absolute; left:93px;">
	<img src="/sites/all/themes/gentoo-theme/gridtest.gif"></img></div><br><br><br><br><br><br>
      <?php print $left ?>
    </td><?php } ?>
    <td valign="top">
      <?php if ($mission) { ?><div id="mission"><?php print $mission ?></div><?php } ?>
      <div id="main">
        <?php print $breadcrumb ?>
        <h1 class="title"><?php print $title ?></h1>
        <div class="tabs"><?php print $tabs ?></div>
        <?php if ($show_messages) { print $messages; } ?>
        <?php print $help ?>
        <?php print $content; ?>
        <?php print $feed_icons; ?>
      </div>
    </td>
    <?php if ($right) { ?><td id="sidebar-right">
      <?php print $right ?>
    </td><?php } ?>
  </tr>
</table>

<div id="footer">
<!--    <div style="float: right"> -->
<!--      <br />
-->
      <!-- begin W3C Valid -->
      <!--<a href="http://validator.w3.org/check?uri=referer">
      <img src="http://www.w3.org/Icons/valid-xhtml10-blue" alt="Valid XHTML 1.0 Strict" height="31" width="88" /></a>-->
      <!--end of W3C Valid -->
      <!-- begin W3C CSS Valid -->
<!--      <a href="http://jigsaw.w3.org/css-validator/">
      <img src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" />
      </a>
    </div>
-->
  <?php print $footer ?>
  <?php print $footer_message ?>

    <script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
    </script>
    <script type="text/javascript">
      _uacct = "UA-381722-2";
      urchinTracker();
    </script>
<!-- #here footer -->
</div>
<?php print $closure ?>
</body>
</html>
