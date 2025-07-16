<?php
    include 'Person.php';

    class Student extends Person{
        private $course;
        private $time;

        public function __construct($id, $name, $sex, $email, $course, $time)
        {
            parent::__construct($id, $name, $sex, $email);
            $this->course = $course;
            $this->time = $time;
        }

        public function output()
        {
            parent::output();
            echo 'Course = '.$this->course.'<br>';
            echo 'Time = '.$this->time.'<br>';
        }
    }
    $student = new Student('E001', 'Dara', 'Male', 'dara@me.com', 'HTML', '8:00 AM');
    $student->output();
?>