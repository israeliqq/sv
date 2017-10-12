<?php  

class ritmo_model extends CI_Model
{
	public function __construct() { parent::__construct(); }

	public function getRitmo($fecha)
	{
		$sql = "SELECT * FROM batalla where fecha = '".$fecha."' order by hora ASC";
		return $this->db->query($sql)->result();
	}

	public function getRitmoID($id)
	{
		$sql = $this->db->query("SELECT * FROM batalla where id = '".$id."';");
		$row = $sql->row();
		return $row;
	}


	public function getRitmoAlerta($fecha,$hora)
	{
		$query = $this->db->query("SELECT * FROM batalla WHERE fecha = '".$fecha."' AND hora = '".$hora."'");
		return $query->row();
	}


    public function InsertRitmo($ritmo, $fecha, $hora, $estado)
	{
		$sql = "INSERT INTO `batalla` (`id`, `data`, `fecha`, `hora`, `estado`) VALUES (NULL, '".$ritmo."', '".$fecha."', '".$hora."', '".$estado."');";
		$this->db->query($sql);
	}


	public function UpdateRitmo($ritmo, $fecha, $hora, $estado, $id)
	{
		$sql = "UPDATE batalla SET data = '".$ritmo."', fecha = '".$fecha."', hora = '".$hora."', estado = '".$estado."' WHERE id = '".$id."';";
		$this->db->query($sql);
	}

	public function DeleteRitmo( $id)
	{
		$sql = "DELETE FROM batalla WHERE id = '".$id."';";
		$this->db->query($sql);
	}


	public function getFrecuencias()
	{
		$sql = "SELECT * FROM frecuencias;";
		$query = $this->db->query($sql);
		return $query->row();
	}


 	public function getEnlaces()
	{
		$sql = "SELECT * FROM enlaces;";
		return $this->db->query($sql)->result();
	}


	public function UpdateFrecuencias($frecuencias=array())
	{
		$this->db->where('id', '1');
		$this->db->update('frecuencias', $frecuencias); 
	}

	public function UpdateEnlaces($enlaces=array(), $id)
	{
		$this->db->where('id', $id);
		$this->db->update('enlaces', $enlaces); 
	}



}

?>