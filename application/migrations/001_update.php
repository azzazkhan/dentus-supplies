<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_update extends CI_Migration {

	public function __construct() {
		parent::__construct();
		$this->load->dbforge();
	}

	public function up() {  


		// Table structure for table 'groups'
		$this->dbforge->add_field([
			'id' => [
				'type'           => 'INT',
				'constraint'     => '11',
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'version' => [
				'type'       => 'FLOAT'
			]
		]);
		$this->dbforge->add_key('id', TRUE);

		$this->dbforge->create_table('test');

	}

	public function down() {
		
		$this->dbforge->drop_table('test', TRUE);

	}
}
