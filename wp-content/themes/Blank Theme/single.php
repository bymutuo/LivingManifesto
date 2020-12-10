<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--        Get your styles mess only with the filename.css here (down)-->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">

    <!--        Don't mess with this one-->
    <?php wp_head(); ?>

    <script src="../../../../wp-content/themes/Blank Theme/js/jquery-3.5.1.min.js"></script>
</head>
    
<body>

    <header id="loop-header">

    <span id="burger-button">
        <svg x="0px" y="0px" viewBox="0 0 74.7 74.7" xml:space="preserve">
            <g>
                <circle cx="63.3" cy="11.4" r="11.4"/>
                <circle cx="63.3" cy="63.3" r="11.4"/>
                <circle cx="11.4" cy="63.3" r="11.4"/>
                <circle cx="11.4" cy="11.4" r="11.4"/>
            </g>
        </svg>
    </span>
        
    <nav>
        <h1 id="header-lettering">
            <!-- Blog root/home link. Don't mess with this one-->
            <a href="<?php echo get_home_url(); ?>">
                <!-- Blog title. Don't mess with this one-->
                <?php bloginfo( 'name' ); ?>
            </a>
        </h1>
        
        <!-- Navigation menu. Don't mess with this one-->
        <?php wp_nav_menu(); ?>
    </nav>

    </header>
        
    <main id="post-main">
        

        
        <section>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="single-post">
                <h2 class="post-title">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>     
                </h2>
                
                <div class="post-tags">
                    <?php the_tags(); ?>
                </div>

                <section class="post-content">
                    <?php the_content(); ?>
                </section>

                <!-- This adds a section with a previous and next posts links --> 
                <section class="paginator">
                    <p>
                        <?php previous_post_link( '%link', 'Previous post in category', TRUE ); ?> 
                        <?php next_post_link( '%link', 'Next post in category', TRUE ); ?>
                    </p>
                </section>
            </article>

            <?php endwhile; endif; ?>
        </section>
    </main>

    <!--cursor-->
    <div id="cursor">
        <img src="../../../../wp-content/themes/Blank Theme/cursor_2.svg">
    </div>

    <script src="../../../../wp-content/themes/Blank Theme/js/main.js"></script>
</body>

</html>