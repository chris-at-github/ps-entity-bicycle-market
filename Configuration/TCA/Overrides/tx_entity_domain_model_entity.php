<?php
defined('TYPO3_MODE') || die();

// ---------------------------------------------------------------------------------------------------------------------
// Neuer Extbase-Typ
if(isset($GLOBALS['TCA']['tx_entity_domain_model_entity']['columns']['tx_extbase_type']) === true) {
	$GLOBALS['TCA']['tx_entity_domain_model_entity']['columns']['tx_extbase_type']['config']['items'][] = ['LLL:EXT:entity_bicycle_market/Resources/Private/Language/locallang_tca.xlf:tx_entitybicyclemarket_domain_model_bicycle.extbase_type', 'Ps\EntityBicycleMarket\Domain\Model\Bicycle'];
}

// ---------------------------------------------------------------------------------------------------------------------
// Neue Paletten
$GLOBALS['TCA']['tx_entity_domain_model_entity']['palettes']['bicycle_general'] = [
	'showitem' => 'title, --linebreak--, tx_entitybicyclemarket_brand, tx_entitybicyclemarket_item_number, --linebreak--, long_description, --linebreak--, media, '
];

$GLOBALS['TCA']['tx_entity_domain_model_entity']['palettes']['bicycle_condition'] = [
	'showitem' => 'tx_entitybicyclemarket_condition, --linebreak--, tx_entitybicyclemarket_condition_description, --linebreak--, tx_entitybicyclemarket_service_condition,'
];

$GLOBALS['TCA']['tx_entity_domain_model_entity']['palettes']['bicycle_size'] = [
	'showitem' => 'tx_entitybicyclemarket_frame_size, tx_entitybicyclemarket_wheel_size,'
];

$GLOBALS['TCA']['tx_entity_domain_model_entity']['palettes']['bicycle_price'] = [
	'showitem' => 'tx_entitybicyclemarket_price_negotiation_basis, tx_entitybicyclemarket_price, tx_entitybicyclemarket_discount_price,'
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
	'tx_entitybicyclemarket_item_number' => [
		'exclude' => true,
		'label' => 'LLL:EXT:entity_bicycle_market/Resources/Private/Language/locallang_tca.xlf:tx_entitybicyclemarket_domain_model_bicycle.item_number',
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
			'enableRichtext' => true,
			'richtextConfiguration' => 'xoMinimal',
			'fieldControl' => [
				'fullScreenRichtext' => [
					'disabled' => false,
				],
			],
			'cols' => 40,
			'rows' => 4,
			'eval' => 'trim'
		]
	],
	'tx_entitybicyclemarket_service_condition' => [
		'exclude' => true,
		'label' => 'LLL:EXT:entity_bicycle_market/Resources/Private/Language/locallang_tca.xlf:tx_entitybicyclemarket_domain_model_bicycle.service_condition',
		'config' => [
			'type' => 'text',
			'enableRichtext' => true,
			'richtextConfiguration' => 'xoMinimal',
			'fieldControl' => [
				'fullScreenRichtext' => [
					'disabled' => false,
				],
			],
			'cols' => 40,
			'rows' => 2,
			'eval' => 'trim'
		],
	],
	'tx_entitybicyclemarket_frame_size' => [
		'exclude' => true,
		'label' => 'LLL:EXT:entity_bicycle_market/Resources/Private/Language/locallang_tca.xlf:tx_entitybicyclemarket_domain_model_bicycle.frame_size',
		'config' => [
			'type' => 'input',
			'size' => 40,
			'eval' => 'trim',
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
	'tx_entitybicyclemarket_discount_price' => [
		'exclude' => true,
		'label' => 'LLL:EXT:entity_bicycle_market/Resources/Private/Language/locallang_tca.xlf:tx_entitybicyclemarket_domain_model_bicycle.discount_price',
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

$GLOBALS['TCA']['tx_entity_domain_model_entity']['types']['Ps\EntityBicycleMarket\Domain\Model\Bicycle']['showitem'] = '
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

// ---------------------------------------------------------------------------------------------------------------------
// Konfigurationsanpassungen von bestehenden Feldern
$GLOBALS['TCA']['tx_entity_domain_model_entity']['ctrl']['searchFields'] .= ', tx_entitybicyclemarket_brand, tx_entitybicyclemarket_condition_description, tx_entitybicyclemarket_service_condition, tx_entitybicyclemarket_token';
$GLOBALS['TCA']['tx_entity_domain_model_entity']['ctrl']['label_userFunc'] = \Ps\Entity\Service\TcaService::class . '->getRecordTitle';
$GLOBALS['TCA']['tx_entity_domain_model_entity']['ctrl']['label_userFunc_options'] = [\Ps\EntityBicycleMarket\Domain\Model\Bicycle::class => \Ps\EntityBicycleMarket\Service\BicycleTcaService::class . '->getTitle'];

$GLOBALS['TCA']['tx_entity_domain_model_entity']['types']['Ps\EntityBicycleMarket\Domain\Model\Bicycle']['columnsOverrides']['media']['config']['minitems'] = 1;
$GLOBALS['TCA']['tx_entity_domain_model_entity']['types']['Ps\EntityBicycleMarket\Domain\Model\Bicycle']['columnsOverrides']['media']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants'] = [
	'listing' => [
		'title' => 'LLL:EXT:entity_bicycle_market/Resources/Private/Language/locallang_tca.xlf:tx_entitybicyclemarket_domain_model_bicycle.image.listing',
		'allowedAspectRatios' => [
			'5_3' => [
				'title' => 'LLL:EXT:xo/Resources/Private/Language/locallang_tca.xlf:tx_xo_crop_variant.ratio.5_3',
				'value' => 5 / 3
			],
		],
		'selectedRatio' => '5_3',
	],
	'fullsize' => [
		'title' => 'LLL:EXT:entity_bicycle_market/Resources/Private/Language/locallang_tca.xlf:tx_entitybicyclemarket_domain_model_bicycle.image.fullsize',
		'allowedAspectRatios' => [
			'5_3' => [
				'title' => 'LLL:EXT:xo/Resources/Private/Language/locallang_tca.xlf:tx_xo_crop_variant.ratio.5_3',
				'value' => 5 / 3
			],
		],
		'selectedRatio' => '5_3',
	],
];