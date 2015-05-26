<?php
/*
Plugin Name: Mail Add Sender
Plugin URI: http://www.slashslash.de/
Description: Adds a Sender header to every mail if it does not already have one.
Author: Simon Lehmann
Version: 1.0
Author URI: http://www.slashslash.de/

Copyright 2013 Simon Lehmann

*/

function mail_add_sender(&$phpmailer) {
	if (empty($phpmailer->Sender)) {
		//$sender = $phpmailer->AddrFormat(array($phpmailer->From, $phpmailer->FromName));
		$sender = $phpmailer->From;
		$phpmailer->Sender = $sender;
	}
}

add_action('phpmailer_init', 'mail_add_sender', 99, 1);
