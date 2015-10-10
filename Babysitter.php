<?php 
// figure out my charge for 1 night of work

class Babysitter {
	
	public function checkStartTime($start){
		return true;
	}
	
	public function calcCharge($startTime, $endTime, $bedTime){
		$total = 0;
		$total += 12 * ($bedTime - $startTime); 
		$total += 8 * ($endTime - $bedTime);
		return $total;
	}
}

?>