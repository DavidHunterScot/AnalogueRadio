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
            body, h1, h2, h3, h4, h5, h6
            {
                font-family: "Poppins", sans-serif;
            }
        </style>
    </head>

    <body class="w3-metro-darken">
        <div class="w3-auto w3-padding w3-black" style="border-radius: 0 0 20px 20px;">
            <h1><b><a href="/" style="text-decoration: none;">Analoge Radio</a></b></h1>
            <nav class="w3-bar w3-border-bottom w3-border-white">
                <a href="/" class="w3-bar-item w3-button w3-hover-none w3-hover-text-white"><?php echo isset( $current_nav_item ) && $current_nav_item == "home" ? '<b>Home</b>' : 'Home' ?></a>
                <a href="/bbc-radio-4" class="w3-bar-item w3-button w3-hover-none w3-hover-text-white"><?php echo isset( $current_nav_item ) && $current_nav_item == "bbc-radio-4" ? '<b>BBC Radio 4</b>' : 'BBC Radio 4'; ?></a>
            </nav>
            <?php if( isset( $page_content ) && is_callable( $page_content ) ): ?>
                <?php if( isset( $clip_title, $clip_direct_url, $clip_thumbnail_url ) ): ?>
                    <?php $page_content( $clip_title, $clip_direct_url, $clip_thumbnail_url ); ?>
                <?php else: ?>
                    <?php $page_content(); ?>
                <?php endif; ?>
            <?php endif; ?>
        </div>

        <footer class="w3-padding w3-center w3-small">
            Archive by <a href="https://davidhunter.scot" target="_blank">David Hunter</a>.<br>Built from <a href="https://github.com/DavidHunterScot/AnalogueRadio" target="_blank">Source Code on GitHub</a>.
        </footer>
    </body>
</html>