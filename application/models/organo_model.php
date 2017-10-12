<?php  

class organo_model extends CI_Model
{
	public function __construct() { parent::__construct(); }


	public function getPerfil()
	{
		$sql = "SELECT * FROM `organo`";
		//query = $this->db->query($sql)->row();
		//return $query->result();
		return $this->db->query($sql)->result();
	}



	public function getOrgano($organo)
	{
		$sql = "SELECT *
				from fuerza 
				where  fk_organo = ".$organo."
				order by id desc limit 1;";

		//query = $this->db->query($sql)->row();
		//return $query->result();
		return $this->db->query($sql)->row();
	}



	public function getOrganoHistorico($organo,$fecha,$hora)
	{
		$sql = "SELECT *
				from fuerza 
				where  fk_organo = ".$organo."
				and fecha = '".$fecha."'
				and hora = '".$hora."'
				order by id desc limit 1;";

		return $this->db->query($sql)->row();
	}

	public function InsertArmamento($armamento=array()){
		$this->db->insert('armamento', $armamento);
	}

	public function getArmamento($organo)
	{
		$sql = "SELECT * FROM armamento 
				WHERE fecha = (SELECT fecha from fuerza where fk_organo = '".$organo."' order by id desc limit 1) 
				AND hora = (SELECT hora from fuerza where fk_organo = '".$organo."' order by id desc limit 1) 
				AND fk_organo = '".$organo."'
				order by id asc limit 8";

		$query = $this->db->query($sql);
		return $query->result();
	}

	public function InsertOrgano($fuerza=array()){
		$this->db->insert('fuerza', $fuerza);
	}


	public function getGrilla($organo,$grilla){
		$sql = "SELECT * FROM porcentaje 
				where fk_organo = ".$organo." 
				and fk_grilla = ".$grilla."
				order by id desc limit 13;";

		$array = $this->db->query($sql)->result();

	    $keys = array_keys($array);
	    natsort($keys);
	    foreach ($keys as $k){ $new_array[$k] = $array[$k]; }
	    $new_array = array_reverse($new_array, true);

	    
		return $new_array;
	}



	public function getGrillaHistorica($organo,$grilla,$fecha,$hora){
		$sql = "SELECT * FROM porcentaje 
				where fk_organo = ".$organo." 
				and fk_grilla = ".$grilla."
				and fecha = '".$fecha."'
				and hora = '".$hora."'
				order by id desc limit 13;";

		$array = $this->db->query($sql)->result();

	    $keys = array_keys($array);
	    natsort($keys);
	    foreach ($keys as $k){ $new_array[$k] = $array[$k]; }
	    $new_array = array_reverse($new_array, true);

		return $new_array;
	}

	public function InsertGrilla($organo, $grilla=array(), $num, $fecha, $hora){
		for ($i=0; $i<=12; $i++) { 
			$sql = "INSERT INTO porcentaje
			(id, corretaje, porcentaje, fk_grilla, fk_organo, fecha, hora) 
			VALUES (null, '".$i."','".$grilla[$i]."','".$num."','".$organo."','".$fecha."','".$hora."');";

			$this->db->query($sql);
		}
	}




}

?>