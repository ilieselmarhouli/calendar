<?php 
function display_event ( array $event ) {
 
  echo 'the '. $event['name']. 'event will take place on '. date("d-m-Y ",$event['date']). 'in '. $event['location'];
}
display_event ([
'name' => 'RDV Client Smith ',
'date' => '20191231 ',
'location' => 'Nantes '
]) ;