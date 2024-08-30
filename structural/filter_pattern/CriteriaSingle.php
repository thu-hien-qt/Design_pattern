<?php

class CriteriaSingle implements Criteria
{
    public function meetCriteria(People $people)
    {
        $singlePersons = new People;

        foreach ($people->getPeople() as $person)
        {
            if ($person->getMaritalStatus() == "single")
            {
                $singlePersons->add($person);
            }
        }
        return $singlePersons;
    }
}
