<?php
/**	op-unit-ftp:/ci/FTP/Close.php
 *
 * @created    2026-04-18
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
$args   = true;
$result = true;
$ci->Set($method, $result, $args);
