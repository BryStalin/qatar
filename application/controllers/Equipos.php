
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('equipo');

	}


	public function index()

	{
		$data["listadoEquipos"]=$this->equipo->obtenerTodos();
		$this->load->view('header');
		$this->load->view('equipos/index',$data);
		$this->load->view('footer');
	}


    public function nuevo() {

        $this->load->view('header');
        $this->load->view('equipos/nuevo');
        $this->load->view('footer');
    }
	//funcion para capturar los valores del formulario nuevo
	public function guardarEquipos(){
		$datosNuevoEquipo=array(
			"nombre_equi_be" =>$this->input->post('nombre_equi_be'),
			"confederacion_equi_be" =>$this->input->post('confederacion_equi_be'),



		);

		// inicio del proceso d guardado de fotografia
		$this->load->library("upload"); //activando libreria de subida de archivos
    	$new_name = "fotO_" . time() . "_" . rand(1, 5000);//generanado un nombre aleatorio
    	$config['file_name'] = $new_name;
    	$config['upload_path'] = FCPATH . 'uploads/equipos'; //ruta donde vamos a subir el archivo
    	$config['allowed_types'] = 'jpg|png'; //tipo de archivos permitidos  'pdf|word'
		$config['max_size'] = 2 * 1024; //tamano de la imagen 5mb
    	$this->upload->initialize($config);
    	if ($this->upload->do_upload("imagen_equi_be")) {
			//que se suba con exito
      	$dataSubida = $this->upload->data();
		$datosNuevoEquipo["imagen_equi_be"] = $dataSubida['file_name_be'];
    }



		print_r($datosNuevoEquipo);
		if($this->equipo->insertar($datosNuevoEquipo)){
			redirect('equipos/index');
		}else{
			echo "<h1>ERROR</h1>";

		}
	}
	//funcion para eliminar estudiantes
	public function borrar($id_equipos_be){

	if ($this->equipo->eliminarPorId($id_equipos_be)) {
		redirect('equipos/index');
	} else {
		echo "Error al eliminar";
	}

	}
	public function actualizar($id){
		$data["equipoEditar"]=$this->equipo->obtenerPorId($id);
		$this->load->view("header");
		$this->load->view("equipos/actualizar",$data);
		$this->load->view("footer");

	}


	public function procesarActualizacion(){
		$datosEquiposEditado=array(
			"nombre_equi_be" =>$this->input->post('nombre_equi_be'),
			"confederacion_equi_be" =>$this->input->post('confederacion_equi_be'),


		);

		$id=$this->input->post("id_equipos_be");
		if($this->equipo->actualizar($id,$datosEquiposEditado)){
			redirect('equipos/index');
		}else{
			echo "<h1>ERROR</h1>";

		}
	}





}//cierre de clase
