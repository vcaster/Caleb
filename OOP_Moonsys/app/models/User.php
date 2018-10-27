<?php
  class User {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }
    //REgister Users
    public function register($data)
    {

      $this->db->query('INSERT INTO empdetails (firstName,lastName,middleName,positionID,deptID,birthDate,
      age,sex,phone,nationality,address,password,email)
      VALUES(:firstName, :lastName, :middleName, :position, :dept, :birthDate, :age, :sex, :phone, :nationality,
      :address, :password, :email) ');
      $this->db->bind(':firstName', $data['fname']);
      $this->db->bind(':lastName', $data['lname']);
      $this->db->bind(':middleName', $data['mname']);
      $this->db->bind(':position', $data['position']);
      $this->db->bind(':dept', $data['dept']);
      $this->db->bind(':birthDate', $data['birthdate']);
      $this->db->bind(':age', $data['age']);
      $this->db->bind(':sex', $data['sex']);
      $this->db->bind(':phone', $data['phonen']);
      $this->db->bind(':nationality', $data['nationality']);
      $this->db->bind(':address', $data['address']);
      $this->db->bind(':password', $data['password']);
      //$this->db->bind(':manger', $data['manger']);
      $this->db->bind(':email', $data['email']);

      if($this->db->execute()){
        return true;
      }else{
        return false;
      }
    }
    // login User
    public function login($email, $password)
    {
      $this->db->query('SELECT * FROM empdetails WHERE email = :email ');
      $this->db->bind(':email', $email);
      // $this->db->bind(':fname', $password);


      $row = $this->db->single();

      // if($row){
      //   return $row;
      // }else{
      //   return fasle;
      // }

      $hashed_password = $row->password;
      if(password_verify($password,$hashed_password)){
        return $row;
      }else{
        return false;
      }
    }

    // Find user by email
    public function findUserByEmail($email){
      $this->db->query('SELECT * FROM test WHERE email = :email');
      $this->db->bind(':email', $email);

      $row = $this->db->single();

      // Check row
      if($this->db->rowCount() > 0){
        return true;
      } else {
      //  die("asa");
        return false;
      }
    }
  }
