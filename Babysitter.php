<?php 
// figure out my charge for 1 night of work

class Babysitter {
	
	public function checkStartTime($start){
		return true;
	}
	
	public function calcCharge($startTime, $endTime, $bedTime){
		return 12 * ($bedTime - $startTime);
	}
}

?>