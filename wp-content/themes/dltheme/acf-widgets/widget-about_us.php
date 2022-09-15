
   <?php  
        $section_title = get_sub_field('section_title'); 
        $section_subtitle = get_sub_field('section_subtitle'); 
        $section_text = get_sub_field('section_text'); 
        $section_button_text = get_sub_field('section_button_text');
        $section_button_url = get_sub_field('section_button_url');
        $section_slider = get_sub_field('section_slider');
        $section_list = get_sub_field('section_list');
        $rowIndex = get_row_index();
    ?>
    <section class="about_us" id="content<?php echo $rowIndex ?>">
        <div class="container">
            <div class="about_wrap">
                <div class="about_left">
                    <div class="about_slider swiper">
                        <div class="swiper-wrapper">
                            <?php 
                                foreach($section_slider as $slide){
                                    ?>
                                        <div class="swiper-slide">
                                            <figure>
                                                <img src="<?php echo $slide['slide_image']['url'] ?>" alt="<?php echo $slide['slide_image']['alt'] ?>">
                                                <figcaption><?php echo $slide['slide_text'] ?></figcaption>
                                            </figure>
                                        </div>
                                    <?php
                                }
                            ?>
                        </div>
                        <div class="swiper_natigation">
                            <div class="swiper-button-prev swiper_arrow"></div>
                            <div class="swiper-button-next swiper_arrow"></div>
                        </div>
                    </div>
                </div>
                <div class="about_right">
                    <h2 class="section_title"><?php echo $section_title ?></h2>
                    <h3 class="subtitle"><?php echo $section_subtitle ?></h3>
                    <div class="section_text"><?php echo $section_text ?></div>
                    <div class="section_list">
                        <ul>
                            <?php 
                                foreach($section_list as $item) {
                                    ?>
                                        <li><?php echo $item['list_text'] ?></li>
                                    <?php
                                }
                            ?>
                        </ul>
                    </div>
                    <?php 
                        if($section_button_url){
                            ?>
                                <div class="section_buttons">
                                    <div class="theme_button black">
                                        <a href="<?php echo $section_button_url ?>">
                                            <i class="ri-time-fill"></i>
                                            <span><?php echo $section_button_text ?></span>
                                        </a>
                                    </div>
                                </div>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>

