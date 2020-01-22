<?php
//adds style.css file
function university_files()
{
  //loads a js file - name, loads the them file location, if is has dependencies, version no, to load at the end of the body tag
  wp_enqueue_script('main-university-js',get_theme_file_uri('/js/scripts-bundled.js'),NULL,'1.0',true );
  //add external fonts
  wp_enqueue_style('custom-google-fonts','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  //adds external font-awesome
  wp_enqueue_style('font-awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  //adds Style.css
  wp_enqueue_style('university_main_styles',get_stylesheet_uri());
}
//adds scripts in head
add_action('wp_enqueue_scripts','university_files');

function university_features()
{
  add_theme_support('title-tag');
}
//add action for title tages
add_action('after_setup_theme','university_features');
