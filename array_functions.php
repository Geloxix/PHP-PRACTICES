<?php 
    $numbers = array(1,2,3,4,5);

    //returns the length of the array
    // echo count($numbers) . '<br>';

    //search in array
    // var_dump(in_array('1', $numbers));

    //Adding an item to array
    // array_push($numbers, 23); //add to the end
    // array_unshift($numbers, 1); //add item in the beginning
    

    //removing item from array
    // array_pop($numbers); //remove the last item
    // array_shift($numbers); // remove the first item
    // unset($numbers[0]); //remove item specifically

    //splitting an array/chunked
    // $chunked_array = array_chunk($numbers, 2);
    // print_r($chunked_array);

    // print_r($numbers);


    //Merging ann array 
    $arr1 = [1,2,3];
    $arr2 = [4,5,6];

    $result = array_merge($arr1, $arr2);

    //spread operator also use for merging
    // $array4 = [...$arr2, ...$arr1];
    // print_r($array4);

    //combining array
    $a1 = [2,4,6];
    $a2 = [2,26,36];

    $a3 = array_combine($a1, $a2); //make the first argument as key and the second as value after combining
    // print_r($a3);

    // $k = array_keys($a3); // returns the array keys
    $k = array_values($a3); //returns the array values
    print_r($k);
?>