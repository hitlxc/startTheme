<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
    'name'         => __( '右边的侧边栏' ),
    'id'           => 'sidebar-1',
    'description'  => __( '右侧边栏的小工具。' ),
));

//function my_function_admin_bar(){return false;}
//add_filter('show_admin_bar' , my_function_admin_bar);

?>