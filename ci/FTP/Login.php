<?php
/**	op-unit-ftp:/ci/FTP/Login.php
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

//	config
$config = OP()->Config('ftp');

//	...
$args   = [
	$config['username'],
	$config['password'],
];

//	...
if( $config['host'] === 'localhost' and $config['username'] === 'anonymous' ){
	$result = 'Notice: E_WARNING: ftp_login(): Can\'t change from guest user.';
}else{
	$result = true;
}
$ci->Set($method, $result, $args);
