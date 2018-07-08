<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package asd
 */

?>
<div class='featured-content'>
<article id="post-<?php the_ID(); ?> featured-content" <?php post_class(); ?>>
	<?php
// check if the flexible content field has rows of data
if( have_rows('featured_content') ):
		$i = 0;
     // loop through the rows of data
    while ( have_rows('featured_content') ) : the_row();

					if( get_row_layout() == 'hero_featured' ):

            $image = get_sub_field('background_image');
            $hero_top_text = get_sub_field('hero_top_text');
            $hero_bottom_text = get_sub_field('hero_bottom_text');

						echo '<div class="home-hero" style="background-image:url(' . $image . ');">';
  						echo '<h1>' . $hero_top_text . '</h1>';
              echo '<p>' . $hero_bottom_text . '</p>';
              //echo '<a href="#"><div class="hexagon"><i class="fa fa-angle-double-down"></i></div></a>';
            echo '</div>';

						elseif( get_row_layout() == 'hero_convert' ):

	            $image = get_sub_field('background_image');
	            $hero_top_text = get_sub_field('hero_top_text');
	            $hero_bottom_text = get_sub_field('hero_bottom_text');

							echo '<div class="home-hero convert" style="background-image:url(' . $image . ');">';
	  						echo '<span><h1>' . $hero_top_text . '</h1>';
	              echo '<p>' . $hero_bottom_text . '</p></span>';
	              //echo '<a href="#"><div class="hexagon"><i class="fa fa-angle-double-down"></i></div></a>';
								echo '<div class="right">' . do_shortcode('[contact-form-7 id="200" title="Contact form convert"]') . '</div>';
	            echo '</div>';

						elseif( get_row_layout() == 'hero_donate' ):

	            $image = get_sub_field('background_image');
	            $hero_top_text = get_sub_field('hero_top_text');
	            $hero_bottom_text = get_sub_field('hero_bottom_text');

							echo '<div class="home-hero convert" style="background-image:url(' . $image . ');">';
	  						echo '<span><h1>' . $hero_top_text . '</h1>';
	              echo '<p>' . $hero_bottom_text . '</p></span>';
	              //echo '<a href="#"><div class="hexagon"><i class="fa fa-angle-double-down"></i></div></a>';
								echo '<div class="r">' . do_shortcode('[give_form id="187"]') . '</div>';
	            echo '</div>';


            elseif( get_row_layout() == 'third_blocks' ):
							$slant 		= get_sub_field('slant');
							if ($slant == "Bottom"){
								echo '<style>
								#thirds::before {
									    bottom: 0;
									    content: "";
									    display: block;
									    height: 55px;
									    left: 0;
									    position: absolute;
									    right: 0;
									    -webkit-transform: skewY(-1.5deg);
									    transform: skewY(-1.5deg);
									    -webkit-transform-origin: 100%;
									    transform-origin: 100%;
									    z-index: 99999999;
									    background: #fff;
									}
								</style>
							 '
							 ;
						 }

                // check if the repeater field has rows of data
                if( have_rows('third_blocks') ):

                 	echo '<div id="thirds">';
									echo '<div class="container">';

                  $i = 0;
                    while ( have_rows('third_blocks') ) : the_row();

                      $i++;
                        $color    = get_sub_field('color');
                        $icon     = get_sub_field('icon');
                        $heading  = get_sub_field('heading');
                        $text     = get_sub_field('text');
                        $btn_text = get_sub_field('button_text');
                        $btn_link = get_sub_field('button_link');




                        echo '<div class="four columns">
                        <i style="color:' . $color . '" class="fa ' . $icon . '"></i>
                        <h2 style="color:' . $color . '">' . $heading . '</h2>
                        <p>' . $text . '</p>
                        <a class="button ' . $i . '" style="background-color:' . $color . ';" href="' . $btn_link . '">' . $btn_text . '</a>';


                        echo '</div>';
                        echo '<style>.button.\3' . $i . '::after{border-color:transparent transparent transparent ' . $color . ';}</style>';
                        echo '<style>.button.\3' . $i . '::before{border-color: ' . $color . '; color: ' . $color . ';}</style>';

                    endwhile;
                    echo '</div></div>';
                else :

                    // no rows found

                endif;



              elseif( get_row_layout() == 'donate_section' ):

                $image = get_sub_field('background_image');
                $top_text = get_sub_field('heading');
                $bottom_text = get_sub_field('text');

                echo '<div class="home-donate" style="background-image:url(' . $image . ');">';
      						echo '<span><h2>' . $top_text . '</h2>';
                  echo '<p>' . $bottom_text . '</p>';
                  echo '<a href="#" class="button ghost">Give monthly</a>';
                  echo '<a href="#" class="button ghost">Give once</a></span>';
                echo '</div>';

                elseif( get_row_layout() == 'newsletter' ):

                  if(get_sub_field('display') == 1 ):
                    echo '<div class="newsletter"><div class="container"><h2>SIGN UP</h2><form><input type="text" placeholder="Name"></input><input type="email" placeholder="Email"></input><input type="submit"></input></form></div></div>';
                  endif;

                elseif( get_row_layout() == 'info_block' ):

                  $image = get_sub_field('image');
                  $top_text = get_sub_field('heading');
                  $bottom_text = get_sub_field('subheading');
                  $text = get_sub_field('text');
									$color = get_sub_field('color');
									$Background_color = get_sub_field('background_color');
									$lor = get_sub_field('content_left_or_right');
									$btn_link = get_sub_field('button_link');
									$bg_image = get_sub_field('background-image');




										if ($lor == 'Right') {
											if(!empty($bg_image)){
												echo '<div class="info-block img-bg right" style="background-image:url(' . $bg_image . ');">';
										} elseif(!empty($Background_color)){ echo '<div class="info-block right" style="background-color:' . $Background_color . ';">';} else { echo '<div class="info-block">'; }
											echo '<div class="container">';
											echo '<div class="six columns">';
											echo '<img src="' . $image . '">';
											echo '</div>';
											echo '<div class="six columns">';
											echo '<h2>' . $top_text . '</h2>';
											echo '<p class="sub">' . $bottom_text . '</p>';
											echo $text;
                      echo '</div></div></div>';

										}

										else {
											?>

											<?php
											if(!empty($bg_image)){
												echo '<div class="info-block img-bg left" style="background-image:url(' . $bg_image . ');">';
										} else { echo '<div class="info-block">'; }
											echo '<div class="container">';
											echo '<div class="six columns">';
											echo '<span><h2>' . $top_text . '</h2>';
											echo '<p class="sub">' . $bottom_text . '</p>';
											echo $text . '</span>';
											echo '</div>';
											echo '<div class="six columns">';
											echo '<img src="' . $image . '">';
											echo '</div></div></div>';
										}

                  elseif( get_row_layout() == 'rainmaker_is' ):

                    $firstimage = get_sub_field('first_background');
                    $secondimage = get_sub_field('second_background');
                    $thirdimage = get_sub_field('third_background');

                    $firsttext = get_sub_field('first_text');
                    $secondtext = get_sub_field('second_text');
                    $thirdtext = get_sub_field('third_text');

                    echo '<div class="rain-is">';

                      echo '<h2>A RAINMAKER is...</h2>';

                      echo '<div class="four columns" style="background-image:url(' . $firstimage . ');"><p>' . $firsttext . '</p></div>';
                      echo '<div class="four columns" style="background-image:url(' . $secondimage . ');"><p>' . $secondtext . '</p></div>';
                      echo '<div class="four columns" style="background-image:url(' . $thirdimage . ');"><p>' . $thirdtext . '</p></div>';

                    echo '</div>';
				 		endif;



/*








				elseif( get_row_layout() == 'small_text_block' ):

					echo '<div class="small-text-block">';
	        	echo '<h2>' . get_sub_field('heading') . '</h2>';
						echo '<p>' . get_sub_field('text') . '</p>';
					echo '</div>';








					elseif( get_row_layout() == 'information_block' ): ?>

						<div class="info-block">
							<div class="row">
								<div class = "six columns">
			        	<?php echo '<h2>' . get_sub_field('heading') . '<span></span></h2>';
											echo '<h3>' . get_sub_field('sub-heading') . '</h3>';
											echo '<p>' . get_sub_field('text') . '</p>';
											echo '<a class="button" href="' . get_sub_field('button_link') . '">LEARN MORE</a>'; ?>
							</div>
							<div class = "six columns" style="background-image: url(<?php the_sub_field('image'); ?>);">

							</div>
						</div>
					</div>

					<?php

*/

  endwhile;

endif;



?>
</article><!-- #post-## -->
</div>
