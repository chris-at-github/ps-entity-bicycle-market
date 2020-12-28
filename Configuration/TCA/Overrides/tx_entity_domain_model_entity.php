<?php
defined('TYPO3_MODE') || die();


if (!isset($GLOBALS['TCA']['tx_entity_domain_model_entity']['ctrl']['type'])) {
    // no type field defined, so we define it here. This will only happen the first time the extension is installed!!
    $GLOBALS['TCA']['tx_entity_domain_model_entity']['ctrl']['type'] = 'tx_extbase_type';
    $tempColumnstx_entitybicyclemarket_tx_entity_domain_model_entity = [];
    $tempColumnstx_entitybicyclemarket_tx_entity_domain_model_entity[$GLOBALS['TCA']['tx_entity_domain_model_entity']['ctrl']['type']] = [
        'exclude' => true,
        'label'   => 'LLL:EXT:entity_bicycle_market/Resources/Private/Language/locallang_db.xlf:tx_entitybicyclemarket.tx_extbase_type',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['',''],
                ['Bicycle','Tx_EntityBicycleMarket_Bicycle']
            ],
            'default' => 'Tx_EntityBicycleMarket_Bicycle',
            'size' => 1,
            'maxitems' => 1,
        ]
    ];
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_entity_domain_model_entity', $tempColumnstx_entitybicyclemarket_tx_entity_domain_model_entity);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tx_entity_domain_model_entity',
    $GLOBALS['TCA']['tx_entity_domain_model_entity']['ctrl']['type'],
    '',
    'after:' . $GLOBALS['TCA']['tx_entity_domain_model_entity']['ctrl']['label']
);




$tmp_entity_bicycle_market_columns = [


    'brand' => [
        'exclude' => true,
        'label' => 'LLL:EXT:entity_bicycle_market/Resources/Private/Language/locallang_db.xlf:tx_entitybicyclemarket_domain_model_bicycle.brand',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],
    ],
    'tx_entitybicyclemarket_condition' => [
        'exclude' => true,
        'label' => 'LLL:EXT:entity_bicycle_market/Resources/Private/Language/locallang_db.xlf:tx_entitybicyclemarket_domain_model_bicycle.tx_entitybicyclemarket_condition',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['-- Label --', 0],
            ],
            'size' => 1,
            'maxitems' => 1,
            'eval' => ''
        ],
    ],
    'condition_description' => [
        'exclude' => true,
        'label' => 'LLL:EXT:entity_bicycle_market/Resources/Private/Language/locallang_db.xlf:tx_entitybicyclemarket_domain_model_bicycle.condition_description',
        'config' => [
            'type' => 'text',
            'cols' => 40,
            'rows' => 15,
            'eval' => 'trim'
        ]
    ],
    'service_condition' => [
        'exclude' => true,
        'label' => 'LLL:EXT:entity_bicycle_market/Resources/Private/Language/locallang_db.xlf:tx_entitybicyclemarket_domain_model_bicycle.service_condition',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],
    ],
    'frame_size' => [
        'exclude' => true,
        'label' => 'LLL:EXT:entity_bicycle_market/Resources/Private/Language/locallang_db.xlf:tx_entitybicyclemarket_domain_model_bicycle.frame_size',
        'config' => [
            'type' => 'input',
            'size' => 4,
            'eval' => 'int'
        ]
    ],
    'wheel_size' => [
        'exclude' => true,
        'label' => 'LLL:EXT:entity_bicycle_market/Resources/Private/Language/locallang_db.xlf:tx_entitybicyclemarket_domain_model_bicycle.wheel_size',
        'config' => [
            'type' => 'input',
            'size' => 4,
            'eval' => 'int'
        ]
    ],
    'price' => [
        'exclude' => true,
        'label' => 'LLL:EXT:entity_bicycle_market/Resources/Private/Language/locallang_db.xlf:tx_entitybicyclemarket_domain_model_bicycle.price',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'double2'
        ]
    ],
    'price_negotiation_basis' => [
        'exclude' => true,
        'label' => 'LLL:EXT:entity_bicycle_market/Resources/Private/Language/locallang_db.xlf:tx_entitybicyclemarket_domain_model_bicycle.price_negotiation_basis',
        'config' => [
            'type' => 'check',
            'items' => [
                '1' => [
                    '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                ]
            ],
            'default' => 0,
        ]
    ],
    'manufacturer_guarantee' => [
        'exclude' => true,
        'label' => 'LLL:EXT:entity_bicycle_market/Resources/Private/Language/locallang_db.xlf:tx_entitybicyclemarket_domain_model_bicycle.manufacturer_guarantee',
        'config' => [
            'type' => 'check',
            'items' => [
                '1' => [
                    '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                ]
            ],
            'default' => 0,
        ]
    ],

];


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_entity_domain_model_entity',$tmp_entity_bicycle_market_columns);


/* inherit and extend the show items from the parent class */

if (isset($GLOBALS['TCA']['tx_entity_domain_model_entity']['types']['1']['showitem'])) {
    $GLOBALS['TCA']['tx_entity_domain_model_entity']['types']['Tx_EntityBicycleMarket_Bicycle']['showitem'] = $GLOBALS['TCA']['tx_entity_domain_model_entity']['types']['1']['showitem'];
} elseif(is_array($GLOBALS['TCA']['tx_entity_domain_model_entity']['types'])) {
    // use first entry in types array
    $tx_entity_domain_model_entity_type_definition = reset($GLOBALS['TCA']['tx_entity_domain_model_entity']['types']);
    $GLOBALS['TCA']['tx_entity_domain_model_entity']['types']['Tx_EntityBicycleMarket_Bicycle']['showitem'] = $tx_entity_domain_model_entity_type_definition['showitem'];
} else {
    $GLOBALS['TCA']['tx_entity_domain_model_entity']['types']['Tx_EntityBicycleMarket_Bicycle']['showitem'] = '';
}
$GLOBALS['TCA']['tx_entity_domain_model_entity']['types']['Tx_EntityBicycleMarket_Bicycle']['showitem'] .= ',--div--;LLL:EXT:entity_bicycle_market/Resources/Private/Language/locallang_db.xlf:tx_entitybicyclemarket_domain_model_bicycle,';
$GLOBALS['TCA']['tx_entity_domain_model_entity']['types']['Tx_EntityBicycleMarket_Bicycle']['showitem'] .= 'brand, tx_entitybicyclemarket_condition, condition_description, service_condition, frame_size, wheel_size, price, price_negotiation_basis, manufacturer_guarantee';


$GLOBALS['TCA']['tx_entity_domain_model_entity']['columns'][$GLOBALS['TCA']['tx_entity_domain_model_entity']['ctrl']['type']]['config']['items'][] = ['LLL:EXT:entity_bicycle_market/Resources/Private/Language/locallang_db.xlf:tx_entity_domain_model_entity.tx_extbase_type.Tx_EntityBicycleMarket_Bicycle','Tx_EntityBicycleMarket_Bicycle'];
