<?
include('template.inc.php');
$G->use_slideshow=1;
G_header('<center>Gallery</center>');
?>
<!--
This is the image slideshow setup
From: http://www.menucool.com/javascript-image-slider
must set $G->use_slideshow=1; after loading the template and before calling G_header

The styles defined below were extracted from the js-image-slider.css file so the
size could be changed here.

The definition of the options and the creation of the mcImgSlider object were extracted
from the js-image-slider.js file so the options could be set here.

Images can be named anything and stored anywhere.
Images should be scaled to match the size of the slider box
-->

<style>
#slider, #slider .sliderInner { width:800px;height:600px; }
#sliderFrame {width:800px;height: 640px;}

/* --- The pager position is relative to the #slider --- */
#slider .navBulletsWrapper { top:620px; }

</style>
<div id="sliderFrame">
<div id="slider">
<?
// use PHP to show all files in the directory
$gallerydir = "gallery/800";
$files = glob("$G->localroot/$gallerydir/*.jpg");
$cnt = 0;
$caption_data = "";
foreach ($files as $f) {
  if (is_dir($f)) continue; // skip directories
	$cnt++;
  $fn = basename($f); // just the name
	$fnne = pathinfo($fn,PATHINFO_FILENAME); // get the name with no extension to use as caption
	$caption_file = "$G->localroot/$gallerydir/$fnne.txt";
	if (file_exists($caption_file)) $caption = file_get_contents($caption_file);
	else $caption = $fnne;
  $fullfile = "$G->wwwroot/$gallerydir/$fn"; // turn local name into web name
  echo "<img src='$fullfile' alt='#caption$cnt'>\n";
	$caption_data .= "<div id='caption$cnt' style='display: none;'>\n$caption\n</div>\n";
}
?>
</div>
<? echo $caption_data; ?>
</div>

<script>
// see http://www.menucool.com/javascript-image-slider#html1 for details
var sliderOptions=
{
	sliderId: "slider",
	startSlide: 0,
	effect: "series1",
	effectRandom: true,
	pauseTime: 3500,
	transitionTime: 1000,
	slices: 12,
	boxes: 8,
	hoverPause: 1,
	autoAdvance: true,
	thumbnailsWrapperId: "thumbs",
	m: false,
	license: "mylicense"
};

var imageSlider=new mcImgSlider(sliderOptions);
</script>
<!-- End of image slideshow setup -->


<? G_footer(); ?>