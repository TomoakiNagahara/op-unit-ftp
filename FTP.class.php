<?php
/**	op-unit-ftp:/FTP.class.php
 *
 * @created    2026-04-12
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
namespace OP\UNIT;

/**	Use
 *
 */
use OP\OP_CORE;
use OP\OP_CI;
use OP\IF_FTP;

/**	FTP
 *
 * @created    2026-04-12
 */
class FTP implements IF_FTP
{
	/**	trait
	 *
	 */
	use OP_CORE, OP_CI;

	/**	Connections are isolated for each instance.
	 *
	 * @created    2026-04-12
	 * @var        \FTP\Connection
	 */
	private $_connection;
}
