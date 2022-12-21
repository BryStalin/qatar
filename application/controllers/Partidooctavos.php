<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partidooctavos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('partidooctavo');

	}


	public function index()

	{
		$data["listadoPartidooctavos"]=$this->partidooctavo->obtenerTodos();
		$this->load->view('header');
		$this->load->view('partidooctavos/index',$data);
		$this->load->view('footer');
	}


    public function nuevo() {

        $this->load->view('header');
        $this->load->view('partidooctavos/nuevo');
        $this->load->view('footer');
    }
	//funcion para capturar los valores del formulario nuevo
	public function guardarPartidooctavos(){
		$datosNuevoPartidooctavo=array(
			"pais1oc_be" =>$this->input->post('pais1oc_be'),
			"pais2oc_be" =>$this->input->post('pais2oc_be'),
      "ciudadoc_be" =>$this->input->post('ciudadoc_be'),
      "fechaoc_be" =>$this->input->post('fechaoc_be'),



		);


		print_r($datosNuevoPartidooctavo);
		if($this->partidooctavo->insertar($datosNuevoPartidooctavo)){
			$this->session->set_flashdata('confirmacion', 'partido Insertado');
		}else{
			$this->session->set_flashdata('error', 'Error al insertar partido');

		}
		redirect('partidooctavos/index');
	}
	//funcion para eliminar estudiantes
	public function borrar($id_pgoc_be){

	if ($this->partidooctavo->eliminarPorId($id_pgoc_be)) {
		$this->session->set_flashdata('confirmacion', 'partido borrado');
	} else {
		$this->session->set_flashdata('error', 'Error al eliminar partido');
	}
	redirect('partidooctavos/index');

	}
	public function actualizar($id){
		$data["partidooctavoEditar"]=$this->partidooctavo->obtenerPorId($id);
		$this->load->view("header");
		$this->load->view("partidooctavos/actualizar",$data);
		$this->load->view("footer");

	}


	public function procesarActualizacion(){
		$datosPartidooctavosEditado=array(
      "pais1oc_be" =>$this->input->post('pais1oc_be'),
      "pais2oc_be" =>$this->input->post('pais2oc_be'),
      "ciudadoc_be" =>$this->input->post('ciudadoc_be'),
      "fechaoc_be" =>$this->input->post('fechaoc_be'),


		);

		$id=$this->input->post("id_pgoc_be");
		if($this->partidooctavo->actualizar($id,$datosPartidooctavosEditado)){
			redirect('partidooctavos/index');
		}else{
			echo "<h1>ERROR</h1>";

		}
	}





}//cierre de clase