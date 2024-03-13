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

    //combining array/array concatenation
    // $a1 = [2,4,6];
    // $a2 = [4,26,36];

    // $a3 = array_combine($a1, $a2); //make the first argument as key and the second as value after combining
    // print_r($a3);

    // $k = array_keys($a3); // returns the array keys
    // $k = array_values($a3); //returns the array values
    // $k = array_flip($a3); //value becomes key and the key becomes value

    // $k = range(1,10);

    //mapping the array
    // $mapped_numbers = array_map(function($numb) {
    //     return "Number" . $numb . "<br/>";
    // }, $k);

    //filtering array
    // $lessThan5 = array_filter($k, fn($numb) => 
    //     $numb <= 5);
    
    //reducing array returns a single value
//     $sum = array_reduce($k, fn($carry, $numb) => 
//         $carry + $numb
//     );

//     print_r($sum);

        // ---------------------------------------------------------------

    // STRING FUNCTIONS

    // use for not parsing the html element it enhance the security of the form field and avoid (XSS)cross site scripting
    // htmlspecialchars()
?>