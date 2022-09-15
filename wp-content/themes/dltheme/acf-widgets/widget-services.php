
   <?php  
        $section_title = get_sub_field('section_title'); 
        $section_subtitle = get_sub_field('section_subtitle'); 
        $services_list = get_sub_field('services_list');
        $rowIndex = get_row_index();
    ?>
    <section class="services" id="content<?php echo $rowIndex ?>">
        <div class="container">
            <div class="section_wrap">
                <h2 class="section_title center"><?php echo $section_title ?></h2>
                <h3 class="subtitle white center"><?php echo $section_subtitle ?></h3>
                <div class="services_list">
                    <?php 
                        foreach($services_list as $service){
                            ?>
                                <div class="service_item">
                                    <figure>
                                        <img src="<?php echo $service['service_image']['url'] ?>" alt="<?php echo $service['service_image']['alt'] ?>">
                                    </figure>
                                    <div class="service_title"><?php echo $service['service_title'] ?></div>
                                    <div class="service_desc"><?php echo $service['service_text'] ?></div>
                                </div>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>

