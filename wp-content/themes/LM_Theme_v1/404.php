<!DOCTYPE html>
<html <?php language_attributes(); ?> >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!--        Get your styles mess only with the filename.css here (down)-->
        <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
        
        <!--        Don't mess with this one-->
        <?php wp_head(); ?>
        
    </head>
    
    <body>

        <header id="fourofour-header">
            <h1>
                <!-- Blog root/home link. Don't mess with this one-->
                <a href="<?php echo get_home_url(); ?>">
                    
                    <!-- Blog title. Don't mess with this one-->
                    <?php bloginfo( 'name' ); ?>
                    </a>
                </h1>
            
            
            <p> 
                <!-- Blog tagline. Don't mess with this one-->
                <?php bloginfo( 'description' ); ?>
                </p>
            
            <nav>
                <h2> Navigation </h2>
                
                <!-- Navigation menu. Don't mess with this one-->
                <?php wp_nav_menu(); ?>
            </nav>
            
        </header>
        
        <main id="fourofour-main">
            <section>
                <h1>Ups… Sorry. Something is missing here… Please go back or search for a different thing.
                </h1>
            </section>
            
            <aside>
                <?php get_sidebar(); ?>
                
                <?get_search_form(); ?>
            </aside>
        </main>
        
       
        
        <footer id="fourofour-footer">
            
            <!--    Set your static elements here   -->
            <section> 
                <h1>Footer section</h1>
                <p>Set your static information, eg. design credits, or static links here</p>
            </section>
            
            <!-- Editable footer elements. Don't mess with this one-->
            <?php wp_footer(); ?>
            
        </footer>
        
    </body>
    
</html>