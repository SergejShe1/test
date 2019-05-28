<?php


namespace Container;


class Room
{
    /** @var Student[] */
    protected $students;

    public function addStudent(Student $student){
        $this->students[] = $student;

        return $this;
    }
}