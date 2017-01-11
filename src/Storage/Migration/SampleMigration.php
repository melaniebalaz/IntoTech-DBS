<?php

namespace Melanie\Conference\Model\Migration;

use Melanie\Conference\Core\AbstractDatabaseMigration;
use PDO;

class SampleMigration extends AbstractDatabaseMigration {

	/**
	 * @param PDO $pdo
	 */
	protected function execute(PDO $pdo) {
		$pdo->query(/** @lang MySQL */
			'
				CREATE TABLE sometable (
					id INT PRIMARY KEY AUTO_INCREMENT
				)
			'
		);

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          	}
}