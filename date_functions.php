<?php
    //Adding date
    $my_date = date_create("2024-03-10 08:09:43");
    date_add($my_date, date_interval_create_from_date_string('1 year, 2 months, 5days'));
    echo date_format($my_date, "d-m-Y G:i:s");
?>