<?php
$employees = [
    [
        'name' => 'Tyler',
        'phone' => '123-456-7890'
    ],
    [
        'name' => 'Bracken',
        'phone' => '911'
    ],  
    [
        'name' => 'Michael',
        'phone' => '555-5555'
    ],
   
];
$count = 1;
foreach($employees as $individualEmployee){
    echo"
    <div style = 'font-size: 12px; color:#999;'>Employee #".$count."</div>
    <div style = 'font-size: 16px; font-weight:bold;'>".$individualEmployee['name']."</div>
    <div style = 'font-size: 14px; margin-bottom:20px;'>".$individualEmployee['phone']."</div>
    <br/>
    ";
    $count ++;
}