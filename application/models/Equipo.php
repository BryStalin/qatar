<?php
class Equipo extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function insertar($datos){

        return $this->db->insert("equipos",$datos);
    }

    //funcion de consulta de todos los equipos de la base de datos
  public function obtenerTodos(){
    $equipo=$this->db->get("equipos");
    if ($equipo->num_rows()>0) {
      return $equipo;
    } else {
      return false; //cuaando no hay datos
    }
    }

    //funcion para eliminar u equipos
    public function eliminarPorId($id){
      $this->db->where("id_equipos_be" ,$id);
      return $this->db->delete("equipos");

    }

    //consultando equipo por su id
    public function obtenerPorId($id){
      $this->db->where("id_equipos_be",$id);
      $equipo=$this->db->get("equipos");
    if($equipo->num_rows()>0){
      return $equipo->row();   //porque vuelve 1 equipo se utiliza row
    }else{
      return false;
    }
    }
    //proceso de actualizacionnd equipos
    public function actualizar($id,$datos){
      $this->db->where("id_equipos_be",$id);
      return $this->db->update("equipos",$datos);

    }


}//cierre de clase No borrar


?>
