<?
include('template.inc.php');
G_header('Gallery');
// quick and dirty display of all images in the gallery directory
// note - this can be made to look nicer by utilizing a javascript library - just takes a bit more time
// can create thumbnails automatically from command window with   
$width = 600; // size of thumbnails
$gallerydir = "gallery";
$thumbdir = "gallery/th";
$files = glob("$G->localroot/$gallerydir/*");
foreach ($files as $f) {
  if (is_dir($f)) continue; // skip directories
  $fn = basename($f); // just the name
  $fullfile = "$G->wwwroot/$gallerydir/$fn"; // turn local name into web name
  $th = "$G->localroot/$thumbdir/$fn";
  if (file_exists($th)) { $th = "$G->wwwroot/$thumbdir/$fn"; }
  else { $th = $fullfile; } 
  echo "<a href='$fullfile'><img src='$th' width=$width border=0></a>\n";
}

?>

<? G_footer(); ?>