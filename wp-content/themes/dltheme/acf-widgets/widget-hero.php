
   <?php  
        $heroTitle = get_sub_field('hero_title'); 
        $heroSubTitle = get_sub_field('hero_subtitle'); 
        $hero_text = get_sub_field('hero_text'); 
        $hero_first_button_text = get_sub_field('hero_first_button_text');
        $hero_first_button_url = get_sub_field('hero_first_button_url');
        $hero_second_button_text = get_sub_field('hero_second_button_text');
        $hero_second_button_url = get_sub_field('hero_second_button_url');
        $rowIndex = get_row_index();
    ?>
    <section class="hero" id="content<?php echo $rowIndex ?>">
        <figure class="section_bg">
            <img src="<?php echo get_template_directory_uri(); ?>/images/hero_bg.jpg" alt="">
        </figure>
        <div class="container">
            <div class="hero_wrap">
                <div class="hero_text">
                    <div class="text_wrap">
                        <h1 class="page_title"><?php echo $heroTitle ?></h1>
                        <div class="page_subtitle"><?php echo $heroSubTitle ?></div>
                        <div class="section_text center"><?php echo $hero_text ?></div>
                        <?php 
                            if($hero_first_button_url || $hero_second_button_url){
                                ?>
                                    <div class="section_buttons center">
                                        <?php 
                                            if($hero_first_button_url){
                                                ?>
                                                    <div class="theme_button oblique_both gray">
                                                        <a href="<?php echo $hero_first_button_url?>"><?php echo $hero_first_button_text?></a>
                                                    </div>
                                                <?php
                                            }
                                        ?>
                                        <?php 
                                            if($hero_second_button_url){
                                                ?>
                                                    <div class="theme_button text black">
                                                        <a href="<?php echo $hero_second_button_url?>">
                                                            <i class="ri-arrow-right-line"></i>
                                                            <span>G<?php echo $hero_second_button_text?></span>
                                                        </a>
                                                    </div>
                                                <?php
                                            }
                                        ?>
                                    </div>
                                <?php
                            }
                        ?>
                    </div>
                </div>
                <figure class="car">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/car.png" alt="">
                </figure>
            </div>
        </div>
    </section>

