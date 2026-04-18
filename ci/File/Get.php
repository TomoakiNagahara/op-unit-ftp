<?php
/**	op-unit-ftp:/ci/File/Get.php
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
$remote = '/tmp/ci/README.md';
$path   = '/tmp/ci.'.time().'.txt';
$args   = [
	$remote,
	$path,
];
$result = true;
$ci->Set($method, $result, $args);
