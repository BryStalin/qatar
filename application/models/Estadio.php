

<?php
class Estadio extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function insertar($datos){

        return $this->db->insert("estadios",$datos);
    }

    //funcion de consulta de todos los equipos de la base de datos
  public function obtenerTodos(){
    $jugador=$this->db->get("estadios");
    if ($jugador->num_rows()>0) {
      return $jugador;
    } else {
      return false; //cuaando no hay datos
    }
    }

    //funcion para eliminar u equipos 
    public function eliminarPorId($id){
      $this->db->where("id_est_be" ,$id);
      return $this->db->delete("estadios");

    }
 
    //consultando equipo por su id
    public function obtenerPorId($id){
      $this->db->where("id_est_be",$id);
      $jugador=$this->db->get("estadios");
    if($jugador->num_rows()>0){
      return $jugador->row();   //porque vuelve 1 equipo se utiliza row
    }else{
      return false;
    }
    }
    //proceso de actualizacionnd equipos
    public function actualizar($id,$datos){
      $this->db->where("id_est_be",$id);
      return $this->db->update("estadios",$datos);

    }

  
}//cierre de clase No borrar


?>