

<?php
class Grupo extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function insertar($datos){

        return $this->db->insert("grupos",$datos);
    }

    //funcion de consulta de todos los estudientes de la base de datos
  public function obtenerTodos(){
    $estudiantes=$this->db->get("grupos");
    if ($estudiantes->num_rows()>0) {
      return $estudiantes;
    } else {
      return false; //cuaando no hay datos
    }
    }

    //funcion para eliminar un estudiante 
    public function eliminarPorId($id){
      $this->db->where("id_grupo_be" ,$id);
      return $this->db->delete("grupos");

    }

    //consultando estudiante por su id
    public function obtenerPorId($id){
      $this->db->where("id_grupo_be",$id);
      $estudiante=$this->db->get("grupos");
    if($estudiante->num_rows()>0){
      return $estudiante->row();   //porque vuelve 1 estudiante se utiliza row
    }else{
      return false;
    }
    }
    //proceso de actualizacionnd eestudiante
    public function actualizar($id,$datos){
      $this->db->where("id_grupo_be",$id);
      return $this->db->update("grupos",$datos);

    }

  
}//cierre de clase No borrar


?>
