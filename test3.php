<?php
function display_events_between_months ( array $event ) {
    
  //  if ($event > '202005') {
$val1 = $event[0]['date'];
$val2 = $event[1]['date'];
$val3 = $event[2]['date'];
$val4 = $event[3]['date'];
$val5 = $event[4]['date'];

 if ($val5 & $val4 < $val3 ) {
    echo  $event[0]['date']. PHP_EOL. '  the '. $event[0]['name']. 'event will take place on '.  $event[0]['date']. 'in '. $event[0]['location']. PHP_EOL;
    echo  $event[1]['date']. PHP_EOL. '  the '. $event[1]['name']. 'event will take place on '.  $event[1]['date']. 'in '. $event[1]['location']. PHP_EOL;
    echo  '  the '. $event[2]['name']. 'event will take place on '.  $event[2]['date']. 'in '. $event[2]['location']. PHP_EOL;

 }
else {
    echo "non";
}
}
display_events_between_months ([
    [
    'name' => 'Reunion Client ',
    'date' => '20200505 ',
    'location' => 'Nantes '
    ] ,
    [
    'name' => 'Affinage sprint 2',
    'date' => '20200705 ',
    'location' => 'Nantes '
    ] ,
    [
    'name' => 'RDV Pro ',
    'date' => '20200705 ',
    'location' => 'Paris '
    ] ,
    [
    'name' => 'Brainstorming ',
    'date' => '20190705 ',
    'location' => 'Lyon '
    ] ,
    [
    'name' => 'Demonstration client ',
    'date' => '20200205 ',
    'location' => 'Lille '
    ]
    ], '202005', '202007') ;
    