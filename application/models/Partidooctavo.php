<?php
class Partidooctavo extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function insertar($datos){

        return $this->db->insert("partido_octavos",$datos);
    }

    //funcion de consulta de todos los equipos de la base de datos
  public function obtenerTodos(){
    $partidooctavo=$this->db->get("partido_octavos");
    if ($partidooctavo->num_rows()>0) {
      return $partidooctavo;
    } else {
      return false; //cuaando no hay datos
    }
    }

    //funcion para eliminar u equipos
    public function eliminarPorId($id){
      $this->db->where("id_pgoc_be" ,$id);
      return $this->db->delete("partido_octavos");

    }

    //consultando equipo por su id
    public function obtenerPorId($id){
      $this->db->where("id_pgoc_be",$id);
      $partidooctavo=$this->db->get("partido_octavos");
    if($partidooctavo->num_rows()>0){
      return $partidooctavo->row();   //porque vuelve 1 equipo se utiliza row
    }else{
      return false;
    }
    }
    //proceso de actualizacionnd equipos
    public function actualizar($id,$datos){
      $this->db->where("id_pgoc_be",$id);
      return $this->db->update("partido_octavos",$datos);

    }


}//cierre de clase No borrar


?>


