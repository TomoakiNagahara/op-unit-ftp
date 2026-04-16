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

	/**	Connect only, not login.
	 *
	 * @created    2026-04-12
	 * @param      string     $host
	 * @param      int        $port
	 * @param      int        $time
	 * @param      bool       $ssl
	 * @return     \FTP\Connection|false
	 */
	function Connect( string $host, int $port, int $time, bool $ssl=false ) : \FTP\Connection | false
	{
		//	...
		if( $ssl ){
			$connection = ftp_ssl_connect($host, $port, $time);
		}else{
			$connection = ftp_connect($host, $port, $time);
		}

		//	...
		if( $connection ){
			//	...
			$pasv = true;
			if(!$io   = ftp_pasv($connection, $pasv) ){
				$pasv = false;
				$io   = ftp_pasv($connection, $pasv);
			}
		//	D('pasv', $pasv, $io);
			unset($io);
		}

		//	...
		return $connection;
	}

	/**	Login after connect.
	 *
	 * @created    2026-04-12
	 * @param      string     $username
	 * @param      string     $password
	 * @return     bool
	 */
	function Login( string $username, string $password ) : bool
	{
		//	...
		if( $connection = $this->Connection() ){
			$io = ftp_login($connection, $username, $password);
		}

		//	...
		return $io ?? false;
	}

	/**	Close connection.
	 *
	 * @created    2026-04-12
	 * @return     bool
	 */
	function Close() : bool
	{
		return self::Connection(true);
	}
}
