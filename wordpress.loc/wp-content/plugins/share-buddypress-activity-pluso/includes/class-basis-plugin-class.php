<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class MXSBAPBasisPluginClass
{

	private static $table_slug = MXSBAP_TABLE_SLUG;

	public static function activate()
	{

		// Default script
		$string_script = '&lt;script type=&quot;text/javascript&quot;&gt;(function() {
		  if (window.pluso)if (typeof window.pluso.start == &quot;function&quot;) return;
		  if (window.ifpluso==undefined) { window.ifpluso = 1;
		    var d = document, s = d.createElement(&#039;script&#039;), g = &#039;getElementsByTagName&#039;;
		    s.type = &#039;text/javascript&#039;; s.charset=&#039;UTF-8&#039;; s.async = true;
		    s.src = (&#039;https:&#039; == window.location.protocol ? &#039;https&#039; : &#039;http&#039;)  + &#039;://share.pluso.ru/pluso-like.js&#039;;
		    var h=d[g](&#039;body&#039;)[0];
		    h.appendChild(s);
		  }})();&lt;/script&gt;';

		// Default block for icons
		$block_icons = '&lt;div class=&quot;pluso&quot; data-background=&quot;transparent&quot; data-options=&quot;medium,round,line,horizontal,nocounter,theme=04&quot; data-services=&quot;vkontakte,odnoklassniki,facebook,twitter,google,moimir,email,print&quot; data-url=&quot;%PAGE-URL%&quot; data-title=&quot;%TITLE%&quot; data-description=&quot;%DESCRIPTION%&quot;&gt;&lt;/div&gt;';

		// Create table
		global $wpdb;

		// Table name
		$table_name = $wpdb->prefix . self::$table_slug;

		if ( $wpdb->get_var( "SHOW TABLES LIKE '" . $table_name . "'" ) !=  $table_name ) {

			$sql = "CREATE TABLE IF NOT EXISTS `$table_name`
			(
				`id` int(11) NOT NULL AUTO_INCREMENT,
				`script` text NOT NULL,
				`block_icons` text NOT NULL,
				PRIMARY KEY (`id`)
			) ENGINE=MyISAM DEFAULT CHARSET=$wpdb->charset AUTO_INCREMENT=1;";

			$wpdb->query( $sql );

			// Insert dummy data
			$wpdb->insert(

				$table_name,

				array(
					'script' => $string_script,
					'block_icons' => $block_icons
				)

			);
		}

	}

	public static function deactivate()
	{
		// ...
	}

}