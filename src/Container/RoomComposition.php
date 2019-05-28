<?php

namespace Container;

class RoomComposition
{
    /** @var Student */
    private $s1;

    /** @var Student */
    private $s2;

    /**
     * RoomComposition constructor.
     * @param Student $s1
     * @param Student $s2
     */
    public function __construct(Student $s1, Student $s2)
    {
        $this->s1 = $s1;
        $this->s2 = $s2;
    }


}