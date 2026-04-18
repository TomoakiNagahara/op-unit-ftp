<?php
/**	op-unit-ftp:/File.class.php
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
use OP\IF_FTP_FILE;

/**	File opration functions of FTP
 *
 * @created    2026-04-18
 */
class File implements IF_FTP_FILE
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

	/**	This is called when an instancated.
	 *
	 * @created    2026-04-18
	 * @param      \FTP\Connection $connection
	 */
	function Connection( \FTP\Connection & $connection )
	{
		$this->_connection = $connection;
	}

	/**	File list.
	 *
	 * @created    2026-04-18
	 * @param      string     $path
	 * @return     array
	 */
	function List( string $path='.' ) : array
	{
		//	...
		$list = [];

		//	...
		foreach( ftp_nlist($this->_connection, $path) as $name ){
			$size = ftp_size( $this->_connection, $name );
			$time = ftp_mdtm( $this->_connection, $name );
			if( $time !== -1 ){
				$utc = gmdate('Y-m-d H:i:s', $time);
			}else{
				$utc = null;
			}
			$list[$name] = [
				'size' => $size,
				'time' => $time,
				'utc'  => $utc,
			];
		}

		//	...
		return $list;
	}

	/**	Put the local file to remote path.
	 *
	 * @created    2026-04-18
	 * @param      string     $path
	 * @param      string     $remote
	 * @return     bool
	 */
	function Put( string $path, string $remote='' ) : bool
	{
		//	...
		return ftp_put( $this->_connection, $remote, $path );
	}

	/**	Get the remote path copy to local path.
	 *
	 * @created    2026-04-18
	 * @param      string     $remote
	 * @param      string     $path
	 * @return     bool
	 */
	function Get( string $remote, string $path ) : bool
	{
		//	...
		return ftp_get( $this->_connection, $path, $remote );
	}

	/**	Delete the remote file.
	 *
	 * @created    2026-04-18
	 * @param      string     $path
	 * @return     bool
	 */
	function Delete( string $path ) : bool
	{
		return ftp_delete( $this->_connection, $path );
	}
}
