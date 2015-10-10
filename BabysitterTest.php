<?php 
// set up my tests 
// figure out my charge for 1 night of work

require_once 'Babysitter.php';

class BabysitterTest extends PHPUnit_Framework_TestCase{
		
	public $charge;
	
	public function __construct()
    {
        $this->charge = new Babysitter();
    }
	
	public function testCheckStartTimeNoEarlier5p(){
		$start = new Babysitter();
		$this->assertTrue($start->checkStartTime(5));		
	}
	
	public function testCheckNoChargeWithSameStartEndBedtime(){
		$this->assertEquals(0, $this->charge->calcCharge(5, 5, 5));
	}

	public function testCheckChargeWithOneHourWorkAndBedtime(){
		$this->assertEquals(12, $this->charge->calcCharge(5, 6, 6));
	}

	public function testCheckChargeWithTwoHoursWorkAndBedtimeBetween(){
		$this->assertEquals(20, $this->charge->calcCharge(5, 7, 6));
	}
	
}
?>