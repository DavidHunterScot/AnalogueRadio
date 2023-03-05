<?php

$page_title = $clip_title;

$page_content = function( $clip_title, $clip_direct_url, $clip_thumbnail_url )
{
?>

<div class="w3-padding-16">
    <div class="w3-xlarge"><?php echo $clip_title; ?></div>
</div>

<video style="width: 100%; aspect-radio: 16 / 9;" controls poster="<?php echo $clip_thumbnail_url; ?>">
    <source src="<?php echo $clip_direct_url; ?>" type="video/mp4">
</video>

<?php
};

include __DIR__ . DIRECTORY_SEPARATOR . "base.php";
