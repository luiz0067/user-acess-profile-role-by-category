<?php 
/*
Plugin name: User access profile role by category
Plugin uri: user-acess-profile-role-by-category
Description: This plugin manage the role access of users by category and operation(create,read,update,delete) 
Version: 1.0
Author: Luiz Fernando Brogliatto Ferreira
Author uri: https://www.linkedin.com/in/luiz-fernando-brogliatto-ferreira-2375047b/
License: GPLv2 or later
*/
    //require_once plugin_dir_path(__FILE__) . 'includes/functions.wp.php';
    
    function theme_options_panel(){
      add_menu_page('Theme page title', 'Theme menu label', 'manage_options', 'theme-options', 'wps_theme_func');
      add_submenu_page( 'theme-options', 'Settings page title', 'Settings menu label', 'manage_options', 'theme-op-settings', 'wps_theme_func_settings');
      add_submenu_page( 'theme-options', 'FAQ page title', 'FAQ menu label', 'manage_options', 'theme-op-faq', 'wps_theme_func_faq');
    }
    add_action('admin_menu', 'theme_options_panel');
     
    function wps_theme_func(){
            echo '<div class="wrap"><div id="icon-options-general" class="icon32"><br></div>
            <h2>Theme</h2></div>';
    }
    function wps_theme_func_settings(){
            echo '<div class="wrap"><div id="icon-options-general" class="icon32"><br></div>
            <h2>Settings</h2></div>';
    }
    function wps_theme_func_faq(){
            echo '<div class="wrap"><div id="icon-options-general" class="icon32"><br></div>
            <h2>FAQ</h2></div>';
    }
    

?>