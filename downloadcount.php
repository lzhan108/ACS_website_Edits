<?php

$hit_count = @file_get_contents('downloadcount.txt');
$hit_count++;
@file_put_contents('downloadcount.txt',$hit_count);

header('Location:http://acs.engr.utk.edu/publications/RUS_BC_2010.tar.gz');

?>