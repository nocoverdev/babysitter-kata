<?php 
// set up my tests 
// figure out my charge for 1 night of work

require_once 'Babysitter.php';

class BabysitterTest extends PHPUnit_Framework_TestCase{
	public function testCheckStartTimeNoEarlier5p(){
		$start = new Babysitter();
		$this->assertTrue($start->checkStartTime(5));		
	}
}
?>