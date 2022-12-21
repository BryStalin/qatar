<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partidosemis extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('partidosemi');

	}


	public function index()

	{
		$data["listadoPartidosemis"]=$this->partidosemi->obtenerTodos();
		$this->load->view('header');
		$this->load->view('partidosemis/index',$data);
		$this->load->view('footer');
	}


    public function nuevo() {

        $this->load->view('header');
        $this->load->view('partidosemis/nuevo');
        $this->load->view('footer');
    }
	//funcion para capturar los valores del formulario nuevo
	public function guardarPartidosemis(){
		$datosNuevoPartidosemi=array(
			"pais1se_be" =>$this->input->post('pais1se_be'),
			"pais2se_be" =>$this->input->post('pais2se_be'),
      "ciudadse_be" =>$this->input->post('ciudadse_be'),
      "fechase_be" =>$this->input->post('fechase_be'),



		);


		print_r($datosNuevoPartidosemi);
		if($this->partidosemi->insertar($datosNuevoPartidosemi)){
			$this->session->set_flashdata('confirmacion', 'partido Insertado');
		}else{
			$this->session->set_flashdata('error', 'Error al insertar partido');

		}
		redirect('partidosemis/index');
	}
	//funcion para eliminar estudiantes
	public function borrar($id_pgse_be){

	if ($this->partidosemi->eliminarPorId($id_pgse_be)) {
		$this->session->set_flashdata('confirmacion', 'partido borrado');
	} else {
		$this->session->set_flashdata('error', 'Error al eliminar partido');
	}
	redirect('partidosemis/index');

	}
	public function actualizar($id){
		$data["partidosemiEditar"]=$this->partidosemi->obtenerPorId($id);
		$this->load->view("header");
		$this->load->view("partidosemis/actualizar",$data);
		$this->load->view("footer");

	}


	public function procesarActualizacion(){
		$datosPartidosemisEditado=array(
      "pais1se_be" =>$this->input->post('pais1se_be'),
			"pais2se_be" =>$this->input->post('pais2se_be'),
      "ciudadse_be" =>$this->input->post('ciudadse_be'),
      "fechase_be" =>$this->input->post('fechase_be'),


		);

		$id=$this->input->post("id_pgse_be");
		if($this->partidosemi->actualizar($id,$datosPartidosemisEditado)){
			redirect('partidosemis/index');
		}else{
			echo "<h1>ERROR</h1>";

		}
	}





}//cierre de clase

