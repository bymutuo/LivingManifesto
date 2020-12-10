<!DOCTYPE html>
<html <?php language_attributes(); ?> >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!--        Get your styles mess only with the filename.css here (down)-->
        <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
        
        <!--        Don't mess with this one-->
        <?php wp_head(); ?>
        
        
        <script src="wp-content/themes/Blank Theme/js/jquery-3.5.1.min.js"></script>
    </head>
    
    <body>

        <header id="page-header">
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
                <!-- Navigation menu. Don't mess with this one-->
                <?php wp_nav_menu(); ?>
            </nav>
            
        </header>
        
        <main id="page-main">
            <section>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="single-page">
                    <h2 class="page-title">
                        <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                                </a>     
                            </h2>
                        
                        <section class="page-meta">
                            
                            <!-- Post date -->
                            <div class="post-time">
                                    <?php the_date(); ?>, at <?php the_time(); ?>
                                </div>
                        
                            <div class="page-author">
                                <a href="<?php the_author_link();?>">
                                    <?php the_author(); ?>
                                    </a>
                                </div>

                            <div class="page-categories">
                                    <?php the_category(); ?>
                                </div>
                            
                            <div class="page-tags">
                                    <?php the_tags(); ?>
                                </div>
                        
                        </section>
                        
                        <!-- Page content -->
                        <section class="page-content">
                                <?php the_content(); ?>
                            </section>
                    
                        
                             
                    </article>
                <?php endwhile; endif; ?>
            </section>
            
            
        </main>
        
        <!--cursor-->
        <div id="cursor">
            <img src="wp-content/themes/Blank Theme/cursor_2.svg">
        </div>

        <script src="wp-content/themes/Blank Theme/js/main.js"></script>
        
    </body>
    
</html>