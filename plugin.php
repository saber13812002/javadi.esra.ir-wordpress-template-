<?php
/*
Plugin Name: PageTemplater JAVADI.ir
Description: This plugin add page-template to current Wp theme so when you want to create a main page hosseinilavasani.com 
Plugin URI: http://vrgl.ir/HLZWd
Version: 1398.10.28.01
Author: Saber Tabatabaee yazdi
Author URI: https://github.com/saber13812002/javadi.esra.ir-wordpress-template-
License: hosseinilavasani.com
*/

class PageTemplaterJAVADI
{

	/**
	 * A reference to an instance of this class.
	 */
	private static $instance;

	/**
	 * The array of templates that this plugin tracks.
	 */
	protected $templates;

	/**
	 * Returns an instance of this class.
	 */
	public static function get_instance()
	{

		if (null == self::$instance) {
			self::$instance = new PageTemplaterJAVADI();
		}

		return self::$instance;
	}

	/**
	 * Initializes the plugin by setting filters and administration functions.
	 */
	private function __construct()
	{

		$this->templates = array();


		// Add a filter to the attributes metabox to inject template into the cache.
		if (version_compare(floatval(get_bloginfo('version')), '4.7', '<')) {

			// 4.6 and older
			add_filter(
				'page_attributes_dropdown_pages_args',
				array($this, 'register_project_templates')
			);
		} else {

			// Add a filter to the wp 4.7 version attributes metabox
			add_filter(
				'theme_page_templates',
				array($this, 'add_new_template')
			);
		}

		// Add a filter to the save post to inject out template into the page cache
		add_filter(
			'wp_insert_post_data',
			array($this, 'register_project_templates')
		);


		// Add a filter to the template include to determine if the page has our
		// template assigned and return it's path
		add_filter(
			'template_include',
			array($this, 'view_project_template')
		);


		// Add your templates to this array.
		$this->templates = array(
			'page-template-javadi.php' => 'Javadi Landing Template Page',

		);
	}

	/**
	 * Adds our template to the page dropdown for v4.7+
	 *
	 */
	public function add_new_template($posts_templates)
	{
		$posts_templates = array_merge($posts_templates, $this->templates);
		return $posts_templates;
	}

	/**
	 * Adds our template to the pages cache in order to trick WordPress
	 * into thinking the template file exists where it doens't really exist.
	 */
	public function register_project_templates($atts)
	{

		// Create the key used for the themes cache
		$cache_key = 'page_templates-' . md5(get_theme_root() . '/' . get_stylesheet());

		// Retrieve the cache list.
		// If it doesn't exist, or it's empty prepare an array
		$templates = wp_get_theme()->get_page_templates();
		if (empty($templates)) {
			$templates = array();
		}

		// New cache, therefore remove the old one
		wp_cache_delete($cache_key, 'themes');

		// Now add our template to the list of templates by merging our templates
		// with the existing templates array from the cache.
		$templates = array_merge($templates, $this->templates);

		// Add the modified cache to allow WordPress to pick it up for listing
		// available templates
		wp_cache_add($cache_key, $templates, 'themes', 1800);

		return $atts;
	}

	/**
	 * Checks if the template is assigned to the page
	 */
	public function view_project_template($template)
	{
		// Return the search template if we're searching (instead of the template for the first result)
		if (is_search()) {
			return $template;
		}

		// Get global post
		global $post;

		// Return template if post is empty
		if (!$post) {
			return $template;
		}

		// Return default template if we don't have a custom one defined
		if (!isset($this->templates[get_post_meta(
			$post->ID,
			'_wp_page_template',
			true
		)])) {
			return $template;
		}

		// Allows filtering of file path
		$filepath = apply_filters('page_templater_plugin_dir_path', plugin_dir_path(__FILE__));

		$file =  $filepath . get_post_meta(
			$post->ID,
			'_wp_page_template',
			true
		);

		// Just to be safe, we check if the file exist first
		if (file_exists($file)) {
			return $file;
		} else {
			echo $file;
		}

		// Return template
		return $template;
	}
}
add_action('plugins_loaded', array('PageTemplaterJAVADI', 'get_instance'));



function plugin_wiki_register_page_add_settings_link($links)
{
	$settings_link = '<a href="options-general.php?page=wiki-custom-setting-page-identifier">' . __('Settings') . '</a>';
	array_push($links, $settings_link);
	return $links;
}

$plugin = plugin_basename(__FILE__);
add_filter("plugin_action_links_$plugin", 'plugin_wiki_register_page_add_settings_link');

/* Add Custom Admin Menu */
add_action('admin_menu', 'custom_wiki_registration_page_menu');
add_action('admin_init', 'register_wiki_registration_page_settings');

function register_wiki_registration_page_settings()
{
	register_setting('registration-wiki-page-group', 'googleapisUri_text');
};

function custom_wiki_registration_page_menu()
{
	add_options_page('wiki setting page Options', 'wiki setting page Options', 'manage_options', 'wiki-custom-setting-page-identifier', 'custom_wiki_registration_page_options');
}

function custom_wiki_registration_page_options()
{
	if (!current_user_can('manage_options')) {
		wp_die('You do not have sufficient permissions to access this page.');
	}
?>

	<div>
		<?php screen_icon(); ?>
		<h2>Custom wiki page Options:</h2>

		<form method="post" action="options.php">
			<?php
			settings_fields('registration-wiki-page-group');
			do_settings_fields('registration-wiki-page-group', '');
			?>

			<p>Enter your googleapisUri here.</p>
			<input type="text" name="googleapisUri_text" value="<?php echo get_option('googleapisUri_text'); ?>" />
			<p>https://maps.googleapis.com/maps/api/timezone/json?location={{lat}},{{lng}}&amp;timestamp=1331161200&amp;key=AIzaSyC3z9dUmGsd_SCvRqBeMUClF9tTD4nTDTg</p>
			<hr />


			<?php
			submit_button();
			?>

		</form>
	</div>
<?php
}



function wpb_custom_new_menu()
{
	register_nav_menus(
		array(
			'my-custom-menu' => "منوی اصلی سایت در قالب  صفحه ی اول",
			'my-custom-menu-for-sections' => "منوی بخش بخش ها",
			'extra-menu' => 'منوی اضافه',
		)
	);
}
add_action('init', 'wpb_custom_new_menu');


function wpb_custom_new_menu_infooter()
{
	// This theme uses wp_nav_menu() in two locations.  
	register_nav_menus(array(
		'primaryfooter' => __('اولین فوتر', 'footer_esra_1'),
		'secondaryfooter' => __('دومین فوتر', 'footer_esra_2'),
		'3rdfooter' => __('سومین فوتر', 'footer_esra_3'),
		'4thfooter' => __('چهارمین فوتر', 'footer_esra_4')
	));
}

add_action('init', 'wpb_custom_new_menu_infooter');
