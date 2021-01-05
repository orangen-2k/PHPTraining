<?php
class Person 
{
		// Phạm vi truy cập
		public  $fullName = "Nguyễn Hữu PHP";
		public $age ;
		 // Các phương thức
		public static function getFullName()
		{
			  return $this->fullName;
		}
		
} 
$per  = new Person();
echo $per->fullName = "Nguyễn Văn PHP <br/>";
echo $per->age = 24;
?>