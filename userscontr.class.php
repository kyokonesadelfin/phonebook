<?php 

class UsersContr extends Users {
    public function createUser($firstname, $lastname, $number) {    
        
        $this->setUser($firstname, $lastname, $number);
    }
}
?>