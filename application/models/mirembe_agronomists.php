<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Mirembe_Agronomists extends MY_Model {

	function __construct() {
		parent::__construct();
		$this -> incident_name = '';
	}


	function setIncident() {

		$this -> theForm = new \models\Entities\E_Mirembe_Agronomist();
		$this -> theForm -> setLastAssignmentDate($_POST['dater']);
		$this -> em -> persist($this -> theForm);
		$this -> em -> flush();
		$this -> em -> clear();
		redirect("c_front");
	}

	

}
