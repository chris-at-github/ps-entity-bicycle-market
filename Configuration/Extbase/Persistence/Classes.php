<?php
declare(strict_types = 1);

return [
    \Ps\EntityBicycleMarket\Domain\Model\Bicycle::class => [
        'tableName' => 'tx_entity_domain_model_entity',
        'properties' => [
           'condition' => [
                'fieldName' => 'tx_entitybicyclemarket_condition'
            ],
        ]
    ],
];
