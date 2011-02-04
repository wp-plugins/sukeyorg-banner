<?php
/*
Plugin Name: Sukey.org Banner
Plugin URI: http://supportblog.co.uk/
Description: Show your support for Sukey.org
Version: 1.0
Author: Lee Hayward
Author URI: http://supportblog.co.uk
License: GPL2
*/

/*  Copyright 2011 Sukey.org  (email : sukey.org+wordpress@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if(!class_exists("SukeyBannerWP")) {
	class SukeyBannerWP {
		function SukeyBannerWP() {

		}

function addBannercss() {
?>
 <STYLE type="text/css">
  #sukey
{
background-image:url("http://www.sukey.org/resources/wp.png");
background-repeat:no-repeat;
position: absolute;
right: 0px;
top: 0px;
height: 150px;
width: 150px;
z-index: 1000;
}
 </style>
<?php				
}

function addSukeyBanner() {
	?>
<a href="http://sukey.org/"><div id="sukey"></div></a>
<?php
}
	}
} //End Class SukeyBannerWP

if (class_exists("SukeyBannerWP")) {
	$sk_BannerWP = new SukeyBannerWP();
}

if (isset($sk_BannerWP)) {
add_action('wp_head', array(&$sk_BannerWP, 'addBannercss'), 1);
add_action('wp_footer', array(&$sk_BannerWP,'addSukeyBanner'), 1);
}
?>