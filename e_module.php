<?php
if ( ! defined('e107_INIT')) {
	exit;
}

require_once __DIR__ . '/Mentions.php';
require_once __DIR__ . '/MentionsNotification.php';


MentionsNotification::execute();
