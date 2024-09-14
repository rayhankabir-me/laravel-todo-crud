<?php

class Employee {
    private $name;
    private $position;
    private $salary;

    public function __construct($name, $position, $salary)
    {
        $this->name = $name;
        $this->position = $position;
        $this->salary = $salary;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPosition($position)
    {
        $this->position = $position;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}

$rayhan = new Employee("Rayhan", "Developer", 50000);
echo "Employee Name: ". $rayhan->getName(). "<br>";
echo "Employee Position: ". $rayhan->getPosition(). "<br>";
echo "Employee Salary: ". $rayhan->getSalary(). "<br>";

//updating rayhan's salary using setSalary method
$rayhan->setSalary(70000);
echo "Updated Salary: ". $rayhan->getSalary()."<br>";

//updating rayhan's position using setPosition method
$rayhan->setSalary("CEO");
echo "Updated Position: ". $rayhan->getPosition();