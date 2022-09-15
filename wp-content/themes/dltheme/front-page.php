<?php 
    //Template Name: Front Page
?>
<?php get_header(); ?>
<?php 
	$phoneVisible = get_field('phone_number', 'option');
	$phone = preg_replace("/[^0-9]/", "", $phoneVisible);
	$email = get_field('email', 'option');
	$workingHours = get_field('workingHours', 'option');
	$address = get_field('address', 'option');
	
?>
<main class="home_page">
    <?php 
        if( have_rows('sections') ):

            // Loop through rows.
            while ( have_rows('sections') ) : the_row();
        
                // Case: Paragraph layout.
                if( get_row_layout() == 'hero' ):
                    include(TEMPLATEPATH.'/acf-widgets/widget-hero.php');
                
                elseif( get_row_layout() == 'about_us' ):
                    include(TEMPLATEPATH.'/acf-widgets/widget-about_us.php');
                
                elseif( get_row_layout() == 'services' ):
                    include(TEMPLATEPATH.'/acf-widgets/widget-services.php');
                
                elseif( get_row_layout() == 'benefits' ):
                    include(TEMPLATEPATH.'/acf-widgets/widget-benefits.php');
                
                elseif( get_row_layout() == 'reviews' ):
                    include(TEMPLATEPATH.'/acf-widgets/widget-reviews.php');

                elseif( get_row_layout() == 'areas' ):
                    include(TEMPLATEPATH.'/acf-widgets/widget-areas.php');

                elseif( get_row_layout() == 'contact_us' ):
                    include(TEMPLATEPATH.'/acf-widgets/widget-contact_us.php');

                elseif( get_row_layout() == 'banner' ):
                    include(TEMPLATEPATH.'/acf-widgets/widget-banner.php');

                endif;
            endwhile;
        
        else :
        endif;
    ?>
</main>

<?php get_footer(); ?>