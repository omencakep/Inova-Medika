<?php

class m240712_064406_create_patient_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('patient', array(
            'id' => 'pk',
            'name' => 'string NOT NULL',
            'age' => 'integer',
            'address' => 'string',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));
	}

	public function down()
	{
		$this->dropTable('patient');
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