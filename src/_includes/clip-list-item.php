<div class="w3-row">
    <div class="w3-col m3">
        <p><?php if( isset( $clip_thumbnail_url ) ) echo '<a href="' . $clip_url . '"><img src="' . $clip_thumbnail_url . '" class="w3-image w3-round-large"></a>'; else echo '&nbsp;'; ?></p>
    </div>

    <div class="w3-col m9 w3-padding w3-padding-16">
        <div class="w3-large">
            <?php if( isset( $clip_title ) ) echo $clip_title; ?>
        </div>

        <?php if( isset( $clip_duration ) ): ?>
        <div class="w3-small">
            <b>Duration:</b> <?php echo $clip_duration; ?>
        </div>
        <?php endif; ?>

        <?php if( isset( $clip_url ) ): ?>
        <div class="w3-padding-16">
            <a href="<?php echo $clip_url; ?>" class="w3-button w3-round w3-dark-gray">Play Clip</a>
        </div>
        <?php endif; ?>
    </div>
</div>
