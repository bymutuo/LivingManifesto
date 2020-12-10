=== wdii ===
Contributors: Pedro Amado and the class of WD502 2018 students @ FBAUP
Requires at least: WordPress 4.7
Tested up to: WordPress 5.0-trunk
Version: 0.5 beta 2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: no columns, sidebar, blank template, minimum files


== Description ==
Blank template to be used as a Wordpress induction for the development of the MEA website design. No images. Minimum files. The template parts have been "dumbed down" to provide a smoother learning theme design curve.

The header, sidebar & footer have been merged & repeated into all the php template files. Not using components, nor the standard template file hierarchy( yet?). All the features and Wordpress tags are mainly developed (and documented) in the index.php file.  

Features include:

Header
- A main menu in the header
- A special query to list/filter specific category links from a parent category (special-cats ul)* in the header section;

Main section
- A personalised query to "call" a post or a page by ID before the main posts loop/list (optional-static-post section) in the main section;
- A loop with the standard classes, meta, feature image (set in the functions.php) & excerpt before content (loop section) in the main section.
- The loop section has an optional override to set and display a fixed set of posts
- After the loop, this template includes a second loop that can filter posts from a specific category (category-
filters);

Aside section
- search form;
- secondary menu location (registered in the functions);
- page list;
- full category list;
- archives;
- third menu location;
 
Finally, as an extra, a special script that allows to click on a category list item (not the link) to display only the items from that category
* this is meant to be used with the filtered category query form the header

== Installation ==
1. In your admin panel, go to Appearance -> Themes and click the 'Add New' button.
2. Type in wdii in the search form and press the 'Enter' key on your keyboard.
3. Click on the 'Activate' button to use your new theme right away.
4. Inspect the code, analyse the tags, ids & classes and customize the CSS
5. Go to https://developer.wordpress.org/themes/basics/template-files/ for a more in-depth explanation on how the files and functions are linked and called upon. For a complete list of PHP tags to add / to customize this theme go to: https://codex.wordpress.org/Template_Tags on how

== Copyright ==
Pedro Amado, FBAUP, 2018

== Changelog ==

= 0.1 =
* Released: October 11, 2018

= 0.2 =
* Updated CSS and date functions during class: October 11, 2018

= 0.3 =
* Released: October 15, 2018.
* Updated CSS
* Added functions.php file with the Widgets & Post Thumbnails functionality (posts that have the feature image now correctly show them in the main loop)
* Added a more complete date to posts
* Added Widgets area editor (dashboard) & widgets section in <aside>
* Added 1 post or page query before the main loop
* Added previous & next pagination buttons in posts

= 0.4 =
* Released: October 25, 2018.
* Added a custom hardcoded maximum number of posts to display in the loop (index.php)
* Added a "secondary", "third" and "additional" menu areas registry inside the aside.
* Added a general and specific category pages
* Added an additional widgets area [in the footer]

= 0.5 =
* Released: November 9, 2018.
* Added a secondary loop to show X posts from a specific Y category
* Added a filtered lists of specific categories from a specific parent category
* Added a JS script to filter the specific posts from the category clicked on the page

