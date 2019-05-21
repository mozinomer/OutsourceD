<?php

// create custom plugin settings menu
add_action('admin_menu', 'theme_options');

function theme_options() {

    //create new top-level menu
    add_menu_page('Theme Options', 'Theme Options', 'administrator', __FILE__, 'theme_options_setting_page' , plugins_url('./wp-content/images/icon_open.png', __FILE__) );

    //call register settings function
    add_action( 'admin_init', 'register_my_cool_plugin_settings' );
}

function register_my_cool_plugin_settings() {
    //register our settings
    register_setting( 'theme-options-setting-group', 'heading_data_home_page' );
    register_setting( 'theme-options-setting-group', 'tagline_heading_data_home_page' );
    register_setting( 'theme-options-setting-group', 'button_title_data_home_page' );
    register_setting( 'theme-options-setting-group', 'heading_article_home_page' );
    register_setting( 'theme-options-setting-group', 'tagline_heading_article_home_page' );
    register_setting( 'theme-options-setting-group', 'header_button_text' );
    register_setting( 'theme-options-setting-group', 'heading_full_services_homepage' );
    register_setting( 'theme-options-setting-group', 'heading_service_page' );
    register_setting( 'theme-options-setting-group', 'tagline_heading_service_page' );
    register_setting( 'theme-options-setting-group', 'des_heading_service_page' );
    register_setting( 'theme-options-setting-group', 'learn_more_button_text_service_page' );
    register_setting( 'theme-options-setting-group', 'heading_services_prmotion' );
    register_setting( 'theme-options-setting-group', 'description_services_prmotion' );
    register_setting( 'theme-options-setting-group', 'promo_button_text' );
    register_setting( 'theme-options-setting-group', 'get_a_quote_text_description' );
    register_setting( 'theme-options-setting-group', 'get_a_quote_text_heaidng' );
    register_setting( 'theme-options-setting-group', 'heading_agency_page' );
    register_setting( 'theme-options-setting-group', 'description_heading_agency_page' );
    register_setting( 'theme-options-setting-group', 'sub_heading_agency_page' );
    register_setting( 'theme-options-setting-group', 'strong_sub_heading_text1' );
    register_setting( 'theme-options-setting-group', 'strong_sub_heading_text2' );


    register_setting( 'theme-options-setting-group', 'heading_aboutus_agency' );
    register_setting( 'theme-options-setting-group', 'inner_heading1_aboutus_agency' );
    register_setting( 'theme-options-setting-group', 'inner_heading2_aboutus_agency' );
    register_setting( 'theme-options-setting-group', 'inner_heading3_aboutus_agency' );
    register_setting( 'theme-options-setting-group', 'inner_heading4_aboutus_agency' );
    register_setting( 'theme-options-setting-group', 'inner_heading5_aboutus_agency' );
    register_setting( 'theme-options-setting-group', 'inner_heading6_aboutus_agency' );
    register_setting( 'theme-options-setting-group', 'inner_heading7_aboutus_agency' );
    register_setting( 'theme-options-setting-group', 'inner_heading8_aboutus_agency' );

    register_setting( 'theme-options-setting-group', 'inner_para1_aboutus_agency' );
    register_setting( 'theme-options-setting-group', 'inner_para2_aboutus_agency' );
    register_setting( 'theme-options-setting-group', 'inner_para3_aboutus_agency' );
    register_setting( 'theme-options-setting-group', 'inner_para4_aboutus_agency' );
    register_setting( 'theme-options-setting-group', 'inner_para5_aboutus_agency' );
    register_setting( 'theme-options-setting-group', 'inner_para6_aboutus_agency' );
    register_setting( 'theme-options-setting-group', 'inner_para7_aboutus_agency' );
    register_setting( 'theme-options-setting-group', 'inner_para8_aboutus_agency' );

    register_setting( 'theme-options-setting-group', 'heading_bottom_about_agency' );


    register_setting( 'theme-options-setting-group', 'heading_work_page' );
    register_setting( 'theme-options-setting-group', 'sub_heading_work_page' );



    register_setting( 'theme-options-setting-group', 'home_under_services_heading' );
    register_setting( 'theme-options-setting-group', 'home_under_services_subheading' );
    register_setting( 'theme-options-setting-group', 'home_under_services_description' );
    register_setting( 'theme-options-setting-group', 'home_under_services_description2' );

    register_setting( 'theme-options-setting-group', 'section_2_case_studies_text' );



    register_setting( 'theme-options-setting-group', 'section_2_case_studies_text' );
    register_setting( 'theme-options-setting-group', 'section_3_case_studies_heading_left' );
    register_setting( 'theme-options-setting-group', 'section_3_case_studies_text_left' );




    register_setting( 'theme-options-setting-group', 'column1_heading_case_sudies' );
    register_setting( 'theme-options-setting-group', 'column2_heading_case_sudies' );
    register_setting( 'theme-options-setting-group', 'column3_heading_case_sudies' );

    register_setting( 'theme-options-setting-group', 'heading_section_4_single_post' );

    register_setting( 'theme-options-setting-group', 'heading_section_5_single_post' );
    register_setting( 'theme-options-setting-group', 'subheading_section_5_single_post' );


    register_setting( 'theme-options-setting-group', 'section_6_headin_single_post' );
    register_setting( 'theme-options-setting-group', 'section_6_subheadin_single_post' );



}

function theme_options_setting_page() {
?>
<div class="wrap">
<h1>Theme Options</h1>

<form method="post" action="options.php">
    <?php settings_fields( 'theme-options-setting-group' ); ?>
    <?php do_settings_sections( 'theme-options-setting-group' ); ?>
    <table class="form-table">
        <tr class="heaidng_sections_admin_plugin">
          <th>
            Home Page Text
          </th>
        </tr>
        
        <tr valign="top">
          <th scope="row">home_under_services_heading</th>
          <td><input type="text" name="home_under_services_heading" value="<?php echo esc_attr( get_option('home_under_services_heading') ); ?>" /></td>
          <th scope="row">home_under_services_subheading</th>
          <td><input type="text" name="home_under_services_subheading" value="<?php echo esc_attr( get_option('home_under_services_subheading') ); ?>" /></td>
          <th scope="row">home_under_services_description</th>
          <td><input type="text" name="home_under_services_description" value="<?php echo esc_attr( get_option('home_under_services_description') ); ?>" /></td>
          <th scope="row">home_under_services_description2</th>
          <td><input type="text" name="home_under_services_description2" value="<?php echo esc_attr( get_option('home_under_services_description2') ); ?>" /></td>
        </tr>

        <tr valign="top">
          <th scope="row">Heading Data</th>
          <td><input type="text" name="heading_data_home_page" value="<?php echo esc_attr( get_option('heading_data_home_page') ); ?>" /></td>
          <th scope="row">Tagline Heading Data</th>
          <td><input type="text" name="tagline_heading_data_home_page" value="<?php echo esc_attr( get_option('tagline_heading_data_home_page') ); ?>" /></td>
          <th scope="row">Button Title Data</th>
          <td><input type="text" name="button_title_data_home_page" value="<?php echo esc_attr( get_option('button_title_data_home_page') ); ?>" /></td>
        </tr>
        <tr valign="top">
          <th scope="row">Heading article</th>
          <td><input type="text" name="heading_article_home_page" value="<?php echo esc_attr( get_option('heading_article_home_page') ); ?>" /></td>
          <th scope="row">Tagline Heading article</th>
          <td><input type="text" name="tagline_heading_article_home_page" value="<?php echo esc_attr( get_option('tagline_heading_article_home_page') ); ?>" /></td>
        </tr>

        <tr valign="top">
          <th scope="row">Header Button Text</th>
          <td><input type="text" name="header_button_text" value="<?php echo esc_attr( get_option('header_button_text') ); ?>" /></td>
        </tr>

        <tr valign="top">
          <th scope="row">heading full services</th>
          <td><input type="text" name="heading_full_services_homepage" value="<?php echo esc_attr( get_option('heading_full_services_homepage') ); ?>" /></td>
        </tr>
        <tr>
          <th>
            Services Page
          </th>
        </tr>
        <tr valign="top">
          <th scope="row">heading services Page</th>
          <td><input type="text" name="heading_service_page" value="<?php echo esc_attr( get_option('heading_service_page') ); ?>" /></td>
          <th scope="row">tagline heading services page</th>
          <td><input type="text" name="tagline_heading_service_page" value="<?php echo esc_attr( get_option('tagline_heading_service_page') ); ?>" /></td>
          <th scope="row">description heading services page</th>
          <td><input type="text" name="des_heading_service_page" value="<?php echo esc_attr( get_option('des_heading_service_page') ); ?>" /></td>
        </tr>
        <tr valign="top">
          <th scope="row">Link text to the service</th>
          <td><input type="text" name="learn_more_button_text_service_page" value="<?php echo esc_attr( get_option('learn_more_button_text_service_page') ); ?>" /></td>
        </tr>
        <tr valign="top">
          <th scope="row">heading services prmotion</th>
          <td><input type="text" name="heading_services_prmotion" value="<?php echo esc_attr( get_option('heading_services_prmotion') ); ?>" /></td>
          <th scope="row">description services prmotion</th>
          <td><input type="text" name="description_services_prmotion" value="<?php echo esc_attr( get_option('description_services_prmotion') ); ?>" /></td>
          <th scope="row">promo button text</th>
          <td><input type="text" name="promo_button_text" value="<?php echo esc_attr( get_option('promo_button_text') ); ?>" /></td>
        </tr>
        <tr valign="top">
          <th scope="row">get a quote text heaidng</th>
          <td><input type="text" name="get_a_quote_text_heaidng" value="<?php echo esc_attr( get_option('get_a_quote_text_heaidng') ); ?>" /></td>
          <th scope="row">get a quote text description</th>
          <td><input type="text" name="get_a_quote_text_description" value="<?php echo esc_attr( get_option('get_a_quote_text_description') ); ?>" /></td>
        </tr>

        <tr>
          <th>
            agency page
          </th>
        </tr>
        <tr valign="top">
          <th scope="row">heading_agency_page</th>
          <td><input type="text" name="heading_agency_page" value="<?php echo esc_attr( get_option('heading_agency_page') ); ?>" /></td>
          <th scope="row">description_heading_agency_page</th>
          <td><input type="text" name="description_heading_agency_page" value="<?php echo esc_attr( get_option('description_heading_agency_page') ); ?>" /></td>
        </tr>
        <tr valign="top">
          <th scope="row">sub_heading_agency_page</th>
          <td><input type="text" name="sub_heading_agency_page" value="<?php echo esc_attr( get_option('sub_heading_agency_page') ); ?>" /></td>
          <th scope="row">strong_sub_heading_text1</th>
          <td><input type="text" name="strong_sub_heading_text1" value="<?php echo esc_attr( get_option('strong_sub_heading_text1') ); ?>" /></td>
          <th scope="row">strong_sub_heading_text2</th>
          <td><input type="text" name="strong_sub_heading_text2" value="<?php echo esc_attr( get_option('strong_sub_heading_text2') ); ?>" /></td>
        </tr>

        <tr valign="top">
          <th scope="row">heading_aboutus_agency</th>
          <td><input type="text" name="heading_aboutus_agency" value="<?php echo esc_attr( get_option('heading_aboutus_agency') ); ?>" /></td>
        </tr>

        <tr valign="top">
          <th scope="row">inner_heading1_aboutus_agency</th>
          <td><input type="text" name="inner_heading1_aboutus_agency" value="<?php echo esc_attr( get_option('inner_heading1_aboutus_agency') ); ?>" /></td>
          <th scope="row">inner_para1_aboutus_agency</th>
          <td><input type="text" name="inner_para1_aboutus_agency" value="<?php echo esc_attr( get_option('inner_para1_aboutus_agency') ); ?>" /></td>
          <th scope="row">inner_heading2_aboutus_agency</th>
          <td><input type="text" name="inner_heading2_aboutus_agency" value="<?php echo esc_attr( get_option('inner_heading2_aboutus_agency') ); ?>" /></td>
          <th scope="row">inner_para2_aboutus_agency</th>
            <td><input type="text" name="inner_para2_aboutus_agency" value="<?php echo esc_attr( get_option('inner_para2_aboutus_agency') ); ?>" /></td>
        </tr>

        <tr valign="top">
          <th scope="row">inner_heading3_aboutus_agency</th>
          <td><input type="text" name="inner_heading3_aboutus_agency" value="<?php echo esc_attr( get_option('inner_heading3_aboutus_agency') ); ?>" /></td>
          <th scope="row">inner_para3_aboutus_agency</th>
          <td><input type="text" name="inner_para3_aboutus_agency" value="<?php echo esc_attr( get_option('inner_para3_aboutus_agency') ); ?>" /></td>
          <th scope="row">inner_heading4_aboutus_agency</th>
          <td><input type="text" name="inner_heading4_aboutus_agency" value="<?php echo esc_attr( get_option('inner_heading4_aboutus_agency') ); ?>" /></td>
          <th scope="row">inner_para4_aboutus_agency</th>
            <td><input type="text" name="inner_para4_aboutus_agency" value="<?php echo esc_attr( get_option('inner_para4_aboutus_agency') ); ?>" /></td>
        </tr>

        <tr valign="top">
          <th scope="row">inner_heading5_aboutus_agency</th>
          <td><input type="text" name="inner_heading5_aboutus_agency" value="<?php echo esc_attr( get_option('inner_heading5_aboutus_agency') ); ?>" /></td>
          <th scope="row">inner_para5_aboutus_agency</th>
          <td><input type="text" name="inner_para5_aboutus_agency" value="<?php echo esc_attr( get_option('inner_para5_aboutus_agency') ); ?>" /></td>
          <th scope="row">inner_heading6_aboutus_agency</th>
          <td><input type="text" name="inner_heading6_aboutus_agency" value="<?php echo esc_attr( get_option('inner_heading6_aboutus_agency') ); ?>" /></td>
          <th scope="row">inner_para6_aboutus_agency</th>
            <td><input type="text" name="inner_para6_aboutus_agency" value="<?php echo esc_attr( get_option('inner_para6_aboutus_agency') ); ?>" /></td>
        </tr>

        <tr valign="top">
          <th scope="row">inner_heading7_aboutus_agency</th>
          <td><input type="text" name="inner_heading7_aboutus_agency" value="<?php echo esc_attr( get_option('inner_heading7_aboutus_agency') ); ?>" /></td>
          <th scope="row">inner_para7_aboutus_agency</th>
          <td><input type="text" name="inner_para7_aboutus_agency" value="<?php echo esc_attr( get_option('inner_para7_aboutus_agency') ); ?>" /></td>
          <th scope="row">inner_heading8_aboutus_agency</th>
          <td><input type="text" name="inner_heading8_aboutus_agency" value="<?php echo esc_attr( get_option('inner_heading8_aboutus_agency') ); ?>" /></td>
          <th scope="row">inner_para8_aboutus_agency</th>
            <td><input type="text" name="inner_para8_aboutus_agency" value="<?php echo esc_attr( get_option('inner_para8_aboutus_agency') ); ?>" /></td>
        </tr>

        <tr valign="top">
          <th scope="row">heading_bottom_about_agency</th>
          <td><input type="text" name="heading_bottom_about_agency" value="<?php echo esc_attr( get_option('heading_bottom_about_agency') ); ?>" /></td>
        </tr>

        <tr>
          <th>
            work page
          </th>
        </tr>
        <tr valign="top">
          <th scope="row">heading_work_page</th>
          <td><input type="text" name="heading_work_page" value="<?php echo esc_attr( get_option('heading_work_page') ); ?>" /></td>
          <th scope="row">sub_heading_work_page</th>
          <td><input type="text" name="sub_heading_work_page" value="<?php echo esc_attr( get_option('sub_heading_work_page') ); ?>" /></td>
        </tr>


        <tr>
          <th>
            case studies
          </th>
        </tr>
        <tr valign="top">
          <th scope="row">section_2_case_studies_text</th>
          <td><input type="text" name="section_2_case_studies_text" value="<?php echo esc_attr( get_option('section_2_case_studies_text') ); ?>" /></td>
        </tr>
        <tr valign="top">
          <th scope="row">section_3_case_studies_heading_left</th>
          <td><input type="text" name="section_3_case_studies_heading_left" value="<?php echo esc_attr( get_option('section_3_case_studies_heading_left') ); ?>" /></td>
          <th scope="row">section_3_case_studies_text_left</th>
          <td><input type="text" name="section_3_case_studies_text_left" value="<?php echo esc_attr( get_option('section_3_case_studies_text_left') ); ?>" /></td>
        </tr>
        <tr valign="top">
          <th scope="row">column1_heading_case_sudies</th>
          <td><input type="text" name="column1_heading_case_sudies" value="<?php echo esc_attr( get_option('column1_heading_case_sudies') ); ?>" /></td>
          <th scope="row">column2_heading_case_sudies</th>
          <td><input type="text" name="column2_heading_case_sudies" value="<?php echo esc_attr( get_option('column2_heading_case_sudies') ); ?>" /></td>
          <th scope="row">column3_heading_case_sudies</th>
          <td><input type="text" name="column3_heading_case_sudies" value="<?php echo esc_attr( get_option('column3_heading_case_sudies') ); ?>" /></td>
        </tr>

        <tr valign="top">
          <th scope="row">heading_section_4_single_post</th>
          <td><input type="text" name="heading_section_4_single_post" value="<?php echo esc_attr( get_option('heading_section_4_single_post') ); ?>" /></td>
        </tr>

        <tr valign="top">
          <th scope="row">heading_section_5_single_post</th>
          <td><input type="text" name="heading_section_5_single_post" value="<?php echo esc_attr( get_option('heading_section_5_single_post') ); ?>" /></td>
          <th scope="row">subheading_section_5_single_post</th>
          <td><input type="text" name="subheading_section_5_single_post" value="<?php echo esc_attr( get_option('subheading_section_5_single_post') ); ?>" /></td>
        </tr>



        <tr valign="top">
          <th scope="row">section_6_headin_single_post</th>
          <td><input type="text" name="section_6_headin_single_post" value="<?php echo esc_attr( get_option('section_6_headin_single_post') ); ?>" /></td>
          <th scope="row">section_6_subheadin_single_post</th>
          <td><input type="text" name="section_6_subheadin_single_post" value="<?php echo esc_attr( get_option('section_6_subheadin_single_post') ); ?>" /></td>
        </tr>


    </table>
    
    <?php submit_button(); ?>

</form>
</div>
<?php } ?>
