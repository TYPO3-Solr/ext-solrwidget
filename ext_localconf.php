<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin($_EXTKEY, 'Widget',
	array('Plugin' => 'plugin'),
	array('Plugin' => 'plugin')
);

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['solrwidget'] = array(
	'queryProviders' => array(
		'Tx_Solrwidget_QueryProvider_InitialQueryProvider'
	)
);
