<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'EntityBicycleMarket',
            'Frontend',
            [
                \Ps\EntityBicycleMarket\Controller\BicycleController::class => 'list, show'
            ],
            // non-cacheable actions
            [
                \Ps\EntityBicycleMarket\Controller\BicycleController::class => ''
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        frontend {
                            iconIdentifier = entity_bicycle_market-plugin-frontend
                            title = LLL:EXT:entity_bicycle_market/Resources/Private/Language/locallang_db.xlf:tx_entity_bicycle_market_frontend.name
                            description = LLL:EXT:entity_bicycle_market/Resources/Private/Language/locallang_db.xlf:tx_entity_bicycle_market_frontend.description
                            tt_content_defValues {
                                CType = list
                                list_type = entitybicyclemarket_frontend
                            }
                        }
                    }
                    show = *
                }
           }'
        );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'entity_bicycle_market-plugin-frontend',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:entity_bicycle_market/Resources/Public/Icons/user_plugin_frontend.svg']
			);
		
    }
);
