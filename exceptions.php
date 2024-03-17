<?php
    function vote($age){
        if ($age < 18) {
            throw new Exception('Too young to vote');
        } 

        return 'You can vote!';
    }
    


    try {
        echo vote(10);
        echo vote(19);
    } catch (Exception $e) {
        echo 'Error: '.$e-> getMessage();
    }
?>


