<?php
/**	op-unit-ftp:/testcase/File_Put.php
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
if( $io = $ftp->ChangeDirectory('guest') ){
	//	...
	$file_path = __DIR__.'/testcase.txt';
	$io = $ftp->Put($file_path);
	D($io, $file_path);
}
