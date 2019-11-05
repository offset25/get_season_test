<script>
// written by Dino Bartolome
// dino.bartolome@gmail.com
// https://github.com/offset25/get_season_test.git
// https://js.do/offset25/get_season_test
// gets the season based on date if empty then set to todays date
function get_season(date) {
	//console.info(date);
    let date_obj = null;
    if (typeof date_obj !== 'undefined') {
		date_obj = new Date(date);
    } else {
    	date_obj = new Date();
    }
    let month = date_obj.getMonth();
    let day = date_obj.getDate();
    //console.info(month);
    //console.info(day);
    // spring runs from march 1 to may 31
    if (month >= 2 && month <= 4) {
    	return "spring";
    // summer runs from june 1 to august 31
    } else if (month >= 5 && month <= 7) {
    	return "summer";
    // fall runs from september 1 to november 30
    } else if (month >= 8 && month <= 10) {
    	return "fall";
    } else {
     	return "winter";
   
    }
    //console.info(date_obj);
}

console.info(get_season("10/30/2019"));

console.info(get_season());
</script>
