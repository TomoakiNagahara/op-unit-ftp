<?php
/**	op-unit-ftp:/ci/File/List.php
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
$args   = '/tmp/ci/';
$result = [];
$result['/tmp/ci/README.md'] = [
	'size' =>  11,
	'time' =>  1893455940,
	'utc'  => '2029-12-31 23:59:00',
];
$result['/tmp/ci/dir'] = [
	'size' => -1,
	'time' => -1,
	'utc'  => null,
];
$ci->Set($method, $result, $args);
