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

	/**	Return FTP connection.
	 *
	 * @created    2026-04-12
	 */
	function Connection( bool $close=false ) : \FTP\Connection | bool
	{
		//	...
		if(!$this->_connection ){
			//	...
			$config = OP()->Config('ftp');
			$host     = $config['host'];
			$port     = $config['port'] ?? 21;
			$time     = $config['time'] ?? 10;
			$username = $config['username'];
			$password = $config['password'];

			//	...
			if( $this->_connection = self::Connect($host, $port, $time) ){
				self::Login($username, $password);
			}
		}

		//	FTP connection close process.
		if( $close ){
			return ftp_close($this->_connection);
		}

		//	...
		return $this->_connection;
	}
}
