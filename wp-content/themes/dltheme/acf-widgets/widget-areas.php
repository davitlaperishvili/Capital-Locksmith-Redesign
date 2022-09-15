
   <?php  
        $section_title = get_sub_field('section_title'); 
        $section_subtitle = get_sub_field('section_subtitle'); 
        $section_text = get_sub_field('section_text'); 
        $areas_list = get_sub_field('areas_list');
        $rowIndex = get_row_index();
    ?>
    <section class="areas" id="content<?php echo $rowIndex ?>">
        <div class="container">
            <div class="section_left">
                <h2 class="section_title"><?php echo $section_title ?></h2>
                <div class="subtitle"><?php echo $section_subtitle ?></div>
                <div class="section_text"><?php echo $$section_text ?></div>
            </div>
            <div class="section_right">
                <ul>
                    <?php
                        foreach($areas_list as $area) {
                            ?>
                                <li>
                                    <a href="<?php echo $area['area_url'] ?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/pin.png" alt="">
                                        <span><?php echo $area['area_title'] ?></span>
                                    </a>
                                </li>
                            <?php
                        }
                    ?>
                </ul>
            </div>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/images/map.png" alt="">
            </figure>
        </div>
    </section>

