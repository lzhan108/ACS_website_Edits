<?php
global $G;
$G->wwwroot = "http://acs.engr.utk.edu";
$G->localroot = "/home/acs/public_html";
$G->cssdir = "$G->wwwroot/css";
$G->imgdir = "$G->wwwroot/img";
$G->pagename = $_SERVER['PHP_SELF'];
$G->servername = $_SERVER['SERVER_NAME'];
$G->embedded = isset($_GET['embedded']);
$G->use_slideshow = 0;
?>

<?php
function G_header($page_heading='') {
global $G;
if ($G->embedded) return;
// define main menu items here "link"=>"Display Name"
$menuitems = array(
	"index"=>"Home",
	"Research"=>"Research",
	"people/index"=>"Members",
	"News"=>"News",
	"Publications"=>"Publications",
);

$title = "ACS";
if (strlen($page_heading)>0) $title .= " - " . $page_heading;  //appending the heading to the page title
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />
    <title><?= $title ?></title>
    <meta name="robots" content="index, follow" />
    <?php include(localname("$G->cssdir/acs.css.php")); ?>
<link rel="shortcut icon" href="<?=$G->wwwroot?>/favicon.ico" />
<? if ($G->use_slideshow) { ?>
<link href="<?=$G->wwwroot?>/css/js-image-slider.css" rel="stylesheet" type="text/css" />
<script src="<?=$G->wwwroot?>/js/js-image-slider.js" type="text/javascript"></script>
<? } ?>
<!-- Tracking info for Google Analytics  added 1/17/2013 WRS-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37719842-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

</head>
<body background="<?=$G->wwwroot?>/img/blue-sky.jpg">
<!--
<body>
-->
<div id="mainContentWrapper">
      <a href="<?=$G->wwwroot?>/index.php"><img alt="ACS Masthead" height="160" id="masthead" src="<?=$G->imgdir?>/fig.42.png" title="Air Quality Engineering & Climate Studies Research Group" width="900" name="masthead" /></a>
<div id="leftNav">
<ul>
<?php

foreach ($menuitems as $page=>$link) {
    $url = "$G->wwwroot/$page.php";
		//echo "<hr>$url<hr>$G->wwwroot$G->pagename<hr>";
    echo "<li";
    if ($url == "$G->wwwroot$G->pagename") echo " class='active'";
    echo "><a href='$url'>$link</a></li>";
}
?>
</ul>
				
</div>

<div id="mainContent">
<?php if (strlen($page_heading)>0) echo "<h1>$page_heading</h1>"; ?>      
<?php } // end of G_header ?>

<?php

function G_footer() {
  global $G;
  echo "</div>\n"; // end mainContent
  if ($G->embedded) return;
	?>
<div class=footer>
  Advisor: 
<b>Dr. Joshua Fu</b>
<br><a href="http://www.utk.edu" title="The University of Tennessee">The University of Tennessee</a><br/>
<a href="http://cee.utk.edu" title="Department of Civil and Environmental Engineering">Dept. of Civil &amp; Environmental Engineering</a>
<p>
Phone: (865)-974-2629<br/>
Fax: (865)-974-2669<br/>
Email:<a href="mailto:jsfu@utk.edu">jsfu@utk.edu</a>

<?php
$last_mod = filemtime($_SERVER["SCRIPT_FILENAME"]);
$last_mod = date("m/j/y g:i a", $last_mod);
?>
<div class=pageinfo>
<p>
File: <?= $G->pagename ?> &nbsp;&middot;&nbsp;
Last Modified: <?= $last_mod ?>
</p>
</div>
</div>

</div>
</body>
</html>
<?php } // end of G_footer ?>

<?php
function localname($name) {
	// converts a web based name to a local name
	global $G;
	//echo "localname: " . $G->localroot . substr($name,strlen($G->wwwroot)) . "<br/>";
	return $G->localroot . substr($name,strlen($G->wwwroot));
} // end of localname function
