<?php

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'adlister_db');
define('DB_USER', 'adlister_user');
define('DB_PASS', 'adlister_password');

class Model {

    protected static $dbc;
    protected static $table;

    public $attributes = array();

    /*
     * Constructor
     */
    public function __construct()
    {
        self::dbConnect();
    }

    /*
     * Connect to the DB
     */
    private static function dbConnect()
    {
        // If the static property $dbc has not been set, then assign it.
        if (!self::$dbc)
        {
            self::$dbc = new PDO(
                'mysql:host='.DB_HOST.';
                dbname='.DB_NAME,
                DB_USER,
                DB_PASS
                );

            // Tell PDO to throw exceptions on error
            self::$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo "Connected to " . DB_HOST . "." . PHP_EOL;
        }
    }

    /*
     * Get a value from attributes based on name
     */
    public function __get($name)
    {
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        }

        return null;
    }

    /*
     * Set a new attribute for the object
     */
    public function __set($name, $value)
    {
        // Set the $name key to hold $value in $attributes
        $this->attributes[$name] = $value;
    }

    /*
     * Persist the object to the database
     */
    public function save()
    {
        // @TODO: Perform the proper action - if the `id` is set, this is an update, if not it is a insert
        $query = "SELECT * FROM :table WHERE email = :email";
        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':table', static::$table, PDO::PARAM_STR);
        $stmt->bindValue(':email',      $this->email, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if(!empty($result['email'])) {
            $this->update();
        } else {
            $this->insert();
        }
    }

    protected function insert()
    {
        echo 'insert() method was called by the save() method because the record with this email at $this->attributes["email"] does not exist' . PHP_EOL;
        echo "that means we'll need to insert it!" . PHP_EOL;
        // $query = 'INSERT INTO users columnName VALUES (:)';
        // prepare
        // bind
        // execute
    }

    protected function update()
    {
        // prepare our update
        // bind values
        // execute
    }



        // @TODO: Ensure there are attributes before attempting to save

        // @TODO: Ensure that update is properly handled with the id key

        // @TODO: After insert, add the id back to the attributes array so the object can properly reflect the id

        // @TODO: You will need to iterate through all the attributes to build the prepared query

        // @TODO: Use prepared statements to ensure data security

    /*
     * Find a record based on an id
     */
    public static function find($id)
    {
        // Get connection to the database
        self::dbConnect();

        $table = static::$table;

        // @TODO: Create select statement using prepared statements
        $query = "SELECT * from $table where id = :id";
        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_STR);
        $stmt->execute();

        // @TODO: Store the resultset in a variable named $result
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // The following code will set the attributes on the calling object based on the result variable's contents

        $instance = null;
        if ($result)
        {
            $instance = new static;
            $instance->attributes = $result;
        }
        return $instance;
    }

    /*
     * Find all records in a table
     */
    public static function all()
    {
        self::dbConnect();

        $result = self::$dbc->query('SELECT * FROM users')->fetchAll(PDO::FETCH_ASSOC);

        $instance = null;
        if ($result)
        {
            $instance = new static;
            $instance->attributes = $result;
        }
        return $instance;
    }
}
