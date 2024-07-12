<?php

class m240712_090259_create_tindakan_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('tindakan', array(
            'id' => 'pk',
			'pasien_id' => 'int NOT NULL',
            'nama_pasien' => 'string NOT NULL',
            'keluhan' => 'text',
            'diagnosa' => 'text',
            'tindakan' => 'text',
        ));
	}

	public function down()
	{
		$this->dropTable('tindakan');
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