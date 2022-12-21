

<?php
class Partidocuarto extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function insertar($datos){

        return $this->db->insert("partido_cuartos",$datos);
    }

    //funcion de consulta de todos los equipos de la base de datos
  public function obtenerTodos(){
    $partidocuarto=$this->db->get("partido_cuartos");
    if ($partidocuarto->num_rows()>0) {
      return $partidocuarto;
    } else {
      return false; //cuaando no hay datos
    }
    }

    //funcion para eliminar u equipos
    public function eliminarPorId($id){
      $this->db->where("id_pgcu_be" ,$id);
      return $this->db->delete("partido_cuartos");

    }

    //consultando equipo por su id
    public function obtenerPorId($id){
      $this->db->where("id_pgcu_be",$id);
      $partidocuarto=$this->db->get("partido_cuartos");
    if($partidocuarto->num_rows()>0){
      return $partidocuarto->row();   //porque vuelve 1 equipo se utiliza row
    }else{
      return false;
    }
    }
    //proceso de actualizacionnd equipos
    public function actualizar($id,$datos){
      $this->db->where("id_pgcu_be",$id);
      return $this->db->update("partido_cuartos",$datos);

    }


}//cierre de clase No borrar


?>
