<?php  

class usuario_model extends CI_Model
{
	public function __construct() { parent::__construct(); }

	public function getLogin($usuario, $pass)
	{
		$sql = "SELECT * FROM usuario WHERE usuario = '".$usuario."' AND pass = '".$pass."';";
		//return $query->result(); selecionar todo
		return $this->db->query($sql)->row();
	}

	public function getConfig(){
		$sql = "SELECT * FROM `config` where id=0;";
		return $this->db->query($sql)->row();;
	}

	public function getUsuarios()
	{
		$SQL = "SELECT organo.nombre,
			       usuario.id,
			       usuario.usuario,
			       usuario.pass,
			       usuario.fk_organo
				FROM usuario, organo 
				WHERE organo.id = usuario.fk_organo;";
		$query = $this->db->query($SQL);
		return $query->result();
	}

	public function getOrgano()
	{
		$SQL = "SELECT * FROM `organo`";
		$query = $this->db->query($SQL);
		return $query->result();
	}


	public function UpdateUsuario($id,$usuario,$pass,$rol)
	{
		$SQL = "UPDATE usuario SET usuario = '".$usuario."', pass = '".$pass."', fk_organo = '".$rol."' WHERE id = '".$id."';";
		$this->db->query($SQL);
	}

	public function UpdateConfig($horah,$grillah)
	{
		$SQL = "UPDATE config SET hora_h='".$horah."',inicio_om='".$grillah."' WHERE id='0';";
		$this->db->query($SQL);
	}





}

?>