<?php

namespace App\Services;

class Queries
{
    public static function testExample()
    {
        $args = [
            'post_type' => 'post'
        ];
        $queryAll = new \WP_Query($args);
        return [
            'posts' => $queryAll->post
        ];
    }
    
    public static function getData()
    {
        $args = [
            'post_type' => 'banner_code'
        ];
        $queryAll = new \WP_Query($args);
        $banner = [];
        if($queryAll->post_count >0)
        {
            $banner = array_map(function($banner){
                $name = get_field('name',$banner);
                $image = get_field('image',$banner);
                $title = get_field('title',$banner);
                $url = $image['url'];
                $Imgtitle = $image['title'];
                $Imgalt = $image['alt'];
                $Imgcaption = $image['caption'];
                $size = 'medium';
                $thumb = $image['sizes'][$size];
                $width = $image['sizes'][$size. '-width'];
                $height = $image['sizes'][$size. '-height'];
                return (object)[
                    'name' => $name,
                    'url' => $url,
                    'title' => $title,
                    $image['title'] => $Imgtitle,
                    'alt' => $Imgalt,
                    'caption' => $Imgcaption,
                    'thumb' => $thumb,
                    'width' => $width,
                    'height' => $height,                   
                ];
            },$queryAll->posts);
            wp_reset_postdata();
        }
        return $banner;
    }
   

    

}
