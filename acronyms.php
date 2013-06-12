<?php
/*
Plugin Name: Acronyms
Plugin URI: http://ketsugi.com/software/wordpress/acronyms-plugin/
Description: A plugin to wrap acronyms in posts and comments with appropriate <acronym> acronyms. Allows users to manage lists of acronyms through admin interface. Based on Joel Bennett's Acronym Replacer plugin (http://www.huddledmasses.org/) and Joel Pan's NP_Acronym plugin for Nucleus CMS.
Version: 1.6.1
Author: Joel Pan
Author URI: http://ketsugi.com/

  Copyright 2008  Joel Pan <spamtastic@ketsugi.com>

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

class Acronyms
{

	/* void install ()
	 * Creates tables and populates default acronyms.
	 */
	function install ()
	{
		// Populate defaults
		$acronyms = array(
			'AFAIK' => 'As far as I know',
			'AIM' => 'AOL Instant Messenger',
			'AJAX' => 'Asynchronous JavaScript and XML',
			'AOL' => 'America Online',
			'API' => 'Application Programming Interface',
			'ASAP' => 'As soon as possible',
			'ASCII' => 'American Standard Code for Information Interchange',
			'ASP' => 'Active Server Pages',
			'BTW' => 'By The Way',
			'CD' => 'Compact Disc',
			'CGI' => 'Common Gateway Interface',
			'CMS' => 'Content Management System',
			'CSS' => 'Cascading Style Sheets',
			'CVS' => 'Concurrent Versions System',
			'DBA' => 'Database Administrator',
			'DHTML' => 'Dynamic HyperText Markup Language',
			'DMCA' => 'Digital Millenium Copyright Act',
			'DNS' => 'Domain Name Server',
			'DOM' => 'Document Object Model',
			'DTD' => 'Document Type Definition',
			'DVD' => 'Digital Versatile Disc',
			'EOF' => 'End of file',
			'EOL' => 'End of line',
			'EOM' => 'End of message',
			'EOT' => 'End of text',
			'FAQ' => 'Frequently Asked Questions',
			'FDL' => 'GNU Free Documentation License',
			'FTP' => 'File Transfer Protocol',
			'FUD' => 'Fear, Uncertainty, and Doubt',
			'GB' => 'Gigabyte',
			'GHz' => 'Gigahertz',
			'GIF' => 'Graphics Interchange Format',
			'GPL' => 'GNU General Public License',
			'GUI' => 'Graphical User Interface',
			'HDD' => 'Hard Disk Drive',
			'HTML' => 'HyperText Markup Language',
			'HTTP' => 'HyperText Transfer Protocol',
			'IANAL' => 'I am not a lawyer',
			'ICANN' => 'Internet Corporation for Assigned Names and Numbers',
			'IE' => 'Internet Explorer',
			'IE5' => 'Internet Explorer 5',
			'IE6' => 'Internet Explorer 6',
			'IIRC' => 'If I remember correctly',
			'IIS' => 'Internet Information Services',
			'IM' => 'Instant Message',
			'IMAP' => 'Internet Message Access Protocol',
			'IMHO' => 'In my humble opinion',
			'IMO' => 'In my opinion',
			'IOW' => 'In other words',
			'IP' => 'Internet Protocol',
			'IRC' => 'Internet Relay Chat',
			'IRL' => 'In real life',
			'ISO' => 'International Organization for Standardization',
			'ISP' => 'Internet Service Provider',
			'JDK' => 'Java Development Kit',
			'JPEG' => 'Joint Photographics Experts Group',
			'JPG' => 'Joint Photographics Experts Group',
			'JS' => 'JavaScript',
			'KB' => 'Kilobyte',
			'KISS' => 'Keep it simple, stupid',
			'LGPL' => 'GNU Lesser General Public License',
			'LOL' => 'Laughing out loud',
			'MB' => 'Megabyte',
			'MHz' => 'Megahertz',
			'MIME' => 'Multipurpose Internet Mail Extension',
			'MIT' => 'Massachusetts Institute of Technology',
			'MML' => 'Mathematical Markup Language',
			'MPEG' => 'Motion Picture Experts Group',
			'MS' => 'Microsoft',
			'MSDN' => 'Microsoft Developer Network',
			'MSIE' => 'Microsoft Internet Explorer',
			'MSN' => 'Microsoft Network',
			'OMG' => 'Oh my goodness',
			'OPML' => 'Outline Processor Markup Language',
			'OS' => 'Operating System',
			'OSS' => 'Open Source Software',
			'OTOH' => 'On the other hand',
			'P2P' => 'Peer to Peer',
			'PDA' => 'Personal Digital Assistant',
			'PDF' => 'Portable Document Format',
			'PHP' => 'Pre-Hypertext Processing',
			'PICS' => 'Platform for Internet Content Selection',
			'PIN' => 'Personal Identification Number',
			'PITA' => 'Pain in the Ass',
			'PNG' => 'Portable Network Graphics',
			'POP' => 'Post Office Protocol',
			'POP3' => 'Post Office Protocol 3',
			'Perl' => 'Practical Extraction and Report Language',
			'QoS' => 'Quality of Service',
			'RAID' => 'Redundant Array of Inexpensive Disks',
			'RDF' => 'Resource Description Framework',
			'ROFL' => 'Rolling on the floor laughing',
			'ROFLMAO' => 'Rolling on the floor laughing my ass off',
			'RPC' => 'Remote Procedure Call',
			'RSS' => 'Really Simple Syndication',
			'RTF' => 'Rich Text File',
			'RTFM' => 'Read The Fucking Manual',
			'SCSI' => 'Small Computer System Interface',
			'SDK' => 'Software Development Kit',
			'SGML' => 'Standard General Markup Language',
			'SMIL' => 'Synchronized Multimedia Integration Language',
			'SMTP' => 'Simple Mail Transfer Protocol',
			'SOAP' => 'Simple Object Access Protocol',
			'SQL' => 'Structured Query Language',
			'SSH' => 'Secure Shell',
			'SSI' => 'Server Side Includes',
			'SSL' => 'Secure Sockets Layer',
			'SVG' => 'Scalable Vector Graphics',
			'SVN' => 'Subversion',
			'TIA' => 'Thanks In Advance',
			'TIFF' => 'Tagged Image File Format',
			'TLD' => 'Top Level Domain',
			'TOC' => 'Table of Contents',
			'URI' => 'Uniform Resource Identifier',
			'URL' => 'Uniform Resource Locator',
			'URN' => 'Uniform Resource Name',
			'USB' => 'Universal Serial Bus',
			'VB' => 'Visual Basic',
			'VBA' => 'Visual Basic for Applications',
			'W3C' => 'World Wide Web Consortium',
			'WAN' => 'Wide Area Network',
			'WAP' => 'Wireless Access Protocol',
			'WML' => 'Wireless Markup Language',
			'WP' => 'WordPress',
			'WTF' => 'What the fuck',
			'WWW' => 'World Wide Web',
			'WYSIWYG' => 'What You See Is What You Get',
			'XHTML' => 'eXtensible HyperText Markup Language',
			'XML' => 'eXtensible Markup Language',
			'XSL' => 'eXtensible Stylesheet Language',
			'XSLT' => 'eXtensible Stylesheet Language Transformations',
			'XUL' => 'XML User Interface Language',
			'YMMV' => 'Your mileage may vary'
		);
		add_option( 'acronym_acronyms', $acronyms );

		// Add default options -- Options not currently modifiable by user
		add_option( 'acronym_content', 1 );
		add_option( 'acronym_comments', 1 );
	}

	/* string get_textdomain ()
	 *
	 * returns the text domain to be used for internationalisation
	 */
	function get_textdomain ()
	{
		return "Acronyms";
	}

	/* void uninstall ()
	 */
	function uninstall ()
	{
		// Perhaps I should remove the acronyms when uninstalling to clear out the cruft? But what if the user is just temporarily deactivating the plugin with the intention to activate it again later, and doesn't want to lose all his/her custom acronyms?
	}

	/**
	 * Adds the Management page to WordPress
	 *
	 * @return void
	 **/
	function add_pages ()
	{
		$domain = Acronyms::get_textdomain();

		// Add the Manage page
		add_management_page( __( 'Manage Acronyms', $domain ), __( 'Acronyms', $domain ), "manage_options", __FILE__, array( 'Acronyms', 'manage_acronyms' ) );
	}

	/**
	 * void management_handler ()
	 *
	 * handles actions for adding, editing or deleting acronyms
	 *
	 */
	function management_handler () {
		$domain = Acronyms::get_textdomain();
		load_plugin_textdomain( $domain, "/wp-content/plugins/your-plugin-directory/" );

		$title = __( 'Acronyms', $domain );
		$parent_file = 'tools.php?page=' . Acronyms::get_parent_url();

		if ( 'acronyms.php' == substr( $parent_file, -12 ) ) {
			$acronyms = get_option( 'acronym_acronyms' );

			wp_reset_vars(array('action', 'acronym'));

			if ( isset( $_GET['delete-acronyms'] ) ) // Bulk delete array of acronyms
				$action = 'delete-acronyms';
			else if ( isset( $_GET['search'] ) ) // Search term for redirecting to less crufty HTTP GET URL
			  $action = 'search';
			else $action = $_GET['action'];

			switch ($action) {
				case 'add-acronym':
					check_admin_referer('add_acronym');;
					$acronym = $_GET['acronym'];
					$fulltext = $_GET['fulltext'];
					if ( Acronyms::update ( $acronym, $fulltext ) )	$message = 1;
					else $message = 4;
	  	  			wp_redirect( "$parent_file&message=$message" );
	    			exit;
					break;

				case 'edit-acronym':
					$acronym = $_GET['acronym'];
					$fulltext = $_GET['fulltext'];
					check_admin_referer('edit_acronym');
					if ( Acronyms::update ( $acronym, $fulltext ) )	$message = 3;
					else $message = 5;
	  	  			wp_redirect( "$parent_file&message=$message" );
	    			exit;
					break;

				case 'delete-acronym':
		 			check_admin_referer('delete_acronym');

		  	  		if ( !current_user_can('manage_categories') )
	      				wp_die(__('Cheatin&#8217; uh?'));

			    	$acronym = $_GET['acronym'];
	      			Acronyms::delete ( $acronym );

					$message = 2;
		  	  		wp_redirect( "$parent_file&message=$message" );
		    		exit;
				  	break;

				case 'delete-acronyms':
		 			check_admin_referer('delete-acronyms');

		    		if ( !current_user_can('manage_categories') )
	      				wp_die(__('Cheatin&#8217; uh?'));

			    	$acronyms = $_GET['delete_acronyms'];
		    			foreach( (array) $acronyms as $acronym ) {
			      		Acronyms::delete ( $acronym );
			    	}

			    	if ( 1 < ( count( $acronyms ) ) )
			    		$message = 6;
	    			else $message = 2;
	  	  			wp_redirect( "$parent_file&message=$message" );
	    			exit;
			  	break;

				case 'search':
					$s = '&s=' . urlencode( $_GET['search'] );
					$p = isset( $_GET['p'] ) ? '&p=' . $_GET['p'] : '';
					$n = isset( $_GET['n'] ) && 15 != $_GET['n'] ? '&n=' . $_GET['n'] : '';
					wp_redirect( "$parent_file$s$p$n" );
			}
		}
	}


	/**
	 * Manage Acronyms page
	 *
	 * @return void
	 **/
	function manage_acronyms ()
	{
		$domain = Acronyms::get_textdomain();

		// Set any error/notice messages based on the 'message' GET value
		$message = $_GET['message'];
		$messages[1] = __( 'Acronym added.', $domain );
		$messages[2] = __( 'Acronym deleted.', $domain );
		$messages[3] = __( 'Acronym updated.', $domain );
		$messages[4] = __( 'Acronym not added.', $domain );
		$messages[5] = __( 'Acronym not updated.', $domain );
		$messages[6] = __( 'Acronyms deleted.', $domain );

		if ( isset( $message ) ) { ?>
<div id="message" class="updated fade"><p><?php echo $messages[$message] ?></p></div>
<?php }
		// Retrieve and set pagination information
		$s = isset( $_GET['s'] ) ? urldecode( $_GET['s'] ) : ''; // Number of acronyms per page
		$p = isset( $_GET['p'] ) && is_numeric( $_GET['p'] ) && 0 < $_GET['p'] ? $_GET['p'] : 1; // Which page to display
		$n = 15; // Default number of acronyms to show per page
		if ( 0 == $n ) $t = 1;
		else $t = ceil( Acronyms::count_acronyms( $s ) / $n ); // Total number of pages, rounded up to nearest integer
?>
<div class="wrap">
  <div id="icon-edit" class="icon32"><br/></div>
  <h2>
	<?php
		_e('Acronyms', $domain );
		//if( 'edit' != $_GET['action'] ) echo ' (<a href="#addacronym">' . __('add new', $domain ) . '</a>)'
		?>
	</h2><br class="clear" />
	<form class="search-form" method="get" action="">
		<p class="search-box" id="post-search">
			<input type="hidden" name="page" value="<?php echo Acronyms::get_parent_url() ?>"/>
			<input type="text" id="post-search-input" name="search" value="<?php echo attribute_escape( stripslashes( $_GET['s'] ) ); ?>" />
			<input type="submit" value="<?php _e( 'Search acronyms', $domain  ); ?>" class="button" />
		</p>
	</form>
 	<br class="clear" />
 	<div id="col-container">
 		<div id="col-right">
 			<div class="col-wrap">
 			  <form id="posts-filter" action="" method="get">
			  <input type="hidden" name="page" value="<?php echo Acronyms::get_parent_url() ?>"/>
<?php
		Acronyms::show_pagination_bar( $s, $n, $p, $t, true);
		Acronyms::show_acronym_list( $s, $n, $p );
		Acronyms::show_pagination_bar( $s, $n, $p, $t);
?>
				</form>
			</div>
 		</div>
 		<div id="col-left">
 			<div class="col-wrap">
<?php
		if ( 'edit' == $_GET['action'] && !empty( $_GET['acronym'] ) ) {
			Acronyms::add_acronym_form ( urldecode( $_GET['acronym'] ), urldecode( $_GET['fulltext'] ) );
		} else {
			Acronyms::add_acronym_form ();
		}
?>
 			</div>
		</div>
	</div>
</div>
<?php
	}

	/* string acronym_replace ( string $text, array $acronyms )
	 *
	 * Replaces known acronyms in $text with appropriate <acronym> acronyms.
	 * Note: acronym replacement is case-sensitive.
	 */
	function acronym_replace ( $text )
	{
		$acronyms = get_option( 'acronym_acronyms' );
		$text = " $text ";
		foreach ( $acronyms as $acronym => $fulltext )
			$text = preg_replace( "|(?!<[^<>]*?)(?<![?.&])\b$acronym\b(?!:)(?![^<>]*?>)|msU", "<acronym title=\"$fulltext\">$acronym</acronym>" , $text );
		$text = trim($text);
		return $text;
	}

  /* string show_acronym_list ( string $s, int $n, int $p )
	 *
	 * Displays the list of acronyms, filtered by search term $s and showing page # $p based on $n per page
	 */
	function show_acronym_list ( $s, $n, $p = '1' )
	{
		$domain = Acronyms::get_textdomain();

		// Sort the acronyms appropriately
		$acronyms = get_option( 'acronym_acronyms' );
		uksort( $acronyms, "strnatcasecmp");

?>
	<table class="widefat">
	<thead>
	<tr>
    <th scope="col" class="check-column"><span class="acronym-tooltip" title="<?php _e( 'Select all acronyms' , $domain ) ?>"><input type="checkbox" onclick="checkAll(document.getElementById('posts-filter'));" /></span></th>
    <th scope="col"><?php _e( 'Acronym', $domain ) ?></th>
    <th scope="col"><?php _e( 'Full', $domain ) ?></th>
	</tr>
	</thead>
	<tfoot>
	<tr>
    <th scope="col" class="check-column"><span class="acronym-tooltip" title="<?php _e( 'Select all acronyms' , $domain ) ?>"><input type="checkbox" onclick="checkAll(document.getElementById('posts-filter'));" /></span></th>
    <th scope="col"><?php _e( 'Acronym', $domain ) ?></th>
    <th scope="col"><?php _e( 'Full', $domain ) ?></th>
	</tr>
	</tfoot>
	<tbody id="the-list" class="list:acronym">
<?php
		$index_start = $n * ( $p - 1 );
		$index_end = $n * $p;
		$index = 0;
		foreach ( $acronyms as $acronym => $fulltext )
		{
			if ( ( '' == $s ) || ( ( false !== strpos( strtolower( $acronym ), strtolower( $s ) ) ) || ( false !== strpos( strtolower( $fulltext ), strtolower( $s ) ) ) ) )
			{
				if ( 0 == $n || ( ++$index >= $index_start && $index <= $index_end ) ) {
	?>
			<tr class="iedit<?php if (0 == $i++ % 2) echo ' alternate' ?>">
			  <th scope="row" class="check-column">
			  	<input type="checkbox" name="delete_acronyms[]" value="<?php echo $acronym ?>" id="select-<?php echo $acronym ?>"/>
			  </th>
				<td class="name column-name">
					<label for="select-<?php echo $acronym ?>" style="display:block">
						<strong>
				  		<span class="acronym-tooltip" title="<?php printf( __( "Edit &quot;%s&quot;" , $domain ), $acronym ) ?>">
				  			<?php echo $acronym ?>
				  		</span>
				  	</strong>
				  </label>
				  <div class="row-actions">
				  	<span class="edit">
				  		<a href="tools.php?page=<?php echo Acronyms::get_parent_url() ?>&amp;action=edit&amp;acronym=<?php echo urlencode( $acronym ) ?>&amp;fulltext=<?php echo urlencode( $fulltext ) ?>">
				  			<?php _e( 'Edit' ); ?>
				  		</a>
				  		|
				  	</span>
				  	<span class="delete">
				  		<?php
				  			$link = 'tools.php?page=' . Acronyms::get_parent_url() . '&amp;action=delete-acronym&amp;acronym=' . urlencode( $acronym );
				  			$link = ( function_exists( 'wp_nonce_url' ) ) ? wp_nonce_url( $link, 'delete_acronym' ) : $link;
				  		?>
				  		<a class="submitdelete" href="<?php echo $link ?>" onclick="if ( confirm('<?php _e( "You are about to delete this acronym \'$acronym\'.\\n \'Cancel\' to stop, \'OK\' to delete.", $domain ) ?>') ) { return true;}return false;">
				  			<?php _e ( 'Delete' ); ?>
				  		</a>
				  	</span>
				  </div>
				</td>
				<td><label for="select-<?php echo $acronym ?>" style="display:block"><?php echo $fulltext ?></label></td>
			</tr>
	<?php
				}
			}
		}
?>
  </tbody>
	</table>
<?php
	}

	function show_pagination_bar ( $s, $n, $p, $t, $filter = false)
	{

		$domain = Acronyms::get_textdomain();
?>
		<div class="tablenav">
	    <div class="alignleft actions">
	      <input type="submit" value="<?php _e( 'Delete' ) ?>" name="delete-acronyms" class="button-secondary delete" onclick="if ( confirm('<?php _e( "You are about to delete the selected acronyms.\\n \'Cancel\' to stop, \'OK\' to delete.", $domain ) ?>') ) { return true;}return false;"/>
	      <?php if ( $filter ) { wp_nonce_field('delete-acronyms'); } ?>
			</div>
			<div class="tablenav-pages">
<?php
		// Display pagination links
		$page_links = paginate_links( array(
			'base' => add_query_arg( 'p', '%#%' ),
			'format' => '',
			'total' => $t,
			'current' => $p,
			'add_args' => $n
		) );
		if ( 0 < $n && $page_links ) {
			echo '<div class="tablenav-pages">';
			$range = $n * ( $p - 1 ) + 1 . '-' . $n * $p;
			$total = Acronyms::count_acronyms( $s );
			echo '<span class="displaying-num">';
			_e( "Displaying $range of $total" );
			echo '</span>';

			echo "$page_links</div>";
		}
?>
		</div>
  </div>
  <br class="clear" />
<?php
	}

	/* void add_acronym_form ( string $acronym, string $fulltext )
	 *
	 * Display the form for adding or editing acronyms
	 */
  function add_acronym_form ( $acronym = '', $fulltext = '' )
	{
		$domain = Acronyms::get_textdomain();

		if ( ! empty($acronym) ) {
			$heading = __( 'Edit Acronym', $domain );
			$submit_text = __( 'Edit Acronym', $domain );
			$form = '<form name="editacronym" id="editacronym" method="get" action="" class="validate">';
			$action = 'edit-acronym';
			$nonce_action = 'edit_acronym';
		} else {
			$heading = __( 'Add Acronym', $domain );
			$submit_text = __( 'Add Acronym', $domain );
			$form = '<form name="addacronym" id="addacronym" method="get" action="" class="add:the-list: validate">';
			$action = 'add-acronym';
			$nonce_action = 'add_acronym';
		}
?>
<div class="form-wrap">
	<h3><?php echo $heading ?></h3>
	<div id="ajax-response"></div>
	<?php echo $form ?>
		<input type="hidden" name="page" value="<?php echo Acronyms::get_parent_url() ?>"/>
		<input type="hidden" name="action" value="<?php echo $action ?>" />
<?php wp_original_referer_field(true, 'previous'); wp_nonce_field($nonce_action); ?>
		<div class="form-field form-required">
			<label for="acronym"><?php _e( 'Acronym', $domain ) ?></label>
			<input name="acronym" id="acronym" type="text" value="<?php echo attribute_escape( $acronym ); ?>" size="20" <?php if ( 'edit-acronym' == $action ) echo 'disabled="disabled"'; ?>/>
			<p><?php _e( 'This is the acronym or abbreviation as it appears in your blog posts.', $domain ) ?></p>
		</div>
		<div class="form-field form-required">
			<label for="fulltext"><?php _e( 'Full', $domain ) ?></label>
			<input name="fulltext" id="fulltext" type="text" value="<?php echo attribute_escape( $fulltext ); ?>" size="80" />
			<p><?php _e( 'The full text is the expanded version of the abbreviation as it will appear in a tooltip displayed when a user hovers his/her mouse cursor over the abbreviation.</p>', $domain ) ?>
		</div>
		<p class="submit">
			<?php if ( 'edit-acronym' == $action ) echo '<a accesskey="c" title="' . __( 'Cancel' ) . '" class="cancel button-secondary alignright" href="tools.php?page=' . Acronyms::get_parent_url() . '">' . __( 'Cancel' ) . '</a>' ?>
			<input type="submit" class="button<?php if ( 'edit-acronym' == $action ) echo '-primary'; else echo '-secondary'; ?> alignleft" name="submit" value="<?php echo $submit_text ?>" />
		</p>
	</form>
</div>
<?php
}

	/* boolean update ( string $acronym, string $fulltext )
	 *
	 * Add a new acronym to the list, or edit an existing one
	 */
	function update ( $acronym, $fulltext )
	{
		if ( empty( $acronym ) || empty( $fulltext ) ) return false;
		else {
			$acronyms = get_option( 'acronym_acronyms' );
			$acronyms[$acronym] = $fulltext;
			update_option( 'acronym_acronyms', $acronyms );
			return true;
		}
	}

	/* boolean delete ( string $acronym )
	 *
	 * Delete an existing acronym
	 */
	function delete ( $acronym )
	{
		$acronyms = get_option( 'acronym_acronyms' );
		if ( array_key_exists( $acronym, $acronyms ) )
		{
			unset( $acronyms[$acronym] );
			update_option( 'acronym_acronyms', $acronyms );
			return true;
		}
		else return false;
	}

	/* int count_acronyms ( string $s )
	 *
	 * Get the number of acronyms based on the search term if provided
	 */
	function count_acronyms ( $s = '' )
	{
		$acronyms = get_option( 'acronym_acronyms' );
		if ( empty( $s ) ) return count( $acronyms );
		else {
			$index = 0;
			foreach ( $acronyms as $acronym => $fulltext )
			{
				if ( false !== strpos( strtolower( $acronym ), strtolower( $s ) ) || ( false !== strpos( strtolower( $fulltext ), strtolower( $s ) ) ) )
				{
					$index++;
				}
			}
			return $index;
		}
	}

	/* string get_parent_url ()
	 *
	 */
  function get_parent_url()
  {
		return $_GET['page'];
	}

} /* END CLASS acronyms */

add_action( 'admin_init', array( 'Acronyms', 'management_handler' ) );
register_activation_hook( __FILE__, array( 'Acronyms', 'install' ) );
//register_deactivation_hook( __FILE__, array( 'Acronyms', 'uninstall' ) );
if (1 == get_option( 'acronym_content' ) )
	add_filter( 'the_content', array( 'Acronyms', 'acronym_replace' ) );
if (1 == get_option( 'acronym_comments' ) )
	add_filter( 'comment_text', array( 'Acronyms', 'acronym_replace' ) );
add_action( 'admin_menu', array( 'Acronyms', 'add_pages' ) );
?>