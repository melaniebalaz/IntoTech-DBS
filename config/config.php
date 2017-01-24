<?php

use GuzzleHttp\Psr7\ServerRequest;
use Melanie\Conference\DB\DatabaseConnection;
use Melanie\Conference\DB\OCI8DatabaseConnection;
use Melanie\Conference\DB\PDODatabaseConnection;
use Melanie\Conference\Controller\ErrorController;
use Melanie\Conference\Controller\IndexController;
use Melanie\Conference\Core\DatabaseMigrationProcessor;
use Melanie\Conference\Core\Router;
use Melanie\Conference\Model\Migration\SampleMigration;
use Psr\Http\Message\ServerRequestInterface;

/**
 * This is the configuration for the Auryn dependency injector. It is processed by the FrontController
 *
 * @see https://github.com/rdlowrey/auryn
 */
return [
	/**
	 * By default, the Auryn DIC creates a new instance for an object every time it's needed. If you list a class
	 * here, Auryn won't do that, but reuse the class that already exists.
	 *
	 * Since PHP runs on a per-request basis, you are not really doing any harm by putting your classes here, just
	 * keep it in mind when hunting bugs.
	 */
	'sharedObjects' => [
		PDODatabaseConnection::class
	],
	/**
	 * Interfaces are nice. You can list interfaces and their implementations here in order to create a dependency
	 * inversion.
	 *
	 * For example:
	 *
	 * ```
	 * MyInterface::class => MyImplementation::class,
	 * ```
	 */
	'interfaceImplementations' => [
		\Melanie\Conference\Storage\StorageInterface::class => \Melanie\Conference\Storage\DatabaseImplementation::class,
		ServerRequestInterface::class => ServerRequest::class,
		DatabaseConnection::class => \Melanie\Conference\DB\OCI8DatabaseConnection::class
	],
	/**
	 * Provide the class constructor parameters here. Remember, these are named parameters only, if you need classes,
	 * those will be automatically instantiated from your typehints.
	 */
	'classParameters' => [
		/**
		 * URL routing parameters. Use this to direct requests to your controllers
		 */
		Router::class => [
			':errorHandlers' => [
				404 => [ErrorController::class, 'notFound'],
				405 => [ErrorController::class, 'methodNotAllowed'],
				500 => [ErrorController::class, 'error'],
			],
			':routes' => [
				['GET', '/~balazm96/', IndexController::class, 'index'],
				['GET', '/~balazm96/why', IndexController::class, 'why'],
				['GET', '/~balazm96/location', IndexController::class, 'location'],
				['GET', '/~balazm96/team', IndexController::class, 'team'],
				['GET', '/~balazm96/workshops', IndexController::class, 'workshops'],
				['GET', '/~balazm96/program', IndexController::class, 'program'],
				['POST', '/~balazm96/register', IndexController::class, 'register']
			]
		],
		/**
		 * Database connector. Make sure you are using prepared statements to avoid SQL injection vulnerabilities.
		 *
		 * @see http://php.net/manual/en/pdo.prepared-statements.php
		 */
		OCI8DatabaseConnection::class => [
			':connection_string'      => 'lab',
			':username' => 'a1507236',
			':password'   => 'afk600per',
		],

		/**
		 * Database migration classes.
		 */

		DatabaseMigrationProcessor::class => [

		]
	],
];