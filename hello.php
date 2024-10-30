<?php
/**
 * @package Hello_Admin
 * @version 1.3.1
 */
/*
Plugin Name: Hello Admin
Plugin URI: http://wptavern.com/please-stop-abusing-wordpress-admin-notices
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in a post on wptavern by Jeff Chandler.
Author: lukecarbis
Version: 1.3.1
Author URI: http://wptavern.com/please-stop-abusing-wordpress-admin-notices
*/

function hello_admin_get_lyric() {
	/** These are the lyrics to Hello Admin */
	$lyrics = "Hello, Admin
Well, hello, Admin
It's so nice to have you back where you belong
You're lookin' swell, Admin
I can tell, Admin
You're still glowin', you're still crowin'
You're still goin' strong
We feel the room swayin'
While the band's playin'
One of your old favourite songs from way back when
So, take her wrap, fellas
Find her an empty lap, fellas
Admin'll never go away again
Hello, Admin
Well, hello, Admin
It's so nice to have you back where you belong
You're lookin' swell, Admin
I can tell, Admin
You're still glowin', you're still crowin'
You're still goin' strong
We feel the room swayin'
While the band's playin'
One of your old favourite songs from way back when
Golly, gee, fellas
Find her a vacant knee, fellas
Admin'll never go away
Admin'll never go away
Admin'll never go away again";

	// Here we split it into lines
	$lyrics = explode( "\n", $lyrics );

	// And then randomly choose a line
	return wptexturize( $lyrics[ mt_rand( 0, count( $lyrics ) - 1 ) ] );
}


// This just echoes the chosen line
function hello_admin() {
	$chosen = hello_admin_get_lyric();

	$notice_array = array( 'notice-error' , 'notice-warning' , 'notice-success' , 'notice-info' );
	shuffle($notice_array);

	echo '<div class="notice '.$notice_array[0].'">';
	echo "<p id='dolly'>$chosen</p>";
	echo '</div>';
}

// Now we set that function up to execute when the admin_notices action is called
add_action( 'admin_notices', 'hello_admin' );


?>
