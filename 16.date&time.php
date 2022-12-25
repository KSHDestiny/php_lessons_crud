<?php
    date_default_timezone_set("Asia/Yangon"); // default timezone php search 

    // date(format,timestamp)     // datetime format php search
    echo date("d-M-Y h:i");
    echo date("d-M-Y",strtotime("2020-03-15"));

    // date_create() & date_format()    // create & read date 
    $currentDate = date_create(date("c"));
    // var_dump($currentDate);
    echo date_format($currentDate,"d-M-Y(D)");

    // date_add(object, interval)   // interval -> date_interval_create_from_date_string
    $current = date_create(date("d-m-Y"));
    date_add($current,date_interval_create_from_date_string("5 days")); // change actually
    echo date_format($current,'d-m-Y');

    // date_sub(object, interval)
    $last3months = date_create(date("d-m-Y"));
    date_sub($last3months,date_interval_create_from_date_string("3 months")); // change actually
    echo date_format($last3months,'d-m-Y');
?>