<?php
class Partidosemi extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function insertar($datos){

        return $this->db->insert("partido_semis",$datos);
    }

    //funcion de consulta de todos los equipos de la base de datos
  public function obtenerTodos(){
    $partidosemi=$this->db->get("partido_semis");
    if ($partidosemi->num_rows()>0) {
      return $partidosemi;
    } else {
      return false; //cuaando no hay datos
    }
    }

    //funcion para eliminar u equipos
    public function eliminarPorId($id){
      $this->db->where("id_pgse_be" ,$id);
      return $this->db->delete("partido_semis");

    }

    //consultando equipo por su id
    public function obtenerPorId($id){
      $this->db->where("id_pgse_be",$id);
      $partidosemi=$this->db->get("partido_semis");
    if($partidosemi->num_rows()>0){
      return $partidosemi->row();   //porque vuelve 1 equipo se utiliza row
    }else{
      return false;
    }
    }
    //proceso de actualizacionnd equipos
    public function actualizar($id,$datos){
      $this->db->where("id_pgse_be",$id);
      return $this->db->update("partido_semis",$datos);

    }


}//cierre de clase No borrar


?>


