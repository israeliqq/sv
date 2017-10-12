<?php  

class brief_model extends CI_Model
{
	public function __construct() { parent::__construct(); }

	public function getBrief()
	{
		$sql = "SELECT * FROM `fuerza`";
		return $this->db->query($sql)->result();
	}

		public function getBriefCustom($org, $fecha)
	{
		$sql = "SELECT * FROM fuerza where fk_organo = '".$org."' and fecha = '".$fecha."';";
		return $this->db->query($sql)->result();
	}

	public function Update(){
		$sql = "SELECT * FROM `config` where id=0;";
		$this->db->query($sql);
	}

	public function Delete(){
		$sql = "SELECT * FROM `config` where id=0;";
		$this->db->query($sql);
	}



}

?>