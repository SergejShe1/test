<?php


namespace Container;


use Shape\ShapeInterface;

class ShapeContainer implements ShapeInterface
{

    /** @var Shapes[] */
    protected $shapes;

    public function addStudent(Student $shapes){
        $this->shapes[] = $shapes;

        return $this;
    }

}