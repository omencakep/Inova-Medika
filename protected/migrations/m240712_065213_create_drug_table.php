<?php

class m240712_065213_create_drug_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('drug', array(
            'id' => 'pk',
            'name' => 'string NOT NULL',
            'type' => 'string',
            'price' => 'decimal(10,2)',
            'stock' => 'integer',
            'description' => 'text',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));
	}

	public function down()
	{
		$this->dropTable('drug');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}