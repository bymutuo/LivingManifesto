<!DOCTYPE html>
<html <?php language_attributes(); ?> >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Get your styles. Change only with the "filename.css" -->
        <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
        
        <!-- Meta(s). Don't mess with this one https://codex.wordpress.org/Meta_Tags_in_WordPress-->
        <meta name="description" content="<?php bloginfo('description'); ?>" />
        
        <!-- Don't mess with this one-->
        <?php wp_head(); ?>
        
    </head>
    
    <body>

        <header id="category-header">
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

        
        
        <main id="category-main">
            
            <!-- Remove this. Title of the general category page -->
                <!-- More info: https://codex.wordpress.org/Category_Templates -->
            <h1> General Categories Page </h1>
            
                
            <section class="loop">
                                
                <!-- Loop. Lists all the posts configured in admin panel. Don't mess with this one-->
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                
                    <article class="post">
                        
                        <!-- Title of post & link -->
                        <h2 class="post-title">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                                </a>     
                            </h2>
                        
                        <section class="post-meta">
                            
                            <!-- Post image thumbnail : you can configure/add thumbnails to posts in the featured image (bottom right) of the editor -->
                            <div class="post-thumbnail">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                                <?php the_post_thumbnail(); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            
                            <!-- Post date -->
                            <div class="post-time">
                                    <?php the_date(); ?>, at <?php the_time(); ?>
                                </div>
                            
                            <!-- Post author -->
                            <div class="post-author">
                                <a href="<?php the_author_link();?>">
                                    <?php the_author(); ?>
                                    </a>
                                </div>
                            
                            <!-- Post category, or list of categories -->
                            <div class="post-categories">
                                    <?php the_category(); ?>
                                </div>
                            
                             <!-- Post tag, or list of tags -->
                            <div class="post-tags">
                                    <?php the_tags(); ?>
                                </div>
                        
                             <!-- Post text preview if inserted/available -->
                            <div class="post-excerpt">
                                    <?php the_excerpt(); ?>
                                </div>
                        
                        </section>
                        
                        <!-- Post content-->
                        <section class="post-content">
                                <?php the_content(); ?>
                            </section>
                        
                        
                    </article>
                <?php endwhile; endif; ?>
                
            </section>
            
            <aside>
                <!-- This is to activate the search form in the site-->
                <?php get_search_form(); ?>
                
                <!-- This creates an area and displays a secondary menu (activated in functions) -->
                    <!-- More info: https://premium.wpmudev.org/blog/add-menus-to-wordpress/ -->
                    <!-- Remove it if you do not need additional menus --> 
                <?php
                    wp_nav_menu( array( 'theme_location' => 'second-menu', 'container_class' => 'second_menu_class' ) ); 
                ?>
                
                <!-- This creates a block that "lists" the available pages in the sidebar menu: migrate this later to sidebar.php-->
                <!-- more info: https://codex.wordpress.org/Customizing_Your_Sidebar -->
                <h2>Pages</h2>
                <?php wp_list_pages(); ?>
                
                <!-- This creates a block that "lists" the available categories-->
                <!-- more info on templates and categories https://codex.wordpress.org/Stepping_Into_Template_Tags -->
                <h2>Categories</h2>
                    <?php wp_list_categories(); ?>
                
                <!-- This creates a block that "lists" the available posts by month in cronological order -->
                <h2>Archives</h2>
                <?php wp_get_archives(); ?>
                
                <!-- This creates a Blogroll. Links manager needs to be installed: https://wordpress.org/plugins/link-manager/ -->
                <?php get_links_list(); ?>
                
                <!-- On the bottom of the aside, or on other desired area you can add the following code to display ONE widgets area-->
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Widgets") ) : ?>
                <?php endif;?>
                
                <!-- This creates an area and displays a third menu (activated in functions) -->
                    <!-- More info: https://premium.wpmudev.org/blog/add-menus-to-wordpress/ -->
                    <!-- Remove it if you do not need additional menus --> 
                <?php
                    wp_nav_menu( array( 'theme_location' => 'third-menu', 'container_class' => 'third_menu_class' ) ); 
                ?>
                
            </aside>
        </main>
        
       
        
        <footer id="category-footer">
            
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