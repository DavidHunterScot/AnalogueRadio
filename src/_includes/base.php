<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php if( isset( $page_title ) && $page_title ) echo $page_title . " - "; ?>Analogue Radio</title>

        <link rel="stylesheet" type="text/css" href="https://w3css.staticly.ict.rocks/4.15/w3.css">
        <link rel="stylesheet" type="text/css" href="https://w3css.staticly.ict.rocks/w3-colors-metro.css">
        <link rel="stylesheet" type="text/css" href="https://webfonts.staticly.ict.rocks/poppins/poppins.css">

        <style type="text/css">
            h1, h2, h3, h4, h5, h6, p
            {
                font-family: "Poppins", sans-serif;
            }
        </style>
    </head>

    <body class="w3-metro-darken">
        <div class="w3-auto w3-padding w3-black">
            <h1><b>Analoge Radio</b></h1>
            <hr>
            <?php if( isset( $page_content ) && is_callable( $page_content ) ) $page_content(); ?>
        </div>
    </body>
</html>