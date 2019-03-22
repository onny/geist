<div class="floating-header">
    <div class="floating-header-logo">
        <a href="{{@site.url}}">
            <?php if ( get_header_image() ){ ?>
                <img src="<?php header_image(); ?>" alt="<?php echo get_bloginfo( 'name' ); ?> icon" />
            <?php } ?>
            <span><?php echo get_bloginfo( 'name' ); ?></span>
        </a>
    </div>
    <span class="floating-header-divider">&mdash;</span>
    <div class="floating-header-title"><?php echo get_the_title(); ?></div>
    <!-- <div class="floating-header-share">
        <div class="floating-header-share-label">Share this {{> "icons/point"}}</div>
        <a class="floating-header-share-tw" href="https://twitter.com/share?text={{encode title}}&amp;url={{url absolute="true"}}"
            onclick="window.open(this.href, 'share-twitter', 'width=550,height=235');return false;">
            {{> "icons/twitter"}}
        </a>
        <a class="floating-header-share-fb" href="https://www.facebook.com/sharer/sharer.php?u={{url absolute="true"}}"
            onclick="window.open(this.href, 'share-facebook','width=580,height=296');return false;">
            {{> "icons/facebook"}}
        </a>
    </div> -->
    <!-- <progress id="reading-progress" class="progress" value="0">
        <div class="progress-container">
            <span class="progress-bar"></span>
        </div>
    </progress> -->
</div>
