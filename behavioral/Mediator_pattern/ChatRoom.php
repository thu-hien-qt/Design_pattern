<?php

class ChatRoom 
{
    public function showMessage(User $user, $message)
    {
        $day = new DateTime();
        
        echo $day->format('Y-m-d'). "[".$user->getName()."] : ".$message."<br>";
    }
}