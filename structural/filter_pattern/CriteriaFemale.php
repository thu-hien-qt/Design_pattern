<?php

class CriteriaFemale implements Criteria
{
    public function meetCriteria(People $people)
    {
        $femalePersons = new People;

        foreach ($people->getPeople() as $person)
        {
            if ($person->getGender() == "female")
            {
                $femalePersons->add($person);
            }
        }
        return $femalePersons;
    }
}