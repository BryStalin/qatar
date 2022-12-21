<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partidogrupos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('partidogrupo');

	}


	public function index()

	{
		$data["listadoPartidogrupos"]=$this->partidogrupo->obtenerTodos();
		$this->load->view('header');
		$this->load->view('partidogrupos/index',$data);
		$this->load->view('footer');
	}


    public function nuevo() {

        $this->load->view('header');
        $this->load->view('partidogrupos/nuevo');
        $this->load->view('footer');
    }
	//funcion para capturar los valores del formulario nuevo
	public function guardarPartidogrupos(){
		$datosNuevoPartidogrupo=array(
			"pais1_be" =>$this->input->post('pais1_be'),
			"pais2_be" =>$this->input->post('pais2_be'),
      "ciudad_be" =>$this->input->post('ciudad_be'),
      "fecha_be" =>$this->input->post('fecha_be'),



		);


		print_r($datosNuevoPartidogrupo);
		if($this->partidogrupo->insertar($datosNuevoPartidogrupo)){
			$this->session->set_flashdata('confirmacion', 'Equipo Insertado');
		}else{
			$this->session->set_flashdata('error', 'Error al insertar equipo');

		}
		redirect('partidogrupos/index');
	}
	//funcion para eliminar estudiantes
	public function borrar($id_pg_be){

	if ($this->partidogrupo->eliminarPorId($id_pg_be)) {
		$this->session->set_flashdata('confirmacion', 'partido borrado');
	} else {
		$this->session->set_flashdata('error', 'Error al eliminar partido');
	}
	redirect('partidogrupos/index');

	}
	public function actualizar($id){
		$data["partidogrupoEditar"]=$this->partidogrupo->obtenerPorId($id);
		$this->load->view("header");
		$this->load->view("partidogrupos/actualizar",$data);
		$this->load->view("footer");

	}


	public function procesarActualizacion(){
		$datosPartidogruposEditado=array(
      "pais1_be" =>$this->input->post('pais1_be'),
	    "pais2_be" =>$this->input->post('pais2_be'),
      "ciudad_be" =>$this->input->post('ciudad_be'),
      "fecha_be" =>$this->input->post('fecha_be'),


		);

		$id=$this->input->post("id_pg_be");
		if($this->partidogrupo->actualizar($id,$datosPartidogruposEditado)){
			redirect('partidogrupos/index');
		}else{
			echo "<h1>ERROR</h1>";

		}
	}





}//cierre de clase

