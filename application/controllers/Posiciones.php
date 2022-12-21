
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posiciones extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('posicion');

	}


	public function index()

	{
		$data["listadoPosiciones"]=$this->posicion->obtenerTodos();
		$this->load->view('header');
		$this->load->view('posiciones/index',$data);
		$this->load->view('footer');
	}


    public function nuevo() {

        $this->load->view('header');
        $this->load->view('posiciones/nuevo');
        $this->load->view('footer');
    }
	//funcion para capturar los valores del formulario nuevo
	public function guardarPosiciones(){
		$datosNuevoPosicion=array(
			"nombre_be" =>$this->input->post('nombre_be'),
			"puntos_be" =>$this->input->post('puntos_be'),
      "goles_be" =>$this->input->post('goles_be'),


		);


		print_r($datosNuevoPosicion);
		if($this->posicion->insertar($datosNuevoPosicion)){
			$this->session->set_flashdata('confirmacion', 'posicion Insertado');
		}else{
			$this->session->set_flashdata('error', 'Error al insertar posicion');

		}
		redirect('posiciones/index');
	}
	//funcion para eliminar estudiantes
	public function borrar($id_pos_be){

	if ($this->posicion->eliminarPorId($id_pos_be)) {
		$this->session->set_flashdata('confirmacion', 'posicion borrado');
	} else {
		$this->session->set_flashdata('error', 'Error al eliminar posicion');
	}
	redirect('posiciones/index');

	}
	public function actualizar($id){
		$data["posicionEditar"]=$this->posicion->obtenerPorId($id);
		$this->load->view("header");
		$this->load->view("posiciones/actualizar",$data);
		$this->load->view("footer");

	}


	public function procesarActualizacion(){
		$datosposicionesEditado=array(
      "nombre_be" =>$this->input->post('nombre_be'),
			"puntos_be" =>$this->input->post('puntos_be'),
      "goles_be" =>$this->input->post('goles_be'),



		);

		$id=$this->input->post("id_pos_be");
		if($this->posicion->actualizar($id,$datosposicionesEditado)){
			redirect('posiciones/index');
		}else{
			echo "<h1>ERROR</h1>";

		}
	}





}//cierre de clase