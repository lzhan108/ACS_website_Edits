<?
include('template.inc.php');
G_header('Data');

?>

<div id="site">
  <table width="115%" height="100%" border="0" cellpadding="0" cellspacing="0" width="1200">
    <tr valign="top">
       <td valign="top"> 	
        <font face="Lucida Bright"><font size="2.0">
    <p>
		<b>| <a href="#Arctic Black Carbon Initiative">Arctic Black Carbon Initiative</a> |</b></p>
                              
</font>
            
<font face="Lucida Bright"><font size="3.5">
   <hr>
    <div class="indent">
    <h3><a name="Arctic Black Carbon Initiative" id="Arctic Black Carbon Initiative"></a>
</font>

<br>
    <font face="Lucida Bright">
        <font size="3.0">
            <p align=center>Arctic Black Carbon Initiative</p>
   </font>
    
   <ul>
    <font face="Lucida Bright"><font size="1.5">
      <p align=justify>Supported by U.S. Department of Energy (S-OES-11_IAA-0027), we developed a black carbon sectoral
      (gas flaring, residential, transportation, industry, and power plants) emissions dataset (0.1 X 0.1)
      for Russia at the first time. By using this new Russia emissions dataset, it has been demonstrated that
      the model ability of simulating the Arctic black carbon level and seasonality was greatly improved (Huang
      et al., 2015). Emissions are freely downloadable via the link below. For any questions or request, please
      contact Prof. Joshua S. Fu (jsfu@utk.edu) and Dr. Kan Huang (khuang7@utk.edu, hackenhuang@gmail.com).</p> 
    
     <p style="margin-top: -10px;margin-left: 70px">
    <img src="<?=$G->imgdir?>/Arctic Black Carbon Initiative1.png" width="580" border="0" height="360">
     </p>
     <p style="margin-top: -90px;margin-left: 170px">
    <img src="<?=$G->imgdir?>/Arctic Black Carbon Initiative2.png" width="200" border="0" height="110">
     </p>

    <font face="Lucida Bright">
        <font size="1.5">
             <p><b>Download link:</b><br>
     <a href="./downloadcount.php" target="_new">RUS_BC_2010.tar.gz</a>

     <font face="Lucida Bright"><font size="2.0">   (downloaded 
<?php
$hit_count = @file_get_contents('downloadcount.txt');
echo $hit_count;
?>
  times)
</font>
        
<font face="Lucida Bright">
        <font size="3">
    <p align=justify>References: <br>
1. Huang, K., Fu, J. S., V. Y. Prikhodko, J. M. Storey, A. Romanov, E. L. Hodson, J. Cresko, I.
Morozova, Y. Ignatieva, J. Cabaniss (2015), Russian anthropogenic black carbon: Emission reconstruction and Arctic
black carbon simulation, Journal of Geophysical Research-Atmospheres, doi:10.1002/2015JD023358.<br>
2. http://abci.ornl.gov/index.shtml <br>
3. Huang, K., Fu, J. S., E. L. Hodson, X. Dong, J. Cresko, V. Y. Prikhodko, J. M. Storey, M.- D.Cheng (2014),
Identification of missing anthropogenic emission sources in Russia: implication for modeling Arctic haze, Aerosol
and Air Quality Research, 14: 1799-1811, doi: 10.4209/aaqr.2014.08.0165.
 
    </ul>
    </div>

    
<p align=right><font face="Lucida Bright"><font size="4.0"> visit count: <?php include "count.php"; ?>

<? G_footer(); ?>
