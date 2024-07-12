<?php

class m240712_064935_create_employee_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('employee', array(
            'id' => 'pk',
            'name' => 'string NOT NULL',
            'email' => 'string NOT NULL',
            'phone' => 'string',
            'address' => 'string',
            'position' => 'string',
            'salary' => 'decimal(10,2)',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ));
	}

	public function down()
	{
		$this->dropTable('employee');
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