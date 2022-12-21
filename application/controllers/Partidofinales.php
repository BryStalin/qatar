
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partidofinales extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('partidofinal');

	}


	public function index()

	{
		$data["listadoPartidofinales"]=$this->partidofinal->obtenerTodos();
		$this->load->view('header');
		$this->load->view('partidofinales/index',$data);
		$this->load->view('footer');
	}


    public function nuevo() {

        $this->load->view('header');
        $this->load->view('partidofinales/nuevo');
        $this->load->view('footer');
    }
	//funcion para capturar los valores del formulario nuevo
	public function guardarPartidofinales(){
		$datosNuevoPartidofinal=array(
      "pais1fi_be" =>$this->input->post('pais1fi_be'),
			"pais2fi_be" =>$this->input->post('pais2fi_be'),
      "ciudadfi_be" =>$this->input->post('ciudadfi_be'),
      "fechafi_be" =>$this->input->post('fechafi_be'),



		);


		print_r($datosNuevoPartidofinal);
		if($this->partidofinal->insertar($datosNuevoPartidofinal)){
			$this->session->set_flashdata('confirmacion', 'partido Insertado');
		}else{
			$this->session->set_flashdata('error', 'Error al insertar partido');

		}
		redirect('partidofinales/index');
	}
	//funcion para eliminar estudiantes
	public function borrar($id_pgfi_be){

	if ($this->partidofinal->eliminarPorId($id_pgfi_be)) {
		$this->session->set_flashdata('confirmacion', 'partido borrado');
	} else {
		$this->session->set_flashdata('error', 'Error al eliminar partido');
	}
	redirect('partidofinales/index');

	}
	public function actualizar($id){
		$data["partidfinalEditar"]=$this->partidofinal->obtenerPorId($id);
		$this->load->view("header");
		$this->load->view("partidofinales/actualizar",$data);
		$this->load->view("footer");

	}


	public function procesarActualizacion(){
		$datosPartidofinalesEditado=array(
      "pais1fi_be" =>$this->input->post('pais1fi_be'),
			"pais2fi_be" =>$this->input->post('pais2fi_be'),
      "ciudadfi_be" =>$this->input->post('ciudadfi_be'),
      "fechafi_be" =>$this->input->post('fechafi_be'),


		);

		$id=$this->input->post("id_pgfi_be");
		if($this->partidofinal->actualizar($id,$datosPartidofinalesEditado)){
			redirect('partidofinales/index');
		}else{
			echo "<h1>ERROR</h1>";

		}
	}





}//cierre de clase