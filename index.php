<?
// include('template.inc.php');
$G->use_slideshow=1;
G_header('ACS Research Group');

?>
<p align = 'justify'>  The ACS Group's research interests include climatic changes, air pollution modeling, air quality impact assessments,
extreme event impacts on health, transportation planning and energy usages with regards to air quality,
land use (satellite applications) and emissions, diesel track emission effects, and energy optimization planning.
<p></p>

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
/*#slider, #slider .sliderInner { width:700px;height:306px; }*/
#slider, #slider .sliderInner { width:700px;height:500px; }
/*#sliderFrame {width:700px;height: 350px;}*/

/* --- The pager position is relative to the #slider --- */
/*#slider .navBulletsWrapper { top:320px; }*/
#slider .navBulletsWrapper { top:520px; }

</style>
<div id="sliderFrame">
    <div id="slider">
		<!--
		NOTE - this slider requires all images to be scaled to the same size
		The size is set above. Use something like paint.net to resize the images
		I cropped and rescaled the Jian Sun image for you W. Schleter 9/29/16
		-->
		<img src="img/slideshow_home/Photo_2022.jpg" alt="Professor Fu honored as Chancellor��s Professor in 2022.
        "/>
		<img src="img/slideshow_home/Photo_2021_1.jpg" alt="Professor Fu named fellow by A&WMA and Cheng-pin Kuo received scholarship from A&WMA in 2021.
        "/>
		<img src="img/slideshow_home/paper_kuo_1.jpg" alt="Professor Fu and Cheng-pin Kuo built a COVID-19 case predicting model and published on STOTEN .
        "/>
        	<img src="img/slideshow_home/paper_yang_1.jpg" alt="Dr. Cheng-en Yang published an article on PNAS as an co-author to study the impact of climate intervention to cool Earth.
        "/>
		<img src="img/slideshow_home/paper_kuo_2.jpg" alt="Professor Fu and Cheng-pin Kuo studied spatial heterogeneity of PM2.5 exposure risk and published on Environmnetal Pollution.
	"/>

		<!--<img src="img/slideshow_home/news.jpg" alt="UT, NOAA collaboration"/>-->
		<img src="img/slideshow_home/Nature_Energy.png" alt="Dr. Allen published on Nature Energy"/>
    </div>
    <div id="caption4" style="display: none;">
        <em>HTML</em> caption. Link to <a href="http://acs.engr.utk.edu">ACS LINK</a>.
    </div>
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
	transitionTime: 500,
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

<br>
<br>

<p ><b><u> RESEARCH PROJECTS </u></b><br>
                            <li>
                              <a href="#Air Quality">Air Quality</a>
                            </li>
                            <li>
                              <a href="#Climate Change">Climate Change</a>
                            </li>
                            <li>
                              <a href="#ABaCAS">ABaCAS</a>
                            </li>
                            <li>
                               <a href="#Arctic Black Carbon Study">Arctic Black Carbon Study</a>
                            </li>
                                                        
               </p>
    
    <hr>
    <div class="indent">
    <h3><a name="Air Quality" id="Air Quality Model"></a>Air Quality</h3>
    <ul>
    <p align="justify"> <b>The Task Force on Hemispheric Transport of Air Pollution (TF HTAP) </b> TF HTAP is an
    international scientific cooperative effort to improve the understanding of the intercontinental transport of
    air pollution across the Northern Hemisphere.</p>
    
    <p align="justify"> WEBSITE <a href="http://www.htap.org" target="_new">[LINK]</a></p>
    
<p style="margin-top: -20px;margin-left: 0px">
<img src="<?=$G->imgdir?>/htap.gif" width="540" border="0" height=350">
<img src="<?=$G->imgdir?>/modis.gif" width="540" border="0" height="350">
</p>
     </ul>
    </div>

<hr>
    <div class="indent">
    <h3><a name="Climate Change" id="Climate Change"></a>Climate Change</h3>
    <ul>
    
    <p align="justify"> <b>Community Earth System Model (CESM version 1.0)</b> was a state-of-the-art model used for the
    global climate simulation, including four major components: atmosphere, land, ocean, and sea ice. </p>
    
<p style="margin-top: 2px;margin-left: 0px">
<img src="<?=$G->imgdir?>/TS-crop.gif" width="500" border="0" height="400">
</p>
     </ul>
    </div>

<hr>
    <div class="indent">
    <h3><a name="ABaCAS" id="abacas"></a>ABaCAS</h3>
    <ul>
      
     <p align="justify"> Air Benefit and Cost and Attainment Assessment System" (ABaCAS) is being developed by an elite team of "Sino-US" scientists
aimed at providing policy makers and scientists in China with a user-friendly system framework for conducting integrated assessments
of emissions control cost and their associated air quality attainment and health benefits.</p>
     <p align="justify"> WEBSITE <a href="http://www.abacas-dss.com/abacas/Default.aspx" target="_new">[LINK]</a></p>   

<p style="margin-top: 4px;">
<img src="<?=$G->imgdir?>/abcaas.png" width="580" border="0" height="420"></p>
     </ul>
    </div>

<hr>
    <div class="indent">
    <h3><a name="Arctic Black Carbon Study" id="abacas"></a>Arctic Black Carbon Study</h3>
    <ul>
      
     <p align="justify"> The U.S. Department of Energy's efforts in support of the Arctic Black Carbon Initiative (ABCI) sought to minimize BC emissions
from existing equipment in countries that impact the Arctic environment. To accomplish this the following objectives were pursued:
<li>
<p align="justify"> Identify the location of BC emissions sources to enable strategic deployment of emissions control technologies to the sources;
</li>
<li>
<p align="justify"> Improve estimates of BC emissions in the regions surrounding the Arctic with an emphasis on District Heating and Cooling (DHC) and Combined Heat and Power (CHP)
sources by working with a range of researchers and stakeholders to fill in the gaps of the existing available emissions inventory, and perform data assurance and quality control;
</li>
<li>
<p align="justify"> Assess BC emissions reduction opportunities at district heating, power generation and/or industrial sites in Russia and encourage the adoption of highly-efficient, low-emissions
CHP and DHC systems through a demonstration project and targeted educational outreach.
</li>
<li>
<p align="justify"> Due to a series of international events culminating in the June 2014 annexation of the Crimean Peninsula from
the Ukraine, the DOE project changed course with respect to the third objective and focused more effort on outreach.</p>
     <p align="justify"> WEBSITE <a href="http://abci.ornl.gov/index.shtml" target="_new">[LINK]</a></p>   

     <p style="margin-top: 2px;margin-left: 0px">
<img src="<?=$G->imgdir?>/Arctic Black Carbon Study2.png" width="380" border="0" height="250"></p>
     </ul>
    </div>    

<? G_footer(); ?>
