<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'EntityBicycleMarket',
            'Frontend',
            'Bicycle Market (Frontend)'
        );



        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('entity_bicycle_market', 'Configuration/TypoScript', 'Bicycle Market');


    }
);
