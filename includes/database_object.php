<?php
// need the database before we start.
require_once(LIB_PATH.DS.'database.php');

class DatabaseObject {

protected static $table_name = "photographs";
  public static function find_all() {
		return static::find_by_sql("SELECT * FROM ".static::$table_name);
  }

  public static function find_by_id($id=0) {
    $result_array = static::find_by_sql("SELECT * FROM ".static::$table_name." WHERE id={$id} LIMIT 1");
		return !empty($result_array) ? array_shift($result_array) : false;
  }

  public static function find_by_sql($sql="") {
    global $database;
    $result_set = $database->query($sql);
    $object_array = array();
    while ($row = $database->fetch_assoc($result_set)) {
      $object_array[] = static::instantiate($row);
    }
    return $object_array;
  }

	private static function instantiate($record) {
		// check that $record exists and is an array
    $class_name = get_called_class();
    $object = new $class_name;
		// Simple, long-form approach:
		// $object->id 				= $record['id'];
		// $object->username 	= $record['username'];
		// $object->password 	= $record['password'];
		// $object->first_name = $record['first_name'];
		// $object->last_name 	= $record['last_name'];

		foreach($record as $attribute=>$value){
		  if($object->has_attribute($attribute)) {
		    $object->$attribute = $value;
		  }
		}
		return $object;
	}

	private function has_attribute($attribute) {
	  // returns an associative array with all attributes
	  //  current values as the value
	  $object_vars = get_object_vars($this);
	  // if the value exists
	  //  return true or false
	  return array_key_exists($attribute, $object_vars);
	}

}
	// http://www.php.net/lsb
?>
