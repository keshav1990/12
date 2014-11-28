<?php

class TransactionDemo
{
    const DB_HOST = 'localhost';
    const DB_NAME = 'movingmarket';
    const DB_USER = 'root';
    const DB_PASSWORD = '';

    private $conn = null;

    private $message = '';

    /**
     * Open the database connection
     */
    public function __construct()
    {
        // open database connection
        $connectionString = sprintf("mysql:host=%s;dbname=%s",
            TransactionDemo::DB_HOST,
            TransactionDemo::DB_NAME);
        try {
            $this->conn = new PDO($connectionString,
                TransactionDemo::DB_USER,
                TransactionDemo::DB_PASSWORD);

        } catch (PDOException $pe) {
            die($pe->getMessage());
        }
    }

    /**
     * get message
     * @return string the message of transfering process
     */
    public function getMessage()
    {
        return $this->message;
    }

    function start_transtaion()
    {
        $this->conn->beginTransaction();
    }

    function end_transtaion()
    {
        $this->conn->commit();
    }

    function pre($abc)
    {
        $this->conn->prepare($abc);
    }

    /**
     * transfer money from the $from account to $to account
     * @param int $from
     * @param int $to
     * @param float $amount
     * @return true on success or false on failure. The messages are logged in the
     * $messages
     */

    public function insert_contact_details($table, $data)
    {
        // try our best not to use reserved words
        $columns = array_map(function ($column) {
            return "`$column`";
        }, array_keys($data));
        // just use question marks as the place holders
        $values = array_fill(0, count($data), '?');
        // construct the query
        $sql = sprintf('INSERT INTO `%s` (%s) VALUES (%s)',
            $table,
            join(',', $columns),
            join(',', $values)
        );
        // prepare and execute it
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array_values($data));
        $stmt->closeCursor();
        return $this->conn->lastInsertId($table);
    }

    public function insert($table, $data)
    {
        // try our best not to use reserved words
        $columns = array_map(function ($column) {
            return "`$column`";
        }, array_keys($data));
        // just use question marks as the place holders
        $values = array_fill(0, count($data), '?');
        // construct the query
        $sql = sprintf('INSERT INTO `%s` (%s) VALUES (%s)',
            $table,
            join(',', $columns),
            join(',', $values)
        );
        // prepare and execute it
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array_values($data));
        $stmt->closeCursor();
        return $this->conn->lastInsertId($table);
    }

    /**
     * close the database connection
     */
    public function __destruct()
    {
        // close the database connection
        $this->conn = null;
    }
}


?>