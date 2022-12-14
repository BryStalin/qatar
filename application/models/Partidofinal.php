<?php
class Partidodinal extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function insertar($datos){

        return $this->db->insert("partido_final",$datos);
    }

    //funcion de consulta de todos los equipos de la base de datos
  public function obtenerTodos(){
    $partidofinal=$this->db->get("partido_final");
    if ($partidofinal->num_rows()>0) {
      return $partidofinal;
    } else {
      return false; //cuaando no hay datos
    }
    }

    //funcion para eliminar u equipos
    public function eliminarPorId($id){
      $this->db->where("id_pgfi_be" ,$id);
      return $this->db->delete("partido_final");

    }

    //consultando equipo por su id
    public function obtenerPorId($id){
      $this->db->where("id_pgfi_be",$id);
      $partidofinal=$this->db->get("partido_final");
    if($partidofinal->num_rows()>0){
      return $partidofinal->row();   //porque vuelve 1 equipo se utiliza row
    }else{
      return false;
    }
    }
    //proceso de actualizacionnd equipos
    public function actualizar($id,$datos){
      $this->db->where("id_pgfi_be",$id);
      return $this->db->update("partido_final",$datos);

    }


}//cierre de clase No borrar


?>


