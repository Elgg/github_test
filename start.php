<?php
/**
 * The github test plugin
 */

elgg_register_event_handler('init', 'system', 'github_test_init');


function github_test_init() {
	elgg_extend_view('css/elgg', 'github_test/css');
}

function github_test_page_handler($page) {
	switch ($page[0]) {
		case 'mine':
			break;
		default:
			return false;
			break;
	}

	return true;
}

