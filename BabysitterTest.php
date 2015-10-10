<?php 
// set up my tests 
// figure out my charge for 1 night of work

require_once 'Babysitter.php';

class BabysitterTest extends PHPUnit_Framework_TestCase{
		
	public function testCheckStartTimeNoEarlier5p(){
		$start = new Babysitter();
		$this->assertTrue($start->checkStartTime(5));		
	}
	
	public function testCheckNoChargeWithSameStartEndBedtime(){
		$charge = new Babysitter();
		$this->assertEquals(0, $charge->calcCharge(5, 5, 5));
	}

	public function testCheckChargeWithOneHourWorkAndBedtime(){
		$charge = new Babysitter();
		$this->assertEquals(12, $charge->calcCharge(5, 6, 6));
	}
	
}
?>