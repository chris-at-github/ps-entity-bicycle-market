CREATE TABLE tx_entity_domain_model_entity (
	tx_entitybicyclemarket_brand varchar(255) DEFAULT '' NOT NULL,
	tx_entitybicyclemarket_condition varchar(10) DEFAULT '' NOT NULL,
	tx_entitybicyclemarket_condition_description text,
	tx_entitybicyclemarket_service_condition text,
	tx_entitybicyclemarket_frame_size int(11) DEFAULT '0' NOT NULL,
	tx_entitybicyclemarket_wheel_size int(11) DEFAULT '0' NOT NULL,
	tx_entitybicyclemarket_price double(11,2) DEFAULT '0.00' NOT NULL,
	tx_entitybicyclemarket_price_negotiation_basis smallint(5) unsigned DEFAULT '0' NOT NULL,
	tx_entitybicyclemarket_manufacturer_guarantee smallint(5) unsigned DEFAULT '0' NOT NULL,
	tx_entitybicyclemarket_token varchar(10) DEFAULT '' NOT NULL
);
