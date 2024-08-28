<?php

class OrCriteria implements Criteria
{
    private $criteria;
    private $otherCriteria;

    public function __construct(Criteria $criteria, Criteria $otherCriteria)
    {
        $this->criteria = $criteria;
        $this->otherCriteria = $otherCriteria;
    }

    public function meetCriteria(People $people)
    {
        $firstCriteriaPP = $this->criteria->meetCriteria($people);
        $otherCriteriaPP = $this->otherCriteria->meetCriteria($people);
        foreach ($otherCriteriaPP->getPeople() as $person1) {
            $shouldAdd = true;
            foreach ($firstCriteriaPP->getPeople() as $person2) {
                if ($person1->getName() == $person2->getName())
                {
                    $shouldAdd = false;
                    break;
                } 
            }
            if ($shouldAdd) {
                $firstCriteriaPP->add($person1);
            }
        }
        return $firstCriteriaPP;
    }
}
