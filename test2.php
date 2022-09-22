<?php 
function display_events_by_month ( array $event ) {
    arsort($event);
 foreach ($event as $key ) {
    echo  date("m-Y ",$key['date']). PHP_EOL. '  the '. $key['name']. 'event will take place on '.  date("d-m-Y ",$key['date']). 'in '. $key['location']. PHP_EOL;

 }
}
display_events_by_month ([
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
    'name' => ' Brainstorming ',
    'date' => '20190705 ',
    'location' => 'Lyon '
    ] ,
    [
    'name' => ' Demonstration client ',
    'date' => '20200205 ',
    'location' => 'Lille '
    ]
    ]) ;
    