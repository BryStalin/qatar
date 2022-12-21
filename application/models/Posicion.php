<?php
class Posicion extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function insertar($datos){

        return $this->db->insert("tabla_posiciones",$datos);
    }

    //funcion de consulta de todos los posiciones de la base de datos
  public function obtenerTodos(){
    $posicion=$this->db->get("tabla_posiciones");
    if ($posicion->num_rows()>0) {
      return $posicion;
    } else {
      return false; //cuaando no hatabla_posicionestabla_posiciones
    } 
    } 
    //funcion para eliminar u posicions
    public function eliminarPorId($id){
      $this->db->where("id_pos_be" ,$id);
      return $this->db->delete("tabla_posiciones");

    }

    //consultando posicion por su id
    public function obtenerPorId($id){
      $this->db->where("id_pos_be",$id);
      $posicion=$this->db->get("tabla_posiciones");
    if($posicion->num_rows()>0){
      return $posicion->row();   //porque vuelve 1 posicion se utiliza row
    }else{
      return false;
    }
    }
    //proceso de actualizacionnd posiciones
    public function actualizar($id,$datos){
      $this->db->where("id_pos_be",$id);
      return $this->db->update("tabla_posiciones",$datos);

    }


}//cierre de clase No borrar


?>

