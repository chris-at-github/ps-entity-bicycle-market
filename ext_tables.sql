CREATE TABLE tx_entity_domain_model_entity (


	brand varchar(255) DEFAULT '' NOT NULL,
	tx_entitybicyclemarket_condition int(11) DEFAULT '0' NOT NULL,
	condition_description text,
	service_condition varchar(255) DEFAULT '' NOT NULL,
	frame_size int(11) DEFAULT '0' NOT NULL,
	wheel_size int(11) DEFAULT '0' NOT NULL,
	price double(11,2) DEFAULT '0.00' NOT NULL,
	price_negotiation_basis smallint(5) unsigned DEFAULT '0' NOT NULL,
	manufacturer_guarantee smallint(5) unsigned DEFAULT '0' NOT NULL


);
