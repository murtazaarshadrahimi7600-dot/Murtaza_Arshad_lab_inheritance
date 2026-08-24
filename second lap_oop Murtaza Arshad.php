<?php


# TASK 1 - Access Modifiers


class StudentAccount
{
    public $name;
    private $studentId;
    protected $department;

    function __construct($name, $studentId, $department)
    {
        $this->name = $name;
        $this->studentId = $studentId;
        $this->department = $department;
    }

    function showInfo()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Student ID: " . $this->studentId . "<br>";
        echo "Department: " . $this->department . "<br>";
    }

    function getStudentId()
    {
        return $this->studentId;
    }
}

$student1 = new StudentAccount(
    "Ahmad",
    1001,
    "Computer Science"
);

$student1->showInfo();

echo "Student ID from method: "
    . $student1->getStudentId();

echo "<hr>";



# TASK 2 - Simple Inheritance


class Person
{
    protected $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    function introduce()
    {
        echo "My name is " . $this->name . "<br>";
    }
}

class Student extends Person
{
    function study()
    {
        echo $this->name . " is studying.<br>";
    }
}

$student2 = new Student("Sara");

$student2->introduce();
$student2->study();

echo "<hr>";



# TASK 3 - Inheritance + Access Modifiers


class Employee
{
    public $company;
    protected $name;
    private $salary;

    function __construct($name, $company, $salary)
    {
        $this->name = $name;
        $this->company = $company;
        $this->salary = $salary;
    }

    function showEmployee()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Company: " . $this->company . "<br>";
        echo "Salary: " . $this->salary . "<br>";
    }

    function getSalary()
    {
        return $this->salary;
    }
}

class Manager extends Employee
{
    function manageTeam()
    {
        echo $this->name . " is managing the team.<br>";
    }
}

$manager1 = new Manager(
    "Ali",
    "Kabul Tech",
    30000
);

$manager1->showEmployee();

echo "Salary from method: "
    . $manager1->getSalary() . "<br>";

$manager1->manageTeam();

?>

1. What does public mean?

public means the property or method can be accessed from anywhere, including outside the class.

2. What does private mean?

private means the property or method can only be accessed inside the class where it is declared.

3. What does protected mean?

protected means the property or method can be accessed inside the class and by its child classes.

4. What is the purpose of extends?

extends is used to create inheritance. It allows a child class to inherit properties and methods from a parent class.

5. Which class is called the parent class?

The class that is inherited from is called the parent clas