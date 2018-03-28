<!-- This file is used to markup the administration form of the widget. -->

    <div class="info">
        <p class="location"><span class="location_img">L</span><?php echo ' '. $location; ?></p>
        <p class="tel"><span class="tel_img">C</span><?php echo ' '. $tel_number; ?></p>
        <p class="email_p"><span class="email">S</span><a class="email" href="mailto:info@inhabitent.com"><?php echo ' '. $email;?></a></p>
    </div>

    <div class="social">
        <a class="fb_page" href=<?php echo $fb_page ?> target="_blank">Facebook</a>
        <a class="twitter_page" href=<?php echo $twitter_page ?> target="_blank">Twitter</a>
        <a class="insta_page" href=<?php echo $insta_page ?> target="_blank">Insta</a>
    </div>

