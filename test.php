<?php

define('BASEPATH', TRUE);

function log_message($a, $b) {};

include "image_moo.php";

$handler = new Image_moo();
//test auto height 
$handler->load("big.png")->auto_resize(240, 0)->save("auto_height.png");
//test auto width
$handler->load("big.png")->auto_resize(0, 480)->save("auto_width.png");