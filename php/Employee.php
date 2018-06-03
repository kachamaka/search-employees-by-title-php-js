<?php
class Employee{
    public $id;
    public $first_name;
    public $last_name;
    public $year_of_birth;
    public $title;
    public $monthly_salary;
    function __construct($id, $first_name, $last_name, $year_of_birth, $title, $monthly_salary) {   
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->year_of_birth = $year_of_birth;
        $this->title = $title;
        $this->monthly_salary = $monthly_salary;
    }
}
?>