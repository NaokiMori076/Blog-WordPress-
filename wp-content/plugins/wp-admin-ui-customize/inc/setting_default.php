<?php

$Data = $this->get_data( 'user_role' );
$UserRoles = $this->get_user_role();

// include js css
$ReadedJs = array( 'jquery' , 'jquery-ui-sortable' );
wp_enqueue_script( $this->PageSlug ,  $this->Url . $this->PluginSlug . '.js', $ReadedJs , $this->Ver );
wp_enqueue_style( $this->PageSlug , $this->Url . $this->PluginSlug . '.css', array() , $this->Ver );

?>
<div class="wrap">

  <?php echo $this->Msg; ?>
  <h2><?php echo $this->Name; ?></h2>
  <div style="background: #fff; border: 1px solid #efefef; padding: 0 20px; border-radius: 10px; box-shadow: 3px 3px rgba(0, 0, 0, 0.2);">
    <p><span class="dashicons dashicons-warning"></span> <?php _e( 'Thank you for using WP Admin UI Customize. But sorry this plugin is stopped development and instead I developing to new plugin.' , 'wp-admin-ui-customize' ); ?> ;)</p>
    <p><a href="https://mywpcustomize.com" target="_blank" class="button button-primary"><span class="dashicons dashicons-admin-plugins" style="margin-top: 3px;"></span> My WP Customize</a></p>
  </div>
  <p><?php _e( '
WP Admin UI Customize allows the management UI for different user roles to be customized.' , 'wp-admin-ui-customize' ); ?></p>
  <p><?php _e ( 'Select the user roles to customize below.' , 'wp-admin-ui-customize' ); ?></p>

  <div id="poststuff">
    <div id="post-body" class="metabox-holder columns-2">

      <div id="postbox-container-1" class="postbox-container">

        <div id="about_plugin">

          <div class="stuffbox" id="aboutbox">
            <h3><span class="hndle"><?php _e( 'About plugin' , 'wp-admin-ui-customize' ); ?></span></h3>
            <div class="inside">
              <p><?php _e( 'Tested with WordPress versions' , 'wp-admin-ui-customize' ); ?> : 4.2 - 4.9</p>
              <ul>
                <li><a href="<?php echo esc_url( $this->Site ); ?>" target="_blank"><?php _e( 'Plugin site' , 'wp-admin-ui-customize' ); ?></a></li>
                <li><a href="<?php echo esc_url( $this->AuthorUrl ); ?>" target="_blank"><?php _e( 'Developer site' , 'wp-admin-ui-customize' ); ?></a></li>
                <li><a href="http://wordpress.org/support/plugin/<?php echo $this->PluginSlug; ?>" target="_blank"><?php _e( 'Support Forums' ); ?></a></li>
                <li><a href="http://wordpress.org/support/view/plugin-reviews/<?php echo $this->PluginSlug; ?>" target="_blank"><?php _e( 'Reviews' , 'wp-admin-ui-customize' ); ?></a></li>
                <li><a href="https://twitter.com/gqevu6bsiz" target="_blank">twitter</a></li>
              </ul>
            </div>
          </div>

          <div class="stuffbox" id="usefulbox">
            <h3><span class="hndle"><?php _e( 'Useful plugins' , 'wp-admin-ui-customize' ); ?></span></h3>
            <div class="inside">
              <p><strong><a href="http://wordpress.org/extend/plugins/post-lists-view-custom/" target="_blank">Post Lists View Custom</a></strong></p>
              <p class="description"><?php _e( 'Customize list view columns for posts, pages, custom post types, media library, and other management screens.' , 'wp-admin-ui-customize' ); ?></p>
              <p><strong><a href="http://wordpress.org/extend/plugins/announce-from-the-dashboard/" target="_blank">Announce from the Dashboard</a></strong></p>
              <p class="description"><?php _e( 'Create dashboard messages to be displayed for selected user roles.' , 'wp-admin-ui-customize' ); ?></p>
              <p><strong><a href="http://wordpress.org/extend/plugins/custom-options-plus-post-in/" target="_blank">Custom Options Plus Post in</a></strong></p>
              <p class="description"><?php _e( 'Create custom global variables that can be used with generated template tags or shortcodes.' , 'wp-admin-ui-customize' ); ?></p>
              <p>&nbsp;</p>
            </div>
          </div>

        </div>

      </div>

      <div id="postbox-container-2" class="postbox-container">

        <div id="user_role">

          <form id="wauc_setting_default" class="wauc_form" method="post" action="<?php echo esc_url( remove_query_arg( 'wauc_msg' , add_query_arg( array( 'page' => $this->PageSlug ) ) ) ); ?>">
            <input type="hidden" name="<?php echo esc_attr( $this->UPFN ); ?>" value="Y" />
            <?php wp_nonce_field( $this->Nonces["value"] , $this->Nonces["field"] ); ?>
            <input type="hidden" name="record_field" value="user_role" />

            <div class="postbox">
              <h3 class="hndle"><span><?php _e( 'User Roles' ); ?></span></h3>
              <div class="inside">
                <?php $field = 'user_role'; ?>
                <?php foreach($UserRoles as $role_name => $val) : ?>
                  <?php $Checked = ''; ?>
                  <?php if( !empty( $Data[$role_name] ) ) : $Checked = 'checked="checked"'; endif; ?>
                  <p>
                    <label>
                      <input type="checkbox" name="data[<?php echo esc_attr( $field ); ?>][<?php echo esc_attr( $role_name ); ?>]" value="1" <?php echo esc_attr( $Checked ); ?> />
                      <?php echo $val["label"]; ?>
                    </label>
                  </p>
                <?php endforeach; ?>
              </div>
            </div>

            <p class="submit">
              <input type="submit" class="button-primary" name="update" value="<?php echo esc_attr( __( 'Save' ) ); ?>" />
            </p>

            <p class="submit reset">
              <span class="description"><?php printf( __( 'Reset the %s?' , 'wp-admin-ui-customize' ) , __( 'User Roles Settings' , 'wp-admin-ui-customize' ) ); ?></span>
              <input type="submit" class="button-secondary" name="reset" value="<?php echo esc_attr( __( 'Reset settings' , 'wp-admin-ui-customize' ) ); ?>" />
            </p>

            <p>&nbsp;</p>

          </form>

          <p>&nbsp;</p>

          <div class="stuffbox" style="border-color: #FFC426; border-width: 3px;">
            <h3 style="background: #FFF2D0; border-color: #FFC426;"><span class="hndle"><?php _e( 'Do you need professional setup and customization?' , 'wp-admin-ui-customize' ); ?></span></h3>
            <div class="inside">
              <p style="float: right;">
                <img src="<?php echo esc_url( $this->Schema . 'www.gravatar.com/avatar/7e05137c5a859aa987a809190b979ed4?s=46' ); ?>" width="46" /><br />
                <a href="<?php echo esc_url( $this->AuthorUrl . 'contact-us/' ); ?>" target="_blank">gqevu6bsiz</a>
              </p>
              <p><?php _e( 'I provide full service customization for WP Admin UI Customize.' , 'wp-admin-ui-customize' ); ?></p>
              <p><?php _e( 'Please contact me if you are interested.' , 'wp-admin-ui-customize' ); ?></p>
              <p>
                <a href="<?php echo esc_url( $this->Site . 'contact/' ); ?>" target="_blank"><?php _e( 'Contact me' , 'wp-admin-ui-customize' ); ?></a>
              </p>
            </div>
          </div>

        </div>

      </div>

      <br class="clear">

    </div>

  </div>

</div>
