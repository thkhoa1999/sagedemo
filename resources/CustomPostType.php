<?php
function create_post_type() {
    $bannerlabels = array (
    //BEGIN - Việt Hóa menu custom post type
    'name' => _x('banner','Tên nhiều banner'),
    'singular_name' => _x('banner','Tên một banner'),
    'add_new' => __ ('Thêm banner'),
    'add_new_item' => __('Thêm banner mới'),
    'edit_item' => __('Sửa banner'),
    'new_item' => __('Thêm banner mới'),
    'all_items' => __('Tất cả banner'),
    'view_item' => __('Xem banner'),
    'search_item' => __('Tìm banner'),
    'not_found' => __('Hiện tại chưa có banner nào'),
    'not_found_in_trash' => __('Không có banner nào trong sọt rác'),
    'menu_name' => 'banner'
    //END - Việt hóa menu custom post type
);
    $args = array(
        'labels' => $bannerlabels,
        'description' => 'Quản lý các banner trên blog',
        //Cho phép hiển thị menu trong WordPress Dashboard - line 22.
        'public' => true,
        'menu_position' => 3,
        'has_archive' => true,
        //Xác định những chức năng được hỗ trợ trong custom post type - line 25
        'supports' => array('title','editor','thumbnail','excerpt','comments'),
        'has_archive' => true,
    );
    register_post_type ('banner_code',$args);
}
add_action ('init','create_post_type');