<?php
class Partidogrupo extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function insertar($datos){

        return $this->db->insert("partido_grupo",$datos);
    }

    //funcion de consulta de todos los equipos de la base de datos
  public function obtenerTodos(){
    $partidogrupo=$this->db->get("partido_grupo");
    if ($partidogrupo->num_rows()>0) {
      return $partidogrupo;
    } else {
      return false; //cuaando no hay datos
    }
    }

    //funcion para eliminar u equipos
    public function eliminarPorId($id){
      $this->db->where("id_pg_be" ,$id);
      return $this->db->delete("partido_grupo");

    }

    //consultando equipo por su id
    public function obtenerPorId($id){
      $this->db->where("id_pg_be",$id);
      $partidogrupo=$this->db->get("partido_grupo");
    if($partidogrupo->num_rows()>0){
      return $partidogrupo->row();   //porque vuelve 1 equipo se utiliza row
    }else{
      return false;
    }
    }
    //proceso de actualizacionnd equipos
    public function actualizar($id,$datos){
      $this->db->where("id_pg_be",$id);
      return $this->db->update("partido_grupo",$datos);

    }


}//cierre de clase No borrar


?>

