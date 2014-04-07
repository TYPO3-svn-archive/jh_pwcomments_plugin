<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

// Register plugin
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'pw_comments',
	'Pi1',
	'pwComments plugin'
);

// Register flexform
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('pwcomments_pi1', 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/Flexform.xml');
$TCA['tt_content']['types']['list']['subtypes_addlist']['pwcomments_pi1'] = 'pi_flexform';

// Wizard for frontend plugin
if (TYPO3_MODE == 'BE') {
	$TBE_MODULES_EXT['xMOD_db_new_content_el']['addElClasses']['pwcomments_pi1' . '_wizicon'] =
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Resources/Private/Php/class.pw_comments_wizicon.php';
}

?>