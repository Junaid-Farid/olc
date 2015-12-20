<?php

use yii\db\Schema;
use yii\db\Migration;

class m150914_065612_create_users_table extends Migration
{
    public function up(){
        /*addColumn ( $table, $column, $type )*/
        $this->addColumn('users', 'user_name', 'varchar (100) DEFAULT NULL  AFTER `user_id`');
        $this->addColumn('users', 'user_pwd', 'varchar (100) Not NULL  AFTER `user_name`');
    }

    public function down(){
        $this->dropColumn('users', 'user_name');
        $this->dropColumn('users', 'user_pwd');
        return false;
    }
}
