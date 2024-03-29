<?php
/**
 * Template Style One for Team
 *
 * @package RadiantThemes
 */

$output .= '<!-- team-item -->' . "\r";
$output .= '<div class="team-item matchHeight ' . $rt_animation . '" ' . $time . '>';
    $output .= '<div class="holder">';
        $output .= '<div class="pic">';
            $output .= '<img src="' . plugins_url( 'radiantthemes-addons/team/images/blank-image-100x109.png' ) . '" alt="Blank Image" width="100" height="109">';
            $output .= '<div class="pic-background"></div>';
            if ( 'yes' === $shortcode['team_enable_link'] ) {
                $output .= '<a class="pic-main" href="' . get_the_permalink() . '" style="background-image:url(' . get_the_post_thumbnail_url( get_the_ID(), 'large' ) . ');"></a>';
            } else {
                $output .= '<div class="pic-main" style="background-image:url(' . get_the_post_thumbnail_url( get_the_ID(), 'large' ) . ');"></div>';   
            }
            $output .= '<div class="pic-data">';
                $output .= '<div class="table">';
                    $output .= '<div class="table-cell">';
                        $output .= '<p class="excerpt">' . get_the_excerpt() . '</p>';
                        $output .= '<ul class="social">';
                            $facebook = get_post_meta( get_the_ID(), 'facebook', true );
                            $twitter  = get_post_meta( get_the_ID(), 'twitter', true );
                            $gplus    = get_post_meta( get_the_ID(), 'gplus', true );
                            $linkedin = get_post_meta( get_the_ID(), 'linkedin', true );
                            if ( ! empty( $facebook ) ) :
                            	$output .= '<li class="facebook"><a href="' . $facebook . '" target="_blank"><i class="fa fa-facebook"></i></a></li>';
                            endif;
                            
                            if ( ! empty( $twitter ) ) :
                            	$output .= '<li class="twitter"><a href="' . $twitter . '" target="_blank"><i class="fa fa-twitter"></i></a></li>';
                            endif;
                            
                            if ( ! empty( $gplus ) ) :
                            	$output .= '<li class="google-plus"><a href="' . $gplus . '" target="_blank"><i class="fa fa-google-plus"></i></a></li>';
                            endif;
                            
                            if ( ! empty( $linkedin ) ) :
                            	$output .= '<li class="linkedin"><a href="' . $linkedin . '" target="_blank"><i class="fa fa-linkedin"></i></a></li>';
                            endif;
                        $output .= '</ul>';
                    $output .= '</div>';
                $output .= '</div>';
            $output .= '</div>';
        $output .= '</div>';
        $output .= '<div class="data">';
            if ( 'yes' === $shortcode['team_enable_link'] ) {
                $output .= '<p class="title"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></p>';
            } else {
                $output .= '<p class="title">' . get_the_title() . '</p>';
            }
            $terms = get_the_terms( get_the_ID(), 'profession' );
            if ( ! empty( $terms ) ) {
            	foreach ( $terms as $term ) {
            		$output .= '<p class="designation">' . $term->name . '</p>';
            	}
            }
        $output .= '</div>';
    $output .= '</div>';
$output .= '</div>';
$output .= '<!-- team-item -->' . "\r";
