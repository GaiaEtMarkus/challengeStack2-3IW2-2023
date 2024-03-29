<?php
namespace App\Models;

use App\Core\Sql;

class User extends Sql{

    protected int $id = 0;
    protected int $id_role = 1;
    protected bool $is_verified;
    protected string $firstname;
    protected string $lastname;
    protected string $pseudo;
    protected string $birth_date;
    protected string $email;
    protected string $phone;
    protected string $country;
    protected string $thumbnail;
    protected string $zip_code;
    protected string $address;
    protected string $pwd;
    protected string $token_hash;

    public function hydrate($id = null, $id_role, bool $is_verified, $firstname, $lastname, $pseudo, $birth_date, $email, $phone,  
    $country, $thumbnail, $zip_code, $address, $pwd,  $token_hash) 
    {
        if ($id !== null) {
            $this->setId($id);
        }
        $this->setId_Role($id_role);
        $this->setIs_verified($is_verified);
        $this->setFirstname($firstname);
        $this->setLastname($lastname);
        $this->setPseudo($pseudo);
        $this->setdate($birth_date);
        $this->setEmail($email);
        $this->setPhone($phone);
        $this->setCountry($country);
        $this->setThumbnail($thumbnail);
        $this->setZip_code($zip_code);
        $this->setAddress($address);
        $this->setPwd($pwd);
        $this->setToken_hash($token_hash);
    }
    

    public function changePassword() {
        // To be implemented
    }

    public function modifyProfile() {
        // To be implemented
    }

    public function createTournament() {
        // To be implemented
    }

    public function joinTeam() {
        // To be implemented
    }

    public function participateTournament() {
        // To be implemented
    }

    public function displayProfile() {
        // To be implemented
    }

    public function desinscription() {
        // To be implemented
    }

    public function displayStats() {
        // To be implemented
    }

    public function displayGames() {
        // To be implemented
    }

    ############################# Getters @ Setters ##########################
    #########################################################################

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of id_role
     */ 
    public function getId_role()
    {
        return $this->id_role;
    }

    /**
     * Set the value of id_role
     *
     * @return  self
     */ 
    public function setId_role($id_role)
    {
        $this->id_role = $id_role;

        return $this;
    }

    /**
     * Get the value of firstname
     */ 
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */ 
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lastname
     */ 
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */ 
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of pseudo
     */ 
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set the value of pseudo
     *
     * @return  self
     */ 
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getdate()
    {
        return $this->birth_date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setdate($birth_date)
    {
        $this->birth_date = $birth_date;

        return $this;
    }

    /**
     * Get the value of thumbnail
     */ 
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * Set the value of thumbnail
     *
     * @return  self
     */ 
    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    /**
     * Get the value of address
     */ 
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */ 
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of zip_code
     */ 
    public function getZip_code()
    {
        return $this->zip_code;
    }

    /**
     * Set the value of zip_code
     *
     * @return  self
     */ 
    public function setZip_code($zip_code)
    {
        $this->zip_code = $zip_code;

        return $this;
    }

    /**
     * Get the value of pwd
     */ 
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * Set the value of pwd
     *
     * @return  self
     */ 
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;

        return $this;
    }

    /**
     * Get the value of country
     */ 
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set the value of country
     *
     * @return  self
     */ 
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get the value of token_hash
     */ 
    public function getToken_hash()
    {
        return $this->token_hash;
    }

    /**
     * Set the value of token_hash
     *
     * @return  self
     */ 
    public function setToken_hash($token_hash)
    {
        $this->token_hash = $token_hash;

        return $this;
    }

    /**
     * Get the value of phone
     */ 
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */ 
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of is_verified
     */ 
    public function getIs_verified()
    {
        return $this->is_verified;
    }

    /**
     * Set the value of is_verified
     *
     * @return  self
     */ 
    public function setIs_verified($is_verified)
    {
        $this->is_verified = $is_verified;

        return $this;
    }
}