
   <?php  
        $banner_title = get_sub_field('banner_title'); 
        $banner_text = get_sub_field('banner_text'); 
        $banner_bg_image = get_sub_field('banner_bg_image'); 
        $banner_first_button_text = get_sub_field('banner_first_button_text');
        $banner_first_button_url = get_sub_field('banner_first_button_url');
        $banner_second_button_text = get_sub_field('banner_second_button_text');
        $banner_second_button_url = get_sub_field('banner_second_button_url');
        $rowIndex = get_row_index();
    ?>
    <section class="banner" id="content<?php echo $rowIndex ?>">
        <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/banner.jpg" alt="">
        </figure>
        <div class="container">
            <h3 class="banner_title"><?php echo $banner_title ?></h3>
            <div class="section_text center"><?php echo $banner_text ?></div>
            <?php 
                if($banner_first_button_url || $banner_second_button_url){
                    ?>
                    <div class="section_buttons center">
                        
                        <?php 
                            if($banner_first_button_url){
                                ?>
                                    <div class="theme_button black oblique_right">
                                        <a href="<?php echo $banner_first_button_url ?>"><?php echo $banner_first_button_text ?></a>
                                    </div>
                                <?php
                            }
                            if($banner_second_button_url){
                                ?>
                                    <div class="theme_button text">
                                        <a href="<?php echo $banner_second_button_url ?>">
                                            <i class="ri-arrow-right-line"></i>
                                            <span><?php echo $banner_second_button_text ?></span>
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
    </section>

