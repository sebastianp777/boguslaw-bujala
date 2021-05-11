<?php
/*
 *  Author: Todd Motto | @toddmotto
 *  URL: html5blank.com | @html5blank
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

// Load any external files you have here

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if (!isset($content_width)) {
    $content_width = 900;
}

if (function_exists('add_theme_support')) {
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

    // Add Support for Custom Backgrounds - Uncomment below if you're going to use
    /*add_theme_support('custom-background', array(
	'default-color' => 'FFF',
	'default-image' => get_template_directory_uri() . '/img/bg.jpg'
    ));*/

    // Add Support for Custom Header - Uncomment below if you're going to use
    /*add_theme_support('custom-header', array(
	'default-image'			=> get_template_directory_uri() . '/img/headers/default.jpg',
	'header-text'			=> false,
	'default-text-color'		=> '000',
	'width'				=> 1000,
	'height'			=> 198,
	'random-default'		=> false,
	'wp-head-callback'		=> $wphead_cb,
	'admin-head-callback'		=> $adminhead_cb,
	'admin-preview-callback'	=> $adminpreview_cb
    ));*/

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('html5blank', get_template_directory() . '/languages');
}

/*------------------------------------*\
	Functions
\*------------------------------------*/

// HTML5 Blank navigation
function html5blank_nav()
{
    wp_nav_menu(
        array(
            'theme_location' => 'header-menu',
            'menu' => '',
            'container' => 'div',
            'container_class' => 'menu-{menu slug}-container',
            'container_id' => '',
            'menu_class' => 'menu',
            'menu_id' => '',
            'echo' => true,
            'fallback_cb' => 'wp_page_menu',
            'before' => '',
            'after' => '',
            'link_before' => '',
            'link_after' => '',
            'items_wrap' => '<ul class="menu-list">%3$s</ul>',
            'depth' => 0,
            'walker' => ''
        )
    );

}
function html5blank_nav_footer()
{
    wp_nav_menu([
        'theme_location' => 'footer-menu',
        'menu_class' => 'footer-menu',
        'container' => 'ul',
    ]);
}

function html5blank_nav_footer_2()
{
    wp_nav_menu([
        'theme_location' => 'footer-menu-2',
        'menu_class' => 'footer-menu-2',
        'container' => 'ul'
    ]);
}

function html5blank_nav_mobile()
{
    wp_nav_menu([
        'theme_location' => 'mobile-menu',
        'menu_class' => 'mobile-menu menu',
        'container' => 'ul'
    ]);
}

function modify_jquery_version() {
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery',
            get_template_directory_uri() . '/js/jquery-3.5.1.min.js', false, '3.5.1');
        wp_enqueue_script('jquery');
    }
}
add_action('init', 'modify_jquery_version');


// Load HTML5 Blank scripts (header.php)
function html5blank_header_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

        wp_enqueue_script('swiper', get_template_directory_uri() . '/js/swiper.min.js', ['jquery'], false, true);

        wp_enqueue_script('lazy.load', get_template_directory_uri() . '/js/lib/jquery.lazy-master/jquery.lazy.min.js', ['jquery'], false, true);

        wp_enqueue_script('hush', get_template_directory_uri() . '/js/scripts.js', ['jquery'], false, true);
    }
}


// Load HTML5 Blank conditional scripts
function html5blank_conditional_scripts()
{
    if (is_page('pagenamehere')) {
        wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', array('jquery'), '1.0.0'); // Conditional script(s)
        wp_enqueue_script('scriptname'); // Enqueue it!
    }
}

// Load HTML5 Blank styles
function html5blank_styles()
{

    wp_register_style('swiper', get_template_directory_uri() . '/css/swiper.min.css', array(), '4.5.1', 'all');
    wp_enqueue_style('swiper'); // Enqueue it!

    wp_register_style('normalize', get_template_directory_uri() . '/normalize.css', array(), '1.0', 'all');
    wp_enqueue_style('normalize'); // Enqueue it!

    wp_register_style('html5blank', get_template_directory_uri() . '/style.css', array(), '1.0', 'all', filemtime(get_stylesheet_directory() . '/style.css'));

    wp_enqueue_style('html5blank'); // Enqueue it!

}

// Register HTML5 Blank Navigation
function register_html5_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'html5blank'), // Main Navigation
        'sidebar-menu' => __('Sidebar Menu', 'html5blank'), // Sidebar Navigation
        'extra-menu' => __('Extra Menu', 'html5blank'), // Extra Navigation if needed (duplicate as many as you need!)
        'footer-menu' => __('Footer Menu', 'html5blank'),
        'footer-menu-2' => __('Footer Menu 2', 'html5blank'),
        'mobile-menu' => __('Mobile Menu', 'html5blank'),
    ));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar')) {
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area 1', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Widget Area 2', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'posts_per_page' => 5,
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'next_text' => '<i class="fas fa-caret-right"></i>',
        'prev_text' => '<i class="fas fa-caret-left"></i>',
    ));
}

// Custom Excerpts
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 20;
}
add_filter( 'excerpt_length', 'html5wp_index', 999 );

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length)
{
    return 40;
}


// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}



function pixtricks_excerpt($post = ""){

    global $post;
    $output = wp_trim_words( get_the_content(), 50, '' );
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p class="loop-content-data__only-first">' . $output .'...</p>';
    return $output;
}



// Custom View Article link to Post
function html5_blank_view_article($more)
{
    global $post;
    return '...';
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions($html)
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function html5blankgravatar($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments()
{
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

// Custom Comments Callback
function html5blankcomments($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);

    if ('div' == $args['style']) {
        $tag = 'div';
        $add_below = 'comment';
    } else {
        $tag = 'li ';
        $add_below = 'div-comment';
    }
    ?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <<?php echo $tag ?><?php comment_class(empty($args['has_children']) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
    <?php if ('div' != $args['style']) : ?>
    <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
<?php endif; ?>
    <?php if ($comment->comment_approved == '0') : ?>
    <em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
    <br/>
<?php endif; ?>

    <div class="comment-meta commentmetadata">
    <a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)) ?>">
            <?php
            printf(__('%1$s'), get_comment_date(),
                get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'), '  ', '');
        ?>
        <?php printf(__('<cite class="fn">%s</cite>'), get_comment_author_link()) ?>
    </div>
    <div class="comment-text">
         <?php comment_text() ?>
    </div>
    <?php if ('div' != $args['style']) : ?>
    </div>
<?php endif; ?>
<?php }

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'html5blank_header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_print_scripts', 'html5blank_conditional_scripts'); // Add Conditional Page Scripts
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('wp_enqueue_scripts', 'html5blank_styles'); // Add Theme Stylesheet
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu
// add_action('init', 'create_post_type_html5'); // Add our HTML5 Blank Custom Post Type
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'html5blankgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

// Shortcodes
add_shortcode('html5_shortcode_demo', 'html5_shortcode_demo'); // You can place [html5_shortcode_demo] in Pages, Posts now.
add_shortcode('html5_shortcode_demo_2', 'html5_shortcode_demo_2'); // Place [html5_shortcode_demo_2] in Pages, Posts now.

// Shortcodes above would be nested like this -
// [html5_shortcode_demo] [html5_shortcode_demo_2] Here's the page title! [/html5_shortcode_demo_2] [/html5_shortcode_demo]

/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

// Create 1 Custom Post type for a Demo, called HTML5-Blank
function create_post_type_html5()
{
    register_taxonomy_for_object_type('category', 'html5-blank'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'html5-blank');
    register_post_type('html5-blank', // Register Custom Post Type
        array(
            'labels' => array(
                'name' => __('HTML5 Blank Custom Post', 'html5blank'), // Rename these to suit
                'singular_name' => __('HTML5 Blank Custom Post', 'html5blank'),
                'add_new' => __('Add New', 'html5blank'),
                'add_new_item' => __('Add New HTML5 Blank Custom Post', 'html5blank'),
                'edit' => __('Edit', 'html5blank'),
                'edit_item' => __('Edit HTML5 Blank Custom Post', 'html5blank'),
                'new_item' => __('New HTML5 Blank Custom Post', 'html5blank'),
                'view' => __('View HTML5 Blank Custom Post', 'html5blank'),
                'view_item' => __('View HTML5 Blank Custom Post', 'html5blank'),
                'search_items' => __('Search HTML5 Blank Custom Post', 'html5blank'),
                'not_found' => __('No HTML5 Blank Custom Posts found', 'html5blank'),
                'not_found_in_trash' => __('No HTML5 Blank Custom Posts found in Trash', 'html5blank')
            ),
            'public' => true,
            'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
                'excerpt',
                'thumbnail'
            ), // Go to Dashboard Custom HTML5 Blank post for supports
            'can_export' => true, // Allows export in Tools > Export
            'taxonomies' => array(
                'post_tag',
                'category'
            ) // Add Category and Post Tags support
        ));
}
/*------------------------------------*\
	ShortCode Functions
\*------------------------------------*/

// Shortcode Demo with Nested Capability
function html5_shortcode_demo($atts, $content = null)
{
    return '<div class="shortcode-demo">' . do_shortcode($content) . '</div>'; // do_shortcode allows for nested Shortcodes
}

// Shortcode Demo with simple <h2> tag
function html5_shortcode_demo_2($atts, $content = null) // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
{
    return '<h2>' . $content . '</h2>';
}

// Enable extended upload
function enable_extended_upload($mime_types = array())
{

    $mime_types['webp'] = 'image/webp';
    $mime_types['svg'] = 'image/svg+xml';
    $mime_types['ttf'] = 'application/x-font-opentype';

    return $mime_types;
}

add_filter('upload_mimes', 'enable_extended_upload');

/* Disable oEmbeds author name & author url ~ Stops Showing in embeds */
add_filter('oembed_response_data', 'disable_embeds_filter_oembed_response_data_');
function disable_embeds_filter_oembed_response_data_($data)
{
    unset($data['author_url']);
    unset($data['author_name']);
    return $data;
}


add_filter('jpeg_quality', function ($arg) {
    return 80;
});


function pm_remove_script_version($src)
{
    $parts = explode('?ver', $src);
    return $parts[0];
}

add_filter('script_loader_src', 'pm_remove_script_version', 15, 1);
add_filter('style_loader_src', 'pm_remove_script_version', 15, 1);


function is_blog () {
    return ( is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag()) && 'post' == get_post_type();
}

/*=============================================
            BREADCRUMBS
=============================================*/

function the_breadcrumb() {

    $sep = ' / ';

    if (!is_front_page()) {
        if(is_home()){
            echo '<div class="breadcrumbs">';
            echo '<h2>Blog</h2>';
            echo '<a href="';
            echo get_option('home');
            echo '">';
            ?><span class="brcrumb-span">Home</span><?php
            echo '</a>' . $sep;
            echo '<span class="title-span-down">Blog</span>';
            echo '</div>';
        }else if(is_category()){

            $titleBr = '';
            if(get_the_category()[0]->name){
                $titleBr = get_the_category()[0]->name;
            }else{
                $titleBr = '';
            }
            echo '<div class="breadcrumbs">';
            echo '<h2>Blog</h2>';
            echo '<a href="';
            echo get_option('home');
            echo '">';
            ?><span class="brcrumb-span">Home</span><?php
            echo '</a>' . $sep;
            echo '<a href="/blog/">';
            echo '<span class="brcrumb-span">Blog</span>';
            echo '</a>' . $sep;
            echo '<span class="title-span-down">' . $titleBr .'</span>';
            echo '</div>';
        }else{
            $titleBr = get_the_title();
            echo '<div class="breadcrumbs">';
            echo '<h2>' . $titleBr .'</h2>';
            echo '<a href="';
            echo get_option('home');
            echo '">';
            ?><span class="brcrumb-span">Home</span><?php
            echo '</a>' . $sep;
            echo '<span class="title-span-down">' . $titleBr .'</span>';
            echo '</div>';
        }
    }
}



function latest_post($atts = []) {

    global $post;
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    $wporg_atts = shortcode_atts([
                                   'current-post' => -1,
                                 ], $atts);
    $args = array(
        'posts_per_page' => 3,
        'offset' => 0,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => get_the_category($post)[0]->slug,
        'post__not_in' => [$post->ID],
    );
   ?>
		<div class="other-posts row desktop-flex">
			<?php
			$query = new WP_Query($args);
			if ($query->have_posts()) :
			while ($query->have_posts()) : $query->the_post(); ?>
				<div class="other-posts-ctr col-md-4">
				    <div class="post-thumbnail">
				        <a class="title-blog-posts" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full', array('class' => 'card-img-top')); ?></a>
				    </div>
				    <div class="entry-content">
					    <?php $category_id = (get_the_category($post->ID)[0]->term_id); ?>
						<a href="<?= get_category_link($category_id); ?>">
							<p class="category-post-info"><?= get_the_category($post->ID)[0]->name ?></p>
						</a>
                        <a class="title-blog-posts" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

                        <p class="post-content-exc"><?php the_excerpt(); ?></p>
				    </div>
				</div>
			<?php
            endwhile;
            wp_reset_postdata();
			endif; ?>
		</div>
<?php
}

add_shortcode('lastest-post', 'latest_post');


//Gutenberg color pallete customize
add_theme_support( 'editor-color-palette', array(
    array(
        'name' => esc_attr__( 'white', 'themeLangDomain' ),
        'slug' => 'white',
        'color' => '#fff',
    ),
    array(
        'name' => esc_attr__( 'almost white', 'themeLangDomain' ),
        'slug' => 'almost-white',
        'color' => '#fcfcfc',
    ),
    array(
        'name' => esc_attr__( 'light grayish purple', 'themeLangDomain' ),
        'slug' => 'light-grayish-purple',
        'color' => '#6D6875',
    ),
    // array(
    //     'name' => esc_attr__( 'grayish purple', 'themeLangDomain' ),
    //     'slug' => 'grayish-purple',
    //     'color' => '#716d77',
    // ),
    array(
        'name' => esc_attr__( 'purple', 'themeLangDomain' ),
        'slug' => 'purple',
        'color' => '#3f187e',
    ),
    array(
        'name' => esc_attr__( 'light gray', 'themeLangDomain' ),
        'slug' => 'light-gray',
        'color' => '#dedede',
    ),
    array(
        'name' => esc_attr__( 'gray', 'themeLangDomain' ),
        'slug' => 'gray',
        'color' => '#555',
    ),
    array(
        'name' => esc_attr__( 'dark gray', 'themeLangDomain' ),
        'slug' => 'dark-gray',
        'color' => '#4a4a4a',
    ),
    array(
        'name' => esc_attr__( 'black', 'themeLangDomain' ),
        'slug' => 'black',
        'color' => '#000',
    ),
) );

/**
 * Register support for Gutenberg wide images in your theme
 */
function mytheme_setup() {
    add_theme_support( 'align-wide' );
  }
  add_action( 'after_setup_theme', 'mytheme_setup' );

