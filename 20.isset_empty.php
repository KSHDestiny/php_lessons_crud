<?php
    $assoArray = [
        "name" => "kaung sat",
        "email" => "kaungsat@gmail.com",
        "phone" => "092468135"
    ];

    if(isset($assoArray["phone"])){
        echo "phone exists in assoArray";
    }else {
        echo "No data found";
    }

    if(empty($assoArray["phone"])){
        echo "There is no phone number.";
    }else {
        echo "We have phone number.";
    }
    
?>
