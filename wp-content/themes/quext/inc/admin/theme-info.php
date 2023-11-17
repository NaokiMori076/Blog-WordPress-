<?php
/**
 * Add the about page under appearance.
 *
 * Display the details about the theme information
 *
 * @package quext
 */
?>
<?php
// About Information
add_action( 'admin_menu', 'quext_about' );
function quext_about() {         
        add_theme_page( esc_html__('About Theme', 'quext'), esc_html__('Quext Theme', 'quext'), 'edit_theme_options', 'quext-about', 'quext_about_page');   
}

// CSS for About Theme Page
function quext_admin_theme_style($hook) {

        if ( 'appearance_page_quext-about' != $hook ) {
        return;
    }

   wp_enqueue_style('quext-admin-style', get_template_directory_uri() . '/inc/admin/theme-info.css');
}
add_action('admin_enqueue_scripts', 'quext_admin_theme_style');

function quext_about_page() {
$theme = wp_get_theme();
$pro_purchase_url = "https://themecanary.com/pricing/quext/";
$doc_url = "https://themecanary.com/documentation/quext/";
$demo_url = "https://demo.themecanary.com/quext/#demos";
$support_url = "https://wordpress.org/support/theme/quext/";

$theme_name = esc_html( $theme->Name );
$free_theme_name = str_replace( ' Pro', '',$theme_name );
?>
<div class="quext-wrapper">
  <div id="theme-info-page">
    <div class="admin-banner">
      <div class="banner-left">
        <h2>
          <?php echo esc_html( $theme->Name ); ?>
        </h2>
        <p>
          <?php esc_html_e( 'Multipurpose WordPress Block Based Theme', 'quext' ); ?>
        </p>
      </div>
      <div class="banner-right">
        <div class="quext-buttons">
          <a href="<?php echo esc_url($doc_url); ?>" class="quext-admin-button demo" target="_blank" rel="noreferrer">
            <?php esc_html_e( 'Documentation', 'quext' ); ?>
          </a>
          <a href="<?php echo  esc_url($demo_url); ?>" class="quext-admin-button documentation" target="_blank" rel="noreferrer">
            <?php esc_html_e( 'Demo', 'quext' ); ?>
          </a>
          <a href="<?php echo  esc_url($pro_purchase_url); ?>" class="quext-admin-button upgrade-to-pro" target="__blank">
            <?php echo esc_html( 'Upgrade Pro', 'quext' ); ?>
          </a>
        </div>
      </div>
    </div>
    <div class="feature-list">
          <div class="quext-about-container compare-table">
              <h3>
                <?php echo esc_html( $free_theme_name ); ?>
                <?php esc_html_e( 'Free Vs Pro', 'quext' ); ?>
              </h3>
              <table>
                <thead>
                  <tr>
                    <th>
                      <?php esc_html_e( 'Features', 'quext' ); ?>
                    </th>
                    <th>
                      <?php echo esc_html( $theme->Name ); ?> <?php esc_html_e( 'Free', 'quext' ); ?>
                    </th>
                    <th>
                      <?php echo esc_html( $theme->Name ); ?> <?php esc_html_e( 'Pro', 'quext' ); ?>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <?php esc_html_e( 'Easy Setup', 'quext' ); ?>
                    </td>
                    <td><span class="dashicons dashicons-yes"></span>
                    </td>
                    <td><span class="dashicons dashicons-yes"></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <?php esc_html_e( 'Responsive', 'quext' ); ?>
                    </td>
                    <td><span class="dashicons dashicons-yes"></span>
                    </td>
                    
                    <td><span class="dashicons dashicons-yes"></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <?php esc_html_e( 'Advance Color Options', 'quext' ); ?>
                    </td>
                    <td><span class="dashicons dashicons-yes"></span>
                    </td>
                    <td><span class="dashicons dashicons-yes"></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <?php esc_html_e( '800+ Fonts', 'quext' ); ?>
                    </td>
                    <td><span class="dashicons dashicons-no"></span>
                    </td>
                    <td><span class="dashicons dashicons-yes"></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <?php esc_html_e( 'Slider Options ', 'quext' ); ?>
                    </td>
                    <td><span class="dashicons dashicons-no"></span>
                    </td>
                    <td><span class="dashicons dashicons-yes"></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <?php esc_html_e( 'Customizer', 'quext' ); ?>
                    </td>
                    <td><span class="dashicons dashicons-no"></span>
                    </td>
                    <td><span class="dashicons dashicons-yes"></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <?php esc_html_e( 'Front/ Home page posts categories', 'quext' ); ?>
                    </td>
                    <td><span class="dashicons dashicons-no"></span>
                    </td>
                    <td><span class="dashicons dashicons-yes"></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <?php esc_html_e( 'Boxed Layout', 'quext' ); ?>
                    </td>
                    <td><span class="dashicons dashicons-no"></span>
                    </td>
                    <td><span class="dashicons dashicons-yes"></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <?php esc_html_e( 'Sidebar', 'quext' ); ?>
                    </td>
                    <td><?php esc_html_e('Right Sidebar','quext'); ?></span>
                    </td>
                    <td><?php esc_html_e('Right/Left/ Fullwidth/ No Sidebar','quext'); ?></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <?php esc_html_e( 'Back to Top', 'quext' ); ?>
                    </td>
                    <td><span class="dashicons dashicons-no"></span>
                    </td>
                    <td><span class="dashicons dashicons-yes"></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <?php esc_html_e( 'Select Font Family', 'quext' ); ?>
                    </td>
                    <td><span class="dashicons dashicons-no"></span>
                    </td>
                    <td><span class="dashicons dashicons-yes"></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <?php esc_html_e( 'Styles', 'quext' ); ?>
                    </td>
                    <td><?php esc_html_e('3','quext'); ?></span>
                    </td>
                    <td><?php esc_html_e('11','quext'); ?></span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <?php esc_html_e( 'Templates', 'quext' ); ?>
                    </td>
                    <td><?php esc_html_e('10','quext'); ?></span>
                    </td>
                    <td><?php esc_html_e('13','quext'); ?></span>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <?php esc_html_e( 'Template Parts', 'quext' ); ?>
                    </td>
                    <td><?php esc_html_e('13','quext'); ?></span>
                    </td>
                    <td><?php esc_html_e('16','quext'); ?></span>
                    </td>
                  </tr>
                </tbody>
              </table>
          </div>
      <div class="about-us">
        <div class="our-product"><span><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i></span>
          <h3>
            <?php esc_html_e( 'Love our product?', 'quext' ); ?>
          </h3>
          <h4>
            <?php esc_html_e( 'Motivate 5 Star rating', 'quext' ); ?>
          </h4>
          <a href="https://wordpress.org/support/theme/quext/reviews/?filter=5" class="quext-admin-button" target="__blank">
            <?php esc_html_e( 'Rate Us', 'quext' ); ?>
          </a>
        </div>
        <div class="our-product">
          <h3>
            <?php esc_html_e( 'Still have any question?', 'quext' ); ?>
          </h3>
          <p>
          <?php esc_html_e( 'Don\'t hesitate to ask', 'quext' ); ?>
          </p>
          <a href="<?php echo esc_url($support_url); ?>" class="quext-admin-button" target="_blank">
            <?php esc_html_e( 'Get Support', 'quext' ); ?>
          </a>
        </div>
        <div class="quext-buttons">
          <a href="<?php echo esc_url($pro_purchase_url); ?>" class="quext-admin-button upgrade-to-pro" rel="noreferrer" target="_blank"><i class="fa fa-paint-brush"></i>
            <?php printf( esc_html( 'Get Quext Pro', 'quext' ), $theme->Name ); ?>
          </a>
          <a href="<?php echo esc_url($doc_url); ?>" class="quext-admin-button premium-button documentation" target="_blank" rel="noreferrer"><i class="fa fa-book"></i>
            <?php esc_html_e( 'Documentation', 'quext' ); ?>
          </a>
        </div>
      </div>
    </div>
</div>

<?php }