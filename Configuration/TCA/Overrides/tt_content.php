<?php

// ---------------------------------------------------------------------------------------------------------------------
// Frontend Plugin Einstellungen

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['entitybicyclemarket_frontend'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('entitybicyclemarket_frontend', 'FILE:EXT:entity_bicycle_market/Configuration/FlexForms/Plugins/Frontend.xml');