<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(function() {

	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
		'EntityBicycleMarket',
		'Frontend',
		[
			\Ps\EntityBicycleMarket\Controller\BicycleController::class => 'listing, show, request'
		],
		// non-cacheable actions
		[
			\Ps\EntityBicycleMarket\Controller\BicycleController::class => 'request'
		]
	);

	// wizards
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
'<INCLUDE_TYPOSCRIPT: source="FILE:EXT:entity_bicycle_market/Configuration/TSConfig/Page.t3s">'
	);

	$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
	$iconRegistry->registerIcon(
		'entity_bicycle_market-plugin-frontend',
		\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
		['source' => 'EXT:entity_bicycle_market/Resources/Public/Icons/user_plugin_frontend.svg']
	);

	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/form']['initializeFormElement'][1609278420] = \Ps\EntityBicycleMarket\Service\PrefillElementService::class;
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][1609707169] = \Ps\EntityBicycleMarket\Service\GenerateTokenService::class;
});
