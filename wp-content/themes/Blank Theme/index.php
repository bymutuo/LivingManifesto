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
    
    <script src="wp-content/themes/Blank Theme/js/jquery-3.5.1.min.js"></script>
</head>

<body>

    <header id="loop-header">
        
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



    <main id="loop-main">

        <section class="optional-static-post">
            <!-- Option before running the loop: You can show a post, or a page specifically by it's ID -->

            <!-- more information: https://www.tipsandtricks-hq.com/query-or-show-a-specific-post-in-wordpress-php-code-example-44 -->
            <!-- more information: https://developer.wordpress.org/reference/functions/get_post/ -->

            <!-- This can be used to display an editable "static" information on the Home -->
            <!-- the post ID can be seen by hovering / clicking on the post in the dashboard and inspecting the post=X in the URL  -->

            <?php 
                $post  = get_post( 82 );  /* <-- edit only this number: the ID of the Post or Page --> */

                $title =  apply_filters( 'the_title', $post->post_title ); // get the content of the post
                $content =  apply_filters( 'the_content', $post->post_content ); // get the content of the post

                /* You can use all these fields: [ID] [post_author] [post_date] [post_date_gmt] [post_content] [post_title] [post_excerpt] [post_status][comment_status][ping_status] [post_password] [post_name][to_ping] [pinged] [post_modified] [post_modified_gmt][post_content_filtered] [post_parent] [guid] [menu_order][post_type][post_mime_type] [comment_count] [filter] */

                echo '<h2>'.$title.'</h2>'; // The title wrapped in an H2 tag
                echo '<p>'.$content.'</p>'; // The content wrapped in a P tag
            ?>
        </section>

        <section class="loop">

            <!-- ———————————————————————————————————————————————————————————————————— -->
            <!-- Define the number of posts you want to display in the loop -->
            <!-- Go to WP-Admin > Settings > Reading > Blog pages show at most XX posts -->
            <!-- ———————————————————————————————————————————————————————————————————— -->
            <!-- Insert the following to change/hardcode the number of posts you want or need to display in the loop. 
            More info: https://pagecrafter.com/change-number-of-results-in-loop-wordpress/  & https://stackoverflow.com/questions/3875895/wordpress-loop-show-limit-posts-->
            <!-- ———————————————————————————————————————————————————————————————————— -->
            <!-- Remove this if you don't wan't to change the number of default posts -->
            <?php 
                global $query_string;
                query_posts( $query_string.'&showposts=3' ); /* <-- Edit this number. using "-1" will produce a loop of infinite posts */
            ?>
            <!-- ———————————————————————————————————————————————————————————————————— -->


            <!-- Loop. Lists all the posts configured in admin panel. Don't mess with this one-->
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <!-- Added WP classes to post -- credits to Hugo Sá for inputing this --
            While maintaining the original "post" class
            More info: https://digwp.com/2010/03/add-classes-to-post_class/
            --> 
            <article id="post-<?php the_ID(); ?>" <?php post_class('post') ?> >

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
                    
                </section>

                <!-- Post content-->
<!--
                <section class="post-content">
                    <?php the_content(); ?>
                </section>
-->


            </article>
            <?php endwhile; endif; ?>

        </section>

    </main>
    
    <script src="wp-content/themes/Blank Theme/js/main.js"></script>
    <script>

        // Função personalizada para apagar todos os posts com a class post
        function apaga() {
            var posts = document.getElementsByClassName("post"); // <-- edit this class name

            for (var i = 0; i < posts.length; i++) {
                posts[i].style.display = "none";

            }; 
        }

        // Função personalizada para mostrar  todos os posts com a class clicada
        function mostra(currentCat) {

            // seleciona todos os posts com a class clicada
            var catPosts = document.getElementsByClassName(currentCat);

            // para cada post, liga a visibilidade
            for (var j = 0; j < catPosts.length; j++) {

                catPosts[j].style.display = "block"; // <-- edit this display accordingly
            }    
        }


        /* get a list of all categories in the page */
        var cats = document.getElementsByClassName("cat-item"); 

        /* run a loop with all categories in the list */
        for (var i = 0; i < cats.length; i++) {

            /* add a function to each item of the categories (beware of the auto wp links)*/ 
            cats[i].onclick = function(e) {
                // erase the visibility of all articles with the class post 
                apaga();

                // get the clicked category text                    
                var str = this.textContent;
                // converto to lowercase
                var content =  str.toLowerCase();
                //concatenate the category into a WP category class name eg.: "category-name"
                var currentCat = "category-"+content;

                //Call a function to show the clicked name posts/entries with this class name
                mostra(currentCat);

            };
        }

    </script>
</body>

</html>