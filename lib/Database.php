<?php
class Database{
    public $pdo = '';
    const DB_DEBUG = false;

    public function __construct($dataBaseUser, $dataBaseName) {
        $this->pdo = null;

        $path = 'lib/';

        if (substr(BASE_PATH, -6) == 'admin/') {
            $path = '../' . $path;
        }
        //add pass.php to .gitignore
        include $path . 'pass.php';

        $DataBasePassword = '';
        switch (substr($dataBaseUser,strpos($dataBaseUser,"_")+1)){
            case 'reader':
                $dataBasePassword = $dbReader;
                break;
            case 'writer':
                $dataBasePassword = $dbWriter;
                break;
        }

        $query = NULL;

        $dsn = 'mysql:host=webdb.uvm.edu;dbname=';

        if(self::DB_DEBUG){
            echo "<p>Try connecting with phpMyAdmin with these credentials.</p>";
            echo '<p> username :' . $dataBaseUser;
            echo '<p>DSN: ' . $dsn . $dataBaseName;
            echo '<p>Password: ' . $DataBasePassword;
        }

        try{
            $this->pdo = new PDO($dsn . $dataBaseName, $dataBaseUser, $dataBasePassword);

            if(!$this->pdo) {
                if(self::DB_DEBUG) echo '<p>You are NOT connected to the database!</p>';
                return 0;
            }
            else {
                if (self::DB_DEBUG) echo '<p>You are connected to the database!</p>';
                return $this->pdo;
            }
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            if (self::DB_DEBUG) echo "<p>An error occurred while connecting to the database: $error_message </p>";
        }
    }

    public function insert($query, $values = '') {
        $status = false;
        $statement = $this->pdo->prepare($query);

        if (is_array($values)) {
            $status = $statement->execute($values);
        }
        else {
            $status = $statement->execute();
        }
        return $status;
    }

    public function update($query, $values = '') {
        $status = false;
        $statement = $this->pdo->prepare($query);

        if(is_array($values)) {
            $status = $statement->execute($values);
        }
        else {
            $status = $statement->execute();
        }
        return $status;
    }

    public function delete($query, $values = '') {
        $status = false;
        $statement = $this->pdo->prepare($query);

        if(is_array($values)) {
            $status = $statement->execute($values);
        }
        else {
            $status = $statement->execute();
        }
        return $status;
    }

    public function select($query, $values = ''){
        $statement = $this->pdo->prepare($query);

        if(is_array($values)) {
            $statement->execute($values);
        }
        else {
            $statement->execute();
        }

        $recordSet = $statement->fetchAll(PDO::FETCH_ASSOC);

        $statement->closeCursor();

        return $recordSet;
    }

    function displayQuery($query, $values = ''){
        if ($values != ''){
            $needle ='?';
            $haystack = $query;
            foreach ($values as $value) {
                $pos = strpos($haystack, $needle);
                if ($pos != false) {
                    $haystack = substr_replace($haystack, '"' . $value . '"', $pos, strlen($needle));
                }
            }
            $query = $haystack;
        }
        return $query;
    }

// #########################################################################
    // Used the get the value of the autonumber primary key on the last insert
    // sql statement you just performed
    public function lastInsert() {
        $query = "SELECT LAST_INSERT_ID()";

        $statement = $this->pdo->prepare($query);

        $statement->execute();

        $recordSet = $statement->fetchAll();

        $statement->closeCursor();

        if ($recordSet)
            return $recordSet[0]["LAST_INSERT_ID()"];

        return -1;
    }


}
