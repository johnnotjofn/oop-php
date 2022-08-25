<?php

require_once './ParentClass.php';

class ChildClass extends ParentClass
{
    public string $name = 'Child Class';

    public function getClass(): string
    {
        return $this->name;
    }

    public function getMethod(): string
    {
        return 'This is a method of ' . $this->getClass();
    }

    public function getParentMethod(): string
    {
        // To call a parent method or properties, use the parent:: 
        return 'This is a method of ' . parent::getClass();
    }
}

$class = new ChildClass();

echo($class->getMethod());
echo '<br>';
echo($class->getParentMethod());