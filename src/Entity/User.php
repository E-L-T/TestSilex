<?php


namespace Entity;

/**
 * Description of User
 *
 * @author Etudiant
 */

class User {
    
    /**
     * Primary key for User
     * @var integer 
     */
    private $id;
    
    /**
     * Username of the user
     * @var string 
     */
    private $username;
    
    /**
     * Email of the user
     * @var string 
     */
    private $email;
    
    /**
     * First name of the user
     * @var string 
     */
    private $firstname;
    
    /**
     * Lastname of the user
     * @var string 
     */
    private $lastname;
    
    public function getId() {
        return $this->id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getFirstname() {
        return $this->firstname;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }

}