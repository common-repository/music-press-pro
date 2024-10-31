<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
$genreID = get_the_ID();
$type='video';
$limit =get_option('options_global_limit',8);
$orderby = get_option('options_global_orderby','mp_count_play');
$order = get_option('options_global_order','DESC');
$song_arr = music_press_pro_get_songs_from_genre($genreID,$limit,$orderby,$order,$type);
if($song_arr){
    ?>
<div class="mp-list video">
    <h2 class="mp-title mp-line"><?php echo esc_attr__('Videos', 'music-press-pro');?></h2>
    <?php
        music_press_pro_get_list_song_video_by_ID($song_arr);
?>
</div>
<?php
}