<?php 
defined('_JEXEC') or die;

$app 		= JFactory::getApplication();
$doc 		= JFactory::getDocument();
$user 	= JFactory::getUser();		// Add current user information

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->getCfg('sitename');
$template = $app->getTemplate();

$contentParams = $app->getParams('com_content');
$pageClass = $contentParams->get('pageclass_sfx');


// If Right-to-Left
if ($this->direction == 'rtl'){
	$doc->addStyleSheet('media/jui/css/bootstrap-rtl.css');
}

//Hide module as-positions 
	//By View (article, login, registration, search, profile, reset, remind etc)
	$hideByView = false;
	switch($view){
		case 'article':
		case 'login':
		case 'search':
		case 'profile':
		case 'registration':
		case 'reset':
		case 'remind':
		case 'contact':
		case 'form':
			$hideByView = true;
			break;
	}

	//By Component
	$hideByOption = false;
	switch($option){
		case 'com_users':
		case 'com_search':
		case 'com_contact':
			$hideByOption = true;
			break;
	}
