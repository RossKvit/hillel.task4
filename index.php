<?php

class Worker{
    private $name;
    private $age;
    private $salary;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName( string $name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     * @return boolean
     */
    public function setAge( int $age)
    {
        if( $this->checkAge( $age ) ){
            $this->age = $age;
            return true;
        }else{
            return false;
        }
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary( int $salary)
    {
        $this->salary = $salary;
    }

    /**
     * @param mixed $salary
     *
     * @return int|boolean
     */
    private function checkAge( int $age ){
        return $age < 1 || $age > 100 ? false: $age;
    }

}

$worker1 = new Worker();
$worker1->setName('Иван');
$worker1->setAge(25);
$worker1->setSalary(1000);

$worker2 = new Worker();
$worker2->setName('Вася');
$worker2->setAge(26);
$worker2->setSalary(2000);

function showWorkerInfo( Worker $worker ){
    echo 'Name: '.$worker->getName(). '<br>';
    echo 'Age: '.$worker->getAge(). '<br>';
}

showWorkerInfo( $worker1 );
showWorkerInfo( $worker2 );

echo 'Salary sum: '.( $worker2->getSalary() + $worker1->getSalary() ). '<br>';
echo 'Age sum: '.( $worker2->getAge() + $worker1->getAge() ). '<br>';

