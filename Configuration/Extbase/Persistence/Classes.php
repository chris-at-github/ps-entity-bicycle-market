<?php
declare(strict_types=1);

return [
	\Ps\EntityBicycleMarket\Domain\Model\Bicycle::class => [
		'tableName' => 'tx_entity_domain_model_entity',
		'recordType' => \Ps\EntityBicycleMarket\Domain\Model\Bicycle::class,
		'properties' => [
			'brand' => [
				'fieldName' => 'tx_entitybicyclemarket_brand'
			],
			'condition' => [
				'fieldName' => 'tx_entitybicyclemarket_condition'
			],
			'conditionDescription' => [
				'fieldName' => 'tx_entitybicyclemarket_condition_description'
			],
			'serviceCondition' => [
				'fieldName' => 'tx_entitybicyclemarket_service_condition'
			],
			'frameSize' => [
				'fieldName' => 'tx_entitybicyclemarket_frame_size'
			],
			'wheelSize' => [
				'fieldName' => 'tx_entitybicyclemarket_wheel_size'
			],
			'priceNegotiationBasis' => [
				'fieldName' => 'tx_entitybicyclemarket_price_negotiation_basis'
			],
			'price' => [
				'fieldName' => 'tx_entitybicyclemarket_price'
			],
			'manufacturerGuarantee' => [
				'fieldName' => 'tx_entitybicyclemarket_manufacturer_guarantee'
			],
			'token' => [
				'fieldName' => 'tx_entitybicyclemarket_token'
			],
		]
	],
];
