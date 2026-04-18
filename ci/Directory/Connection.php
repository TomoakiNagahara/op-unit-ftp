<?php
/**	op-unit-ftp:/ci/Directory/Connection.php
 *
 * @created    2026-04-19
 * @version    1.0
 * @package    op-unit-ftp
 * @copyright  Tomoaki Nagahara
 */

/**	Declare strict type
 *
 */
declare(strict_types=1);

/**	Namespace
 *
 */
namespace OP;

//	...
$method = basename(__FILE__);
$method = explode('.', $method)[0];

/* @var $ci \OP\UNIT\CI\CI_Config */

/* @var $ftp \OP\UNIT\FTP */
$ftp = OP()->Unit('FTP');
$connection = $ftp->Connection();

//	...
$args   = $connection;
$result = null;
$ci->Set($method, $result, $args);
