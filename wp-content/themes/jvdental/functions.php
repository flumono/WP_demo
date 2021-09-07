<?php
/**
 * jvdental functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package jvdental
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'jvdental_com_ua_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function jvdental_com_ua_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on jvdental, use a find and replace
		 * to change 'jvdental-com-ua' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'jvdental-com-ua', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
    //REGISTER MENU
		register_nav_menus(
			array(
				'menu-header' => esc_html__( 'Header menu', 'jvdental-com-ua' ),
        //  'topmenu' => 'Header menu',
        'footermenu' => 'Footer menu'
			)
		);



		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'jvdental_com_ua_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'jvdental_com_ua_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function jvdental_com_ua_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'jvdental_com_ua_content_width', 640 );
}
add_action( 'after_setup_theme', 'jvdental_com_ua_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function jvdental_com_ua_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Google reviews', 'jvdental-com-ua' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Настройки виджета google отзывов.', 'jvdental-com-ua' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'jvdental_com_ua_widgets_init' );

function jvdental_com_ua_widgets_init_2() {
  register_sidebar(
    array(
      'name'          => esc_html__( 'Facebook reviews', 'jvdental-com-ua' ),
      'id'            => 'sidebar-2',
      'description'   => esc_html__( 'Настройки виджета facebook отзывов.', 'jvdental-com-ua' ),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    )
  );
}
add_action( 'widgets_init', 'jvdental_com_ua_widgets_init_2' );

/**
 * Enqueue scripts and styles.
 */
function jvdental_com_ua_scripts() {
	wp_enqueue_style( 'jvdental-com-ua-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'jvdental-com-ua-style', 'rtl', 'replace' );

	wp_enqueue_script( 'jvdental-com-ua-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'jvdental_com_ua_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

if (function_exists('acf_add_options_page')) {

  acf_add_options_page(array(
    'page_title' => 'Настройки сайта',
    'menu_title' => 'Настройки сайта',
    'menu_slug' => 'theme-general-settings',
    'capability' => 'edit_posts',
    'redirect' => false
  ));

//  acf_add_options_sub_page(array(
//    'page_title' => 'Theme Header Settings',
//    'menu_title' => 'Header',
//    'parent_slug' => 'theme-general-settings',
//  ));

//  acf_add_options_sub_page(array(
//    'page_title' => 'Theme Footer Settings',
//    'menu_title' => 'Footer',
//    'parent_slug' => 'theme-general-settings',
//  ));

}



pll_register_string('wait', 'ждем вас', 'ACF');
pll_register_string('makecallback', 'Заказать звонок', 'ACF');
pll_register_string('before', 'до', 'ACF');
pll_register_string('after', 'после', 'ACF');
pll_register_string('wantto', 'Хочу так же!', 'ACF');
pll_register_string('stage', 'этап', 'ACF');
pll_register_string('fullprice', 'полный прайс', 'ACF');
pll_register_string('phone', 'телефон', 'ACF');
pll_register_string('adress', 'адрес', 'ACF');
pll_register_string('dopinfo', 'примечание', 'ACF');
pll_register_string('writeus', 'Напишите нам', 'ACF');
pll_register_string('education', 'Образование', 'ACF');
pll_register_string('workyear', 'Стаж роботы', 'ACF');
pll_register_string('doctorway', 'Работает в следующих направления', 'ACF');
pll_register_string('more', 'Раскрыть', 'ACF');
pll_register_string('less', 'Скрыть', 'ACF');
pll_register_string('doctoreducation', 'Врачебные дипломы и сертификаты', 'ACF');
pll_register_string('pricetitle', 'Наименование услуги', 'ACF');
pll_register_string('pricecost', 'Цена', 'ACF');
pll_register_string('details', 'Подробнее', 'ACF');
pll_register_string('readnews', 'Читать статью', 'ACF');
pll_register_string('showmore', 'Читать больше', 'ACF');
pll_register_string('ourpacients', 'Наши пациенты', 'ACF');
pll_register_string('ourcontacts', 'Наши контакты', 'ACF');
pll_register_string('reviewtitle', 'отзывы наших пациентов', 'ACF');
pll_register_string('havequestion', 'Есть вопросы?', 'ACF');
pll_register_string('weccalyou', 'Мы вам перезвоним!', 'ACF');
pll_register_string('consultchek', 'Запись на консультацию', 'ACF');
pll_register_string('weccalyoutime', '       Мы перезвоним, чтобы согласовать удобное время', 'ACF');
pll_register_string('nextnews', 'Следующая статья', 'ACF');
pll_register_string('contacttitle', 'наши контакты', 'ACF');

/*
 * "Хлебные крошки" для WordPress
 * автор: Dimox
 * версия: 2019.03.03
 * лицензия: MIT
*/
function dimox_breadcrumbs() {

  /* === ОПЦИИ === */
  $text['home']     = 'Главная'; // текст ссылки "Главная"
  $text['category'] = '%s'; // текст для страницы рубрики
  $text['search']   = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
  $text['tag']      = 'Записи с тегом "%s"'; // текст для страницы тега
  $text['author']   = 'Статьи автора %s'; // текст для страницы автора
  $text['404']      = 'Ошибка 404'; // текст для страницы 404
  $text['page']     = 'Страница %s'; // текст 'Страница N'
  $text['cpage']    = 'Страница комментариев %s'; // текст 'Страница комментариев N'

  $wrap_before    = '<div class="breadcrumbs" itemscope itemtype="https://schema.org/BreadcrumbList">'; // открывающий тег обертки
  $wrap_after     = '</div><!-- .breadcrumbs -->'; // закрывающий тег обертки
  $sep            = '<span class="breadcrumbs__separator"> </span>'; // разделитель между "крошками"
  $before         = '<span class="breadcrumbs__current">'; // тег перед текущей "крошкой"
  $after          = '</span>'; // тег после текущей "крошки"

  $show_on_home   = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
  $show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
  $show_current   = 1; // 1 - показывать название текущей страницы, 0 - не показывать
  $show_last_sep  = 1; // 1 - показывать последний разделитель, когда название текущей страницы не отображается, 0 - не показывать
  /* === КОНЕЦ ОПЦИЙ === */

  global $post;
  $home_url       = home_url('/');
  $link           = '<span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
  $link          .= '<a class="breadcrumbs__link" href="%1$s" itemprop="item"><span itemprop="name">%2$s</span></a>';
  $link          .= '<meta itemprop="position" content="%3$s" />';
  $link          .= '</span>';
  $parent_id      = ( $post ) ? $post->post_parent : '';
  $home_link      = sprintf( $link, $home_url, $text['home'], 1 );

  if ( is_home() || is_front_page() ) {

    if ( $show_on_home ) echo $wrap_before . $home_link . $wrap_after;

  } else {

    $position = 0;

    echo $wrap_before;

    if ( $show_home_link ) {
      $position += 1;
      echo $home_link;
    }

    if ( is_category() ) {
      $parents = get_ancestors( get_query_var('cat'), 'category' );
      foreach ( array_reverse( $parents ) as $cat ) {
        $position += 1;
        if ( $position > 1 ) echo $sep;
        echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
      }
      if ( get_query_var( 'paged' ) ) {
        $position += 1;
        $cat = get_query_var('cat');
        echo $sep . sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
        echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
      } else {
        if ( $show_current ) {
          if ( $position >= 1 ) echo $sep;
          echo $before . sprintf( $text['category'], single_cat_title( '', false ) ) . $after;
        } elseif ( $show_last_sep ) echo $sep;
      }

    } elseif ( is_search() ) {
      if ( get_query_var( 'paged' ) ) {
        $position += 1;
        if ( $show_home_link ) echo $sep;
        echo sprintf( $link, $home_url . '?s=' . get_search_query(), sprintf( $text['search'], get_search_query() ), $position );
        echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
      } else {
        if ( $show_current ) {
          if ( $position >= 1 ) echo $sep;
          echo $before . sprintf( $text['search'], get_search_query() ) . $after;
        } elseif ( $show_last_sep ) echo $sep;
      }

    } elseif ( is_year() ) {
      if ( $show_home_link && $show_current ) echo $sep;
      if ( $show_current ) echo $before . get_the_time('Y') . $after;
      elseif ( $show_home_link && $show_last_sep ) echo $sep;

    } elseif ( is_month() ) {
      if ( $show_home_link ) echo $sep;
      $position += 1;
      echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position );
      if ( $show_current ) echo $sep . $before . get_the_time('F') . $after;
      elseif ( $show_last_sep ) echo $sep;

    } elseif ( is_day() ) {
      if ( $show_home_link ) echo $sep;
      $position += 1;
      echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position ) . $sep;
      $position += 1;
      echo sprintf( $link, get_month_link( get_the_time('Y'), get_the_time('m') ), get_the_time('F'), $position );
      if ( $show_current ) echo $sep . $before . get_the_time('d') . $after;
      elseif ( $show_last_sep ) echo $sep;

    } elseif ( is_single() && ! is_attachment() ) {
      if ( get_post_type() != 'post' ) {
        $position += 1;
        $post_type = get_post_type_object( get_post_type() );
        if ( $position > 1 ) echo $sep;
        echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->labels->name, $position );
        if ( $show_current ) echo $sep . $before . get_the_title() . $after;
        elseif ( $show_last_sep ) echo $sep;
      } else {
        $cat = get_the_category(); $catID = $cat[0]->cat_ID;
        $parents = get_ancestors( $catID, 'category' );
        $parents = array_reverse( $parents );
        $parents[] = $catID;
        foreach ( $parents as $cat ) {
          $position += 1;
          if ( $position > 1 ) echo $sep;
          echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
        }
        if ( get_query_var( 'cpage' ) ) {
          $position += 1;
          echo $sep . sprintf( $link, get_permalink(), get_the_title(), $position );
          echo $sep . $before . sprintf( $text['cpage'], get_query_var( 'cpage' ) ) . $after;
        } else {
          if ( $show_current ) echo $sep . $before . get_the_title() . $after;
          elseif ( $show_last_sep ) echo $sep;
        }
      }

    } elseif ( is_post_type_archive() ) {
      $post_type = get_post_type_object( get_post_type() );
      if ( get_query_var( 'paged' ) ) {
        $position += 1;
        if ( $position > 1 ) echo $sep;
        echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->label, $position );
        echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
      } else {
        if ( $show_home_link && $show_current ) echo $sep;
        if ( $show_current ) echo $before . $post_type->label . $after;
        elseif ( $show_home_link && $show_last_sep ) echo $sep;
      }

    } elseif ( is_attachment() ) {
      $parent = get_post( $parent_id );
      $cat = get_the_category( $parent->ID ); $catID = $cat[0]->cat_ID;
      $parents = get_ancestors( $catID, 'category' );
      $parents = array_reverse( $parents );
      $parents[] = $catID;
      foreach ( $parents as $cat ) {
        $position += 1;
        if ( $position > 1 ) echo $sep;
        echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
      }
      $position += 1;
      echo $sep . sprintf( $link, get_permalink( $parent ), $parent->post_title, $position );
      if ( $show_current ) echo $sep . $before . get_the_title() . $after;
      elseif ( $show_last_sep ) echo $sep;

    } elseif ( is_page() && ! $parent_id ) {
      if ( $show_home_link && $show_current ) echo $sep;
      if ( $show_current ) echo $before . get_the_title() . $after;
      elseif ( $show_home_link && $show_last_sep ) echo $sep;

    } elseif ( is_page() && $parent_id ) {
      $parents = get_post_ancestors( get_the_ID() );
      foreach ( array_reverse( $parents ) as $pageID ) {
        $position += 1;
        if ( $position > 1 ) echo $sep;
        echo sprintf( $link, get_page_link( $pageID ), get_the_title( $pageID ), $position );
      }
      if ( $show_current ) echo $sep . $before . get_the_title() . $after;
      elseif ( $show_last_sep ) echo $sep;

    } elseif ( is_tag() ) {
      if ( get_query_var( 'paged' ) ) {
        $position += 1;
        $tagID = get_query_var( 'tag_id' );
        echo $sep . sprintf( $link, get_tag_link( $tagID ), single_tag_title( '', false ), $position );
        echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
      } else {
        if ( $show_home_link && $show_current ) echo $sep;
        if ( $show_current ) echo $before . sprintf( $text['tag'], single_tag_title( '', false ) ) . $after;
        elseif ( $show_home_link && $show_last_sep ) echo $sep;
      }

    } elseif ( is_author() ) {
      $author = get_userdata( get_query_var( 'author' ) );
      if ( get_query_var( 'paged' ) ) {
        $position += 1;
        echo $sep . sprintf( $link, get_author_posts_url( $author->ID ), sprintf( $text['author'], $author->display_name ), $position );
        echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
      } else {
        if ( $show_home_link && $show_current ) echo $sep;
        if ( $show_current ) echo $before . sprintf( $text['author'], $author->display_name ) . $after;
        elseif ( $show_home_link && $show_last_sep ) echo $sep;
      }

    } elseif ( is_404() ) {
      if ( $show_home_link && $show_current ) echo $sep;
      if ( $show_current ) echo $before . $text['404'] . $after;
      elseif ( $show_last_sep ) echo $sep;

    } elseif ( has_post_format() && ! is_singular() ) {
      if ( $show_home_link && $show_current ) echo $sep;
      echo get_post_format_string( get_post_format() );
    }

    echo $wrap_after;

  }
} // end of dimox_breadcrumbs()


// remove pagination redirect
remove_action( 'template_redirect', 'redirect_canonical' );



// remove category from url
add_filter('user_trailingslashit', 'remcat_function');
function remcat_function($link) {
    return str_replace("/category/", "/", $link);
}

//
function my_pagination_rewrite() {
 add_rewrite_rule('([a-z]+)/page/?([0-9]{1,})/?$', 'index.php?category_name=$matches[1]&paged=$matches[2]', 'top');
}
add_action('init', 'my_pagination_rewrite');
