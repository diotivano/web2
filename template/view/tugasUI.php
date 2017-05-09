<?php 
require_once 'tugasView.php';
/**
* 
*/
class TugasUI extends View
{
	
	public function tampilLengkap()
	{
		include_once '../sidebar.php';
		$this->end();
	}
}
 ?>