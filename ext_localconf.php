<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'pw_comments',
	'Pi1',
	array(
		'Comment' => 'index,new',
	),
	array(
		'Comment' => 'index,new',
	)
);

?>