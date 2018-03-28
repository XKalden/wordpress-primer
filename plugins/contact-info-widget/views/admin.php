<!-- This file is used to markup the administration form of the widget. -->

<div class="widget-content">



   <p><label for="<?php echo $this->get_field_id('location'); ?>">Location:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('location'); ?>" name="<?php echo $this->get_field_name('location'); ?>" type="text" value="<?php echo $location; ?>">
   </p>

     <p><label for="<?php echo $this->get_field_id('tel_number'); ?>">Telephone Number:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('tel_number'); ?>" name="<?php echo $this->get_field_name('tel_number'); ?>" type="text" value="<?php echo $tel_number; ?>">
   </p>

   
   <p><label for="<?php echo $this->get_field_id('email'); ?>">Email:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('email'); ?>" name="<?php echo $this->get_field_name('email'); ?>" type="text" value="<?php echo $email; ?>">
   </p>


   <p><label for="<?php echo $this->get_field_id('fb_page'); ?>">Facebook page:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('fb_page'); ?>" name="<?php echo $this->get_field_name('fb_page'); ?>" type="text" value="<?php echo $fb_page; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('twitter_page'); ?>">Twitter Page:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('twitter_page'); ?>" name="<?php echo $this->get_field_name('twitter_page'); ?>" type="text" value="<?php echo $twitter_page; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('insta_page'); ?>">Instagram Page:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('insta_page'); ?>" name="<?php echo $this->get_field_name('insta_page'); ?>" type="text" value="<?php echo $insta_page; ?>">
   </p>

</div>
