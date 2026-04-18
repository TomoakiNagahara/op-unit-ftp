<?php
/**	op-unit-ftp:/Directory.class.php
 *
 * @created    2026-04-18
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
namespace OP\UNIT\FTP;

/**	Use
 *
 */
use OP\OP_CORE;
use OP\OP_CI;
use OP\IF_FTP_DIRECTORY;

/**	Directory opration functions of FTP
 *
 * @created    2026-04-12
 */
class Directory implements IF_FTP_DIRECTORY
{
	/**	trait
	 *
	 */
	use OP_CORE, OP_CI;

	/**	FTP connected connection.
	 *
	 * @created    2026-04-18
	 * @var        \FTP\Connection
	 */
	private $_connection;
}
