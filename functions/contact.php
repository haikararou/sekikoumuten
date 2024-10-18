<?php

function wpcf7_get_post_data( $tag ){

    if( !is_array( $tag ) ) return $tag;

    //クエリに[post_id]がセットされているか
    $post_id = ( isset( $_GET['post_id']) && $_GET['post_id'] ) ? $_GET['post_id'] : false;

    //[post_id]がある場合
    if( $post_id ) {

        if( $tag['name'] == 'event-title' ) {

            $title = get_the_title( $post_id );
            $tag['values'] = array( $title );

        } else if( $tag['name'] == 'url' ) {

            $url = get_permalink( $post_id );
            $tag['values'] = array( $url );

        }

    }

    return $tag;
}
add_filter( 'wpcf7_form_tag', 'wpcf7_get_post_data' , 11 );