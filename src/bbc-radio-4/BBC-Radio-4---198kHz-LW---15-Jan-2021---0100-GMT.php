<?php

$current_nav_item = "bbc-radio-4";

$clip_slug = substr( basename( __FILE__ ), 0, -4 );

$clip_title = str_replace( array( "-", "   " ), array( " ", " - " ), $clip_slug );

$clip_url = "/bbc-radio-4/" . $clip_slug;

$clip_direct_url = "https://storage.analogueradio.ict.rocks/bbc-radio-4/" . $clip_slug . ".mp4";

$clip_thumbnail_url = "/assets/images/" . $clip_slug . ".png";

$clip_duration = "2:15";

if( isset( $path_to_input_file ) && basename( $path_to_input_file ) == basename( __FILE__ ) )
{
    include __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "_includes" . DIRECTORY_SEPARATOR . "clip-player.php";
}
