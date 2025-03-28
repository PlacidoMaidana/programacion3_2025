<?php
interface ReportGenerator {
    public function generate($employees);
    }
class EmployeeReportGenerator implements ReportGenerator {
    public function generate($employees) {
    $report = "Employee Report\n";
    foreach ($employees as $employee) {
    $report .= $employee->getName() ."su salario es:".$employee->getSalary() ."\n";
            }
        return $report;
        }
    }

class Employee {
    private $name, $salary;
    public function __construct($name, $salary) {
           $this->name = $name;
           $this->salary = $salary;
        }
        public function getName() { return $this->name; }
        public function getSalary() { return $this->salary; }
   }
    
$reportGenerator = new EmployeeReportGenerator();
$employees = [new Employee("John", 50000), new Employee("Ana", 60000)];
echo $reportGenerator->generate($employees);
    


?>