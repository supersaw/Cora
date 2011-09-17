<?php

class m110917_111137_create_messages_table extends CDbMigration
{
	public function up()
	{
    $this->createTable("Messages",array("id"=>'pk',
                                        "message"=>"string NOT NULL",
                                        "reply"=>"int",
                                        "canHaveReply"=>"boolean"));
	}

	public function down()
	{
		$this->dropTable("Messages");
		return true;
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