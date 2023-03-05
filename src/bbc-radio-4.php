<?php

$current_nav_item = "bbc-radio-4";

$page_title = "BBC Radio 4";

$page_content = function()
{
?>

<h2>BBC Radio 4</h2>
<p>An archive containing various clips of this radio station. Analogue and Digital versions available.</p>

<?php

$dir_path = __DIR__ . DIRECTORY_SEPARATOR . "bbc-radio-4";

$clips_dir_items = scandir( $dir_path );

foreach( $clips_dir_items as $clips_dir_item )
{
    $path_to_dir_item = $dir_path . DIRECTORY_SEPARATOR . $clips_dir_item;

    if( ! is_file( $path_to_dir_item ) || substr( $path_to_dir_item, -4 ) != ".php" )
        continue;
    
    include $path_to_dir_item;

    include __DIR__ . DIRECTORY_SEPARATOR . "_includes" . DIRECTORY_SEPARATOR . "clip-list-item.php";
}

?>

<?php
};

include __DIR__ . DIRECTORY_SEPARATOR . "_includes" . DIRECTORY_SEPARATOR . "base.php";
