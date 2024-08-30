<?php

class CriteriaMale implements Criteria
{
    public function meetCriteria(People $people)
    {
        $malePersons = new People;

        foreach ($people->getPeople() as $person)
        {
            if ($person->getGender() == "male")
            {
                $malePersons->add($person);
            }
        }
        return $malePersons;
    }
}