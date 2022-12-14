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
		"nombre"=>$this->input->post('nombre'),
		"pais1"=>$this->input->post('pais1'),
        "pais2"=>$this->input->post('pais2'),
        "pais3"=>$this->input->post('pais3'),
        "pais4"=>$this->input->post('pais4'),


	);

	if($this->grupo->insertar($datos)){
		redirect('grupos/index');
	}else{
		echo "<h1>ERROR</h1>";

	}

 }
 public function borrar($id_grupo){

	if ($this->grupo->eliminarPorId($id_grupo)) {
		redirect('grupos/index');
	} else {
		echo "Error al eliminar";
	}

	}

	public function actualizar($id){
		$data["estudianteEditar"]=$this->grupo->obtenerPorId($id);
		$this->load->view("header");
		$this->load->view("grupos/actualizar",$data);
		$this->load->view("footer");

	}

	public function procesarActualizacion(){
		$datosEstudianteEditado=array(
		"nombre"=>$this->input->post('nombre'),
		"pais1"=>$this->input->post('pais1'),
        "pais2"=>$this->input->post('pais2'),
        "pais3"=>$this->input->post('pais3'),
        "pais4"=>$this->input->post('pais4'),

		);
		$id=$this->input->post("id_grupo");
		if($this->grupo->actualizar($id,$datosEstudianteEditado)){
			redirect('grupos/index');
		}else{
			echo "<h1>ERROR</h1>";

		}

	 }
}
