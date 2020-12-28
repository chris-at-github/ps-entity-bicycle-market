<?php
defined('TYPO3_MODE') || die();

// ---------------------------------------------------------------------------------------------------------------------
// Neuer Extbase-Typ
if(isset($GLOBALS['TCA']['tx_entity_domain_model_entity']['columns']['tx_extbase_type']) === true) {
	$GLOBALS['TCA']['tx_entity_domain_model_entity']['columns']['tx_extbase_type']['config']['items'][] = ['LLL:EXT:entity_bicycle_market/Resources/Private/Language/locallang_tca.xlf:tx_entitybicyclemarket_domain_model_bicycle.extbase_type', 'Ps\EntityProduct\Domain\Model\Bicycle'];
}

// ---------------------------------------------------------------------------------------------------------------------
// Neue Paletten
$GLOBALS['TCA']['tx_entity_domain_model_entity']['palettes']['bicycle_general'] = [
	'showitem' => 'title, --linebreak--, tx_entitybicyclemarket_brand, --linebreak--, long_description, --linebreak--, media, '
];

$GLOBALS['TCA']['tx_entity_domain_model_entity']['palettes']['bicycle_condition'] = [
	'showitem' => 'tx_entitybicyclemarket_condition, --linebreak--, tx_entitybicyclemarket_condition_description,'
];

$GLOBALS['TCA']['tx_entity_domain_model_entity']['palettes']['bicycle_size'] = [
	'showitem' => 'tx_entitybicyclemarket_frame_size, tx_entitybicyclemarket_wheel_size,'
];

$GLOBALS['TCA']['tx_entity_domain_model_entity']['palettes']['bicycle_price'] = [
	'showitem' => 'tx_entitybicyclemarket_price_negotiation_basis, tx_entitybicyclemarket_price,'
];

$GLOBALS['TCA']['tx_entity_domain_model_entity']['palettes']['bicycle_guarantee'] = [
	'showitem' => 'tx_entitybicyclemarket_manufacturer_guarantee,'
];


$GLOBALS['TCA']['tx_entity_domain_model_entity']['palettes']['bicycle_token'] = [
	'showitem' => 'tx_entitybicyclemarket_token,'
];

$GLOBALS['TCA']['tx_entity_domain_model_entity']['palettes']['bicycle_hidden'] = [
	'showitem' => 'language, extended, slug',
	'isHiddenPalette' => 1
];

// ---------------------------------------------------------------------------------------------------------------------
// Neue Felder
$tmpEntityBicycleMarketColumns = [
	'tx_entitybicyclemarket_brand' => [
		'exclude' => true,
		'label' => 'LLL:EXT:entity_bicycle_market/Resources/Private/Language/locallang_tca.xlf:tx_entitybicyclemarket_domain_model_bicycle.brand',
		'config' => [
			'type' => 'input',
			'size' => 40,
			'eval' => 'trim'
		],
	],
	'tx_entitybicyclemarket_condition' => [
		'exclude' => true,
		'label' => 'LLL:EXT:entity_bicycle_market/Resources/Private/Language/locallang_tca.xlf:tx_entitybicyclemarket_domain_model_bicycle.tx_entitybicyclemarket_condition',
		'config' => [
			'type' => 'select',
			'renderType' => 'selectSingle',
			'items' => [
				['', ''],
				['LLL:EXT:entity_bicycle_market/Resources/Private/Language/locallang_tca.xlf:tx_entitybicyclemarket_domain_model_bicycle.tx_entitybicyclemarket_condition.new', 'new'],
				['LLL:EXT:entity_bicycle_market/Resources/Private/Language/locallang_tca.xlf:tx_entitybicyclemarket_domain_model_bicycle.tx_entitybicyclemarket_condition.as_new', 'asNew'],
				['LLL:EXT:entity_bicycle_market/Resources/Private/Language/locallang_tca.xlf:tx_entitybicyclemarket_domain_model_bicycle.tx_entitybicyclemarket_condition.used', 'used'],
			],
			'size' => 1,
			'maxitems' => 1,
			'eval' => ''
		],
	],
	'tx_entitybicyclemarket_condition_description' => [
		'exclude' => true,
		'label' => 'LLL:EXT:entity_bicycle_market/Resources/Private/Language/locallang_tca.xlf:tx_entitybicyclemarket_domain_model_bicycle.condition_description',
		'config' => [
			'type' => 'text',
			'cols' => 40,
			'rows' => 4,
			'eval' => 'trim'
		]
	],
	'tx_entitybicyclemarket_service_condition' => [
		'exclude' => true,
		'label' => 'LLL:EXT:entity_bicycle_market/Resources/Private/Language/locallang_tca.xlf:tx_entitybicyclemarket_domain_model_bicycle.service_condition',
		'config' => [
			'type' => 'input',
			'size' => 40,
			'eval' => 'trim'
		],
	],
	'tx_entitybicyclemarket_frame_size' => [
		'exclude' => true,
		'label' => 'LLL:EXT:entity_bicycle_market/Resources/Private/Language/locallang_tca.xlf:tx_entitybicyclemarket_domain_model_bicycle.frame_size',
		'config' => [
			'type' => 'input',
			'size' => 4,
			'eval' => 'int'
		]
	],
	'tx_entitybicyclemarket_wheel_size' => [
		'exclude' => true,
		'label' => 'LLL:EXT:entity_bicycle_market/Resources/Private/Language/locallang_tca.xlf:tx_entitybicyclemarket_domain_model_bicycle.wheel_size',
		'config' => [
			'type' => 'input',
			'size' => 4,
			'eval' => 'int'
		]
	],
	'tx_entitybicyclemarket_price' => [
		'exclude' => true,
		'label' => 'LLL:EXT:entity_bicycle_market/Resources/Private/Language/locallang_tca.xlf:tx_entitybicyclemarket_domain_model_bicycle.price',
		'config' => [
			'type' => 'input',
			'size' => 40,
			'eval' => 'double2'
		],
		'displayCond' => 'FIELD:tx_entitybicyclemarket_price_negotiation_basis:!=:1',
	],
	'tx_entitybicyclemarket_price_negotiation_basis' => [
		'exclude' => true,
		'label' => 'LLL:EXT:entity_bicycle_market/Resources/Private/Language/locallang_tca.xlf:tx_entitybicyclemarket_domain_model_bicycle.price_negotiation_basis',
		'config' => [
			'type' => 'check',
			'items' => [
				'1' => [
					'0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
				]
			],
			'default' => 0,
		],
		'onChange' => 'reload',
	],
	'tx_entitybicyclemarket_manufacturer_guarantee' => [
		'exclude' => true,
		'label' => 'LLL:EXT:entity_bicycle_market/Resources/Private/Language/locallang_tca.xlf:tx_entitybicyclemarket_domain_model_bicycle.manufacturer_guarantee',
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
	'tx_entitybicyclemarket_token' => [
		'exclude' => true,
		'label' => 'LLL:EXT:entity_bicycle_market/Resources/Private/Language/locallang_tca.xlf:tx_entitybicyclemarket_domain_model_bicycle.token',
		'config' => [
			'type' => 'input',
			'size' => 40,
			'eval' => 'trim',
			'readOnly' => 1
		],
	],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_entity_domain_model_entity', $tmpEntityBicycleMarketColumns);

$GLOBALS['TCA']['tx_entity_domain_model_entity']['types']['Ps\EntityProduct\Domain\Model\Bicycle']['showitem'] = '
--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
	--palette--;;bicycle_general,
	--palette--;;bicycle_condition,
	--palette--;;bicycle_size,
	--palette--;;bicycle_price,
	--palette--;;bicycle_guarantee,
	--palette--;;bicycle_token,
	--palette--;;bicycle_hidden,
--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
	--palette--;;access,
';