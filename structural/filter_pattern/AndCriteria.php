<?php

class AndCriteria implements Criteria
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
        $firstCriteria = $this->criteria->meetCriteria($people);
        return $this->otherCriteria->meetCriteria($firstCriteria);
    }
}