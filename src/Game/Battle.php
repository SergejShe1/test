<?php


namespace Game;


class Battle
{
    private $army1;
    private $army2;


    public function __construct(Unit $army1, Unit $army2)
    {
        $this->army1 = $army1;
        $this->army2 = $army2;
    }


    public function getWinner(): int
    {
       $res1 = $this->army1->getHealth() - $this->army2->getAttack();
       $res2 = $this->army2->getHealth() - $this->army1->getAttack();

            if ($res1 > $res2){
                echo "победитель: ". $this->army1->getName();
            }else{
                echo "победитель: ". $this->army2->getName();
            }

    }
}