<?php
/**	op-unit-ftp:/testcase/Directory_Change.php
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
$path = 'guest/hoge';
$temp = [];
$temp['directory'] = $path;
$temp['current']   = $ftp->Directory()->Current();
$temp['create']    = $ftp->Directory()->Create($path);
$temp['delete']    = $ftp->Directory()->Delete($path);
D( $temp );
