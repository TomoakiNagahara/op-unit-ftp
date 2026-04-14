<?php
/**	op-unit-ftp:/testcase/Connect.php
 *
 * @created    2026-04-16
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
namespace OP;

/* @var $ftp \OP\UNIT\FTP */
$ftp = OP()->Unit('FTP');
D($ftp);

//	...
$config = OP()->Config('ftp');
$host = $config['host'];
$port = $config['port'];
$time = $config['time'];

//	...
$io = $ftp->Connect($host, $port, $time);
D($io);
