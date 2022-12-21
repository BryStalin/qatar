
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partidocuartos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('partidocuarto');

	}


	public function index()

	{
		$data["listadoPartidocuartos"]=$this->partidocuarto->obtenerTodos();
		$this->load->view('header');
		$this->load->view('partidocuartos/index',$data);
		$this->load->view('footer');
	}


    public function nuevo() {

        $this->load->view('header');
        $this->load->view('partidocuartos/nuevo');
        $this->load->view('footer');
    }
	//funcion para capturar los valores del formulario nuevo
	public function guardarPartidocuartos(){
		$datosNuevoPartidocuarto=array(
			"pais1cu_be" =>$this->input->post('pais1cu_be'),
			"pais2cu_be" =>$this->input->post('pais2cu_be'),
      "ciudadcu_be" =>$this->input->post('ciudadcu_be'),
      "fechacu_be" =>$this->input->post('fechacu_be'),



		);


		print_r($datosNuevoPartidocuarto);
		if($this->partidocuarto->insertar($datosNuevoPartidocuarto)){
			$this->session->set_flashdata('confirmacion', 'partido Insertado');
		}else{
			$this->session->set_flashdata('error', 'Error al insertar partido');

		}
		redirect('partidocuartos/index');
	}
	//funcion para eliminar estudiantes
	public function borrar($id_pgcu_be){

	if ($this->partidocuarto->eliminarPorId($id_pgcu_be)) {
		$this->session->set_flashdata('confirmacion', 'partido borrado');
	} else {
		$this->session->set_flashdata('error', 'Error al eliminar partido');
	}
	redirect('partidocuartos/index');

	}
	public function actualizar($id){
		$data["partidocuartoEditar"]=$this->partidocuarto->obtenerPorId($id);
		$this->load->view("header");
		$this->load->view("partidocuartos/actualizar",$data);
		$this->load->view("footer");

	}


	public function procesarActualizacion(){
		$datosPartidocuartosEditado=array(
      "pais1cu_be" =>$this->input->post('pais1cu_be'),
			"pais2cu_be" =>$this->input->post('pais2cu_be'),
      "ciudadcu_be" =>$this->input->post('ciudadcu_be'),
      "fechacu_be" =>$this->input->post('fechacu_be'),


		);

		$id=$this->input->post("id_pgcu_be");
		if($this->partidocuarto->actualizar($id,$datosPartidocuartosEditado)){
			redirect('partidocuartos/index');
		}else{
			echo "<h1>ERROR</h1>";

		}
	}





}//cierre de clase