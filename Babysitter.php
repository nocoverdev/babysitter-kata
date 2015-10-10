<?php 
// figure out my charge for 1 night of work

class Babysitter {
	
	public function checkStartTime($start){
		return true;
	}
	
	public function calcCharge($startTime, $endTime, $bedTime){
		$total = 0;
		$total += 12 * ($bedTime - $startTime);
		if($endTime <= 4 && $endTime >= 1 ){
			$total += 8 * (12 - $bedTime);
			$total += 16 * $endTime;
		} else {
			$total += 8 * ($endTime - $bedTime);
		}
		
		return $total;
	}
}

?>