<?php 

class Users extends Dbh {

    protected function getUser($name) {
        $sql = "SELECT * FROM users WHERE users_firstname = ?"
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);

        $results = $stmt->fetchAll();
        return $results;

    }

    protected function setUser($firstname, $lastname, $number) {
        $sql = "SELECT * FROM users WHERE users_firstname = ?"
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname, $lastname, $number]);


    }
}
?>