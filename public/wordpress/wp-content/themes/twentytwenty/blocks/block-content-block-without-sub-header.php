<div class="content-item">
    <div class="grid-x">
        <div class="cell">
            <h2><?php block_field('title') ?></h2>
        </div>
    </div>
    <div class="grid-x">
        <div class="cell">
            <p><?php block_field('paragraph') ?></p>
        </div>
    </div>
    <?php if (block_field('video-link')) { ?>
    <div class="grid-x">
        <div class="cell">
            <iframe width="560" height="315" src="<?php block_field('vimeo-link') ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    <?php }?>
    <?php if (block_field('button-text') && block_field('button-url')) { ?>
    <div class="grid-x">
        <div class="cell">
        <button class="hollow button" href="<?php block_field('button-url') ?>"><?php bock_field('button-text') ?></button>
        </div>
    </div>
    <?php }?>
</div>
