<?php
/**	op-unit-ftp:/ci/File/Put.php
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

//	...
$file   = __DIR__.'/ci.txt';
$path   = '/tmp/ci/ci.txt';
$args   = [
	$file,
	$path,
];
$result = true;
$prepare = function(){};
$cleanup = function(){
	OP()->Unit('FTP')->File()->Delete('/tmp/ci/ci.txt');
};
$ci->Set($method, $result, $args, $prepare, $cleanup);
