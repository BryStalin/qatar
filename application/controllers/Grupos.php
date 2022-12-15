

<?php

class Grupos extends CI_Controller {
	// definiendo contructor de la clase
	public function __construct(){
		parent::__construct();
		$this->load->model("grupo");
	}
// renderiza la vista Asignaturas
	public function index()
	
	{
		$data["listadoHoteles"]=$this->grupo->obtenerTodos();
		$this->load->view('header');
		$this->load->view('grupos/index',$data);
		$this->load->view('footer');

	}
	// renderiza la vista nuevo Asignaturas
   public function nuevo()
  {
    $this->load->view ('header');
    $this->load->view('grupos/nuevo');
    $this->load->view('footer');
  }
// funcion par capturar los valores del
// formuario NUEVO
public function guardarAsignatura(){
	$datos=array(
		"nombre_be"=>$this->input->post('nombre_be'),
		"pais1_be"=>$this->input->post('pais1_be'),
        "pais2_be"=>$this->input->post('pais2_be'),
        "pais3_be"=>$this->input->post('pais3_be'),
        "pais4_be"=>$this->input->post('pais4_be'),
		
		
	);
	print_r($datos);
	if($this->grupo->insertar($datos)){
		$this->session->set_flashdata('confirmacion', 'Grupo Insertado');
	}else{
		$this->session->set_flashdata('error', 'Error al insertar grupo');

	}
	redirect('grupos/index');

 }
 public function borrar($id_grupo_be){

	if ($this->grupo->eliminarPorId($id_grupo_be)) {
		$this->session->set_flashdata('confirmacion', 'Grupo borrado');
	} else {
		$this->session->set_flashdata('error', 'Error al eliminar grupo');
	}
	redirect('grupos/index');
	
	}
	

	public function actualizar($id){
		$data["estudianteEditar"]=$this->grupo->obtenerPorId($id);
		$this->load->view("header");
		$this->load->view("grupos/actualizar",$data);
		$this->load->view("footer");

	}

	public function procesarActualizacion(){
		$datosEstudianteEditado=array(
		"nombre_be"=>$this->input->post('nombre_be'),
		"pais1_be"=>$this->input->post('pais1_be'),
        "pais2_be"=>$this->input->post('pais2_be'),
        "pais3_be"=>$this->input->post('pais3_be'),
        "pais4_be"=>$this->input->post('pais4_be'),
		
		);
		$id=$this->input->post("id_grupo_be");
		if($this->grupo->actualizar($id,$datosEstudianteEditado)){
			redirect('grupos/index');
		}else{
			echo "<h1>ERROR</h1>";
	
		}
	
	 }
}
