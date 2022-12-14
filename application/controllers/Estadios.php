


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estadios extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('estadio');

	}


	public function index()

	{
		$data["listadoEstadios"]=$this->estadio->obtenerTodos();
		$this->load->view('header');
		$this->load->view('estadios/index',$data);
		$this->load->view('footer');
	}


    public function nuevo() {

        $this->load->view('header');
        $this->load->view('estadios/nuevo');
        $this->load->view('footer');
    }
	//funcion para capturar los valores del formulario nuevo
	public function guardarEstadios(){
		$datosNuevoEstadio=array(
			"nombre_est" =>$this->input->post('nombre_est'),
			"capacidad_est" =>$this->input->post('capacidad_est'),
            
			
			
			
		);

		// inicio del proceso d guardado de fotografia
		$this->load->library("upload"); //activando libreria de subida de archivos
    	$new_name = "foto_" . time() . "_" . rand(1, 5000);//generanado un nombre aleatorio
    	$config['file_name'] = $new_name;
    	$config['upload_path'] = FCPATH . 'uploads/equipos'; //ruta donde vamos a subir el archivo
    	$config['allowed_types'] = 'jpg|png'; //tipo de archivos permitidos  'pdf|word'
		$config['max_size'] = 2 * 1024; //tamano de la imagen 5mb
    	$this->upload->initialize($config);
    	if ($this->upload->do_upload("foto_jug")) {
			//que se suba con exito
      	$dataSubida = $this->upload->data();
		$datosNuevoEstadio["foto_jug"] = $dataSubida['file_name'];
    }



		print_r($datosNuevoEstadio);
		if($this->estadio->insertar($datosNuevoEstadio)){
			redirect('estadios/index');
		}else{
			echo "<h1>ERROR</h1>";

		}
	}
	//funcion para eliminar estudiantes
	public function borrar($id_est){

	if ($this->estadio->eliminarPorId($id_est)) {
		redirect('estadios/index');
	} else {
		echo "Error al eliminar";
	}
	
	}
	public function actualizar($id){
		$data["estadioEditar"]=$this->estadio->obtenerPorId($id);
		$this->load->view("header");
		$this->load->view("estadios/actualizar",$data);
		$this->load->view("footer");

	}


	public function procesarActualizacion(){
		$datosEstadiosEditado=array(
            "nombre_est" =>$this->input->post('nombre_est'),
			"capacidad_est" =>$this->input->post('capacidad_est'),
			
			
		);

		$id=$this->input->post("id_est");
		if($this->estadio->actualizar($id,$datosEstadiosEditado)){
			redirect('estadios/index');
		}else{
			echo "<h1>ERROR</h1>";

		}
	}





}//cierre de clase
