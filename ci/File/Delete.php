<?php
/**	op-unit-ftp:/ci/File/Delete.php
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
$args   = '/tmp/ci/ci.txt';
$result = true;
$prepare = function(){
	OP()->Unit('FTP')->File()->Put(__DIR__.'/ci.txt','/tmp/ci/ci.txt');
};
$ci->Set($method, $result, $args, $prepare);
