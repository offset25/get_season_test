<?php

// written by Dino Bartolome
// dino.bartolome@gmail.com
// https://github.com/offset25/get_season_test.git
// https://paiza.io/projects/V_JWJL1fBp1QbH6umN_I8A
// gets the season based on date if empty then set to todays date
function get_season($date = null) {
	//console.info(date);
	
	$date_obj = null;
	if (is_null($date)) {
	    $date_obj = new DateTime("NOW");
	} else {
	    $date_obj = new DateTime($date);    
	}
    
    
    $month = $date_obj->format("m");
    $day = $date_obj->format("d");
    //print "day is $day\n";
    //print "month is $month\n";
    //console.info(month);
    //console.info(day);
    // spring runs from march 1 to may 31
    if ($month >= 3 && $month <= 5) {
    	return "spring";
    // summer runs from june 1 to august 31
    } else if ($month >= 6 && $month <= 8) {
    	return "summer";
    // fall runs from september 1 to november 30
    } else if ($month >= 9 && $month <= 11) {
    	return "fall";
    } else {
     	return "winter";
   
    }
    //console.info(date_obj);
}
print get_season("10/30/2019")."\n";
print get_season()."\n";
?>
