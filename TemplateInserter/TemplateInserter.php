<?php

/**
 * TemplateInserter extension - Provides a template toolbar on WikiEditor
 * @version 0.0.1 - 2012/8/10
 *
 * @link http://blog.01000.name/TemplateInserter Documentation
 *
 * @file TemplateInserter.php
 * @ingroup Extensions
 * @package MediaWiki
 * @author YOYO <yoyo@1989x.net>
 * @copyright © 2012 YOYO
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */
 

// If this is run directly from the web die as this is not a valid entry point.
if( !defined( 'MEDIAWIKI' ) ) die( 'Invalid entry point.' );

// Extension credits.
$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'Template Inserter',
	'author' => 'YOYO', 
	'url' => 'http://blog.01000.name/TemplateInserter', 
	'descriptionmsg' => 'templateinserter-desc',
	'version'  => 0.1,
);

// Hook into EditPage::showEditForm:initial to modify the edit page header.
$wgHooks['EditPage::showEditForm:initial'][] = 'efTemplateInserter';

// Set extension messages file.
$dir = dirname( __FILE__ ) . '/';
$wgExtensionMessagesFiles[ 'TemplateInserter' ] = $dir . 'TemplateInserter.i18n.php';

//	load i18n keys
require_once($wgExtensionMessagesFiles[ 'TemplateInserter' ]);
$wgResourceModules['ext.TemplateInserter'] = array(
	'scripts' => 'TemplateInserter.js',
	'localBasePath' => dirname( __FILE__ ),
	'remoteExtPath' => 'TemplateInserter',
	//	load i18n keys
	'messages' => array_keys($messages['zh-hans']),
);

/**
 * Generate the form to be displayed at the top of the edit page and insert it.
 * @param $form EditPage object.
 * @return true
 */
function efTemplateInserter() {
	// Get various variables needed for this extension.
	global $wgOut;
  
	//load module
	$wgOut->addModules( 'ext.TemplateInserter' );

	// Return true so things don't break.
	return true;
}


?>