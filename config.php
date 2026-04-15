<?php
/**	op-unit-ftp:/config.php
 *
 * @created    2026-04-15
 * @license    Apache-2.0
 * @package    op-unit-ftp
 * @author     Tomoaki Nagahara
 * @copyright  Tomoaki Nagahara
 */

/**	Declare strict type
 *
 */
declare(strict_types=1);

/**	Namespace
 *
 */
namespace OP\UNIT;

/**
 *
 */
return [
	'host'       => 'localhost',
	'port'       =>  21, // Port number
	'time'       =>  10, // timeout
	'username'   => 'anonymous',
	'password'   => 'anything',
];
