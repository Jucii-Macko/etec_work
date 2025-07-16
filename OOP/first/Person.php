<?php
    class Person{
        protected $id;
        protected $name;
        protected $sex;
        protected $email;

        public function __construct($id, $name, $sex, $email)
        {
            $this -> id = $id;
            $this -> name = $name;
            $this -> sex = $sex;
            $this -> email = $email;
        }
        public function output(){
            echo 'ID = '.$this->id.'<br>';
            echo 'Name = '.$this->name.'<br>';
            echo 'Sex = '.$this->sex.'<br>';
            echo 'Email = '.$this->email.'<br>';
        }
    }
    // $per=new Person(1, 'Huy', 'Nam', 'huy@.com');
    // $per->output();
?>