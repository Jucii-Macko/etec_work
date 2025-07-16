<?php
    class Employee{
        protected $firstname;
        protected $lastname;
        protected $email;
        protected $company;
        protected $address;
        protected $dob;

        public function __construct($firstname, $lastname, $email, $company, $address, $dob){
            $this->firstname = $firstname;
            $this->lastname = $lastname;
            $this->email = $email;
            $this->company = $company;
            $this->address = $address;
            $this->dob = $dob;
        }


        public function output(){
            echo '
                <tr>
                    <td>'.$this -> firstname.'</td>
                    <td>'.$this -> lastname.'</td>
                    <td>'.$this -> email.'</td>
                    <td>'.$this -> company.'</td>
                    <td>'.$this -> address.'</td>
                    <td>'.$this -> dob.'</td>
                </tr>
            ';
        }
    }
?>
