<?php include '../private/session.php' ?>
<?php include 'shared/top.php' ?>
<div class="content-container" text-align="center">
<?php


    $world = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
    "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
    "Finland"=>"Helsinki", "France" => "Paris",
    "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
    "Germany" => "Berlin", "Greece" => "Athens",
    "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
    "Portugal"=>"Lisbon", "Spain"=>"Madrid",
    "Sweden"=>"Stockholm", "United Kingdom"=>"London",
    "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
    "Czech Republic"=>"Prague", "Estonia"=>"Tallin",
    "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta",
    "Austria" => "Vienna", "Poland"=>"Warsaw") ;
    
    // start table
    echo "<table border = 1>
        <th bgcolor=#c00>Country</th>
        <th bgcolor=#c00>City</th>";
    // print all countries and city
    foreach($world as $country => $capital) {

		echo "<tr   ><td>" . $country . "</td> <td>" . $capital . "</td></tr>";	

    }
    // Close table
    echo "</table>"; 
            
  
   
?>
</div>
<?php include 'shared/bottom.php' ?> 