<?php

if ( ! defined('BASEPATH') ) exit('No direct script access allowed');

class Migration_add_users extends CI_Migration{
    public function up(){
        $this->dbforge->add_field(array(
            'id' => [
                'type' => 'INT',
                'auto_increment' => TRUE
            ],
            'nie' => [
                'type' => 'VARCHAR',
                'constraint' => '10'
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            // 'sexe' => [
            //     'type' => 'ENUM("homme","femme")',
            //     'default' => 'homme',
            //     'null' => false
            // ],
            'address' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => TRUE
            ],
            'join_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
            'update_date TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
        ));
        $this->dbforge->add_key('id',TRUE);
        $this->dbforge->create_table('student');
    }

    public function down(){
        $this->dbforge->drop_table('student');
    }
}