<?php

namespace Melanie\Conference\Model\Migration;

use Melanie\Conference\Core\AbstractDatabaseMigration;
use PDO;

class SampleMigration extends AbstractDatabaseMigration {


	protected function execute() {
		$this->db->query(/** @lang MySQL */
			'
				CREATE TABLE sometable (
					id INT PRIMARY KEY AUTO_INCREMENT
				)
			'
		);

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          	}
}