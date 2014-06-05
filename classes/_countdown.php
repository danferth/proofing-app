<?php
/*
******USAGE******
create new object adn pass arguments(time zone, 24Hr time, day of the week)

$countdown = new countdown_timer('America/Los_Angeles','17:30','Friday');
$time = $countdown->get_time();
$day = $countdown->get_day();
$hour = $countdown->get_hour();
$minute = $countdown->get_minute();
$second = $countdown->get_second();

echo $time;



*/
class countdown_timer{
	private $time;
	private $testSet;
	private $testDiff;
	private $targetDay;
	private $min;
	private $max;
	private $targetTime;
	private $target;
	private $targetDiff;
	private $days;
	private $dayNum;
	private $day;
	private $hours;
	private $hourNum;
	private $hour;
	private $minutes;
	private $minuteNum;
	private $minute;
	private $seconds;
	private $secondNum;
	private $second;

	function __construct($timeZone, $deadTime, $deadDay){
		//set time zone
		date_default_timezone_set($timeZome);
		//set time
		$this->time = time();
		//check range between desired target & time
		$this->testSet = strtotime($deadDay.' '.$deadTime);
		$this->testDiff = (int)($this->testSet - $this->time);
		//target day needs to be 'today' from midnight (63000) and zero hour and next friday there after
		$this->min = '0';
		$this->max = '63000';
		if(($this->testDiff >= $this->min) && ($this->testDiff <= $this->max)){
			$this->targetDay = 'today';
		}
		if(($this->testDiff < $this->min) || ($this->testDiff > $this->max)){
			$this->targetDay = 'next '.$deadDay;
		}
		
		$this->targetTime = $deadTime;
		$this->target = strtotime($this->targetDay.' '.$this->targetTime);
		//set difference from target and time
		$this->targetDiff = (int)($this->target-$this->time);
		//display target
		$this->days = (int)($this->targetDiff/86400);
		$this->dayNum = round($this->days, 0, PHP_ROUND_HALF_DOWN);
		$this->day = str_pad($this->dayNum, 2, '0', STR_PAD_LEFT); 
		
		$this->hours = (int)(($this->targetDiff/3600)-($this->day*24));
		$this->hourNum = round($this->hours, 0, PHP_ROUND_HALF_DOWN);
		$this->hour = str_pad($this->hourNum, 2, '0', STR_PAD_LEFT); 
		
		$this->minutes = (int)(($this->targetDiff/60)-(($this->hour*60)+($this->day*1440)));
		$this->minuteNum = round($this->minutes, 0, PHP_ROUND_HALF_DOWN);
		$this->minute = str_pad($this->minuteNum, 2, '0', STR_PAD_LEFT); 
		
		$this->seconds = (int)(($this->targetDiff/1)-(($this->hours*3600)+($this->days*86400)+($this->minutes*60)));
		$this->secondNum = round($this->seconds, 0, PHP_ROUND_HALF_DOWN);
		$this->second = str_pad($this->secondNum, 2, '0', STR_PAD_LEFT); 
	}

	function get_time(){
		return $this->day.':'.$this->hour.':'.$this->minute.':'.$this->second;
	}
	function get_day(){
		return $this->day;
	}
	function get_hour(){
		return $this->hour;
	}
	function get_minute(){
		return $this->minute;
	}
	function get_second(){
		return $this->second;
	}
}

?>