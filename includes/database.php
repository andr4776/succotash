<?php
require_once(LIB_PATH.DS."config.php");

class MySQLDatabase {

	private $connection;


  function __construct() {
    $this->open_connection();
		  }

	public function open_connection() {
		$this->connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS ,DB_NAME);// assign to the attribute connection
		if(mysqli_connect_errno()) {
      die("Database connection failed: " .
           mysqli_connect_error() .
           " (" . mysqli_connect_errno() . ")"
      );
    }
	}

	public function close_connection() {
		if(isset($this->connection)) {
			mysql_close($this->connection);
			unset($this->connection);
		}
	}

	public function query($sql) {
    $result = mysqli_query($this->connection, $sql);
    $this->confirm_query($result);
    return $result;
  }
	private function confirm_query($result) {
	if (!$result) {
		die("Database query failed.");
	}
}

public function escape_value($string) {
	$escaped_string = mysqli_real_escape_string($this->connection, $string);
	return $escaped_string;
}

	// "database-neutral" methods
  public function fetch_array($result_set) {
    return mysql_fetch_array($result_set);
  }

  public function num_rows($result_set) {
   return mysql_num_rows($result_set);
  }

  public function insert_id() {
    // the last id inserted over the current db connection
    return mysql_insert_id($this->connection);
  }

  public function affected_rows() {
    return mysql_affected_rows($this->connection);
  }



}

$database = new MySQLDatabase(); // database variable which available on any page which loads in this database
$db =& $database; // another reference

?>
