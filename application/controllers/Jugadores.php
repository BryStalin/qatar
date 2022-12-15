
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jugadores extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('jugador');

	}


	public function index()

	{
		$data["listadoJugadores"]=$this->jugador->obtenerTodos();
		$this->load->view('header');
		$this->load->view('jugadores/index',$data);
		$this->load->view('footer');
	}


    public function nuevo() {

        $this->load->view('header');
        $this->load->view('jugadores/nuevo');
        $this->load->view('footer');
    }
	//funcion para capturar los valores del formulario nuevo
	public function guardarJugadores(){
		$datosNuevoJugador=array(
			"nombre_jug_be" =>$this->input->post('nombre_jug_be'),
			"apellido_jug_be" =>$this->input->post('apellido_jug_be'),
            "edad_jug_be" =>$this->input->post('edad_jug_be'),
			"club_jug_be" =>$this->input->post('club_jug_be'),
            "posicion_jug_be" =>$this->input->post('posicion_jug_be'),
			"numero_jug_be" =>$this->input->post('numero_jug_be'),



		);

		// inicio del proceso d guardado de fotografia
		$this->load->library("upload"); //activando libreria de subida de archivos
    	$new_name = "foto_" . time() . "_" . rand(1, 5000);//generanado un nombre aleatorio
    	$config['file_name'] = $new_name;
    	$config['upload_path'] = FCPATH . 'uploads/equipos'; //ruta donde vamos a subir el archivo
    	$config['allowed_types'] = 'jpg|png'; //tipo de archivos permitidos  'pdf|word'
		$config['max_size'] = 2 * 1024; //tamano de la imagen 5mb
    	$this->upload->initialize($config);
    	if ($this->upload->do_upload("foto_jug_be")) {
			//que se suba con exito
      	$dataSubida = $this->upload->data();
		$datosNuevoJugador["foto_jug_be"] = $dataSubida['file_name_be'];
    }



		print_r($datosNuevoJugador);
		if($this->jugador->insertar($datosNuevoJugador)){
			redirect('jugadores/index');
		}else{
			echo "<h1>ERROR</h1>";

		}
	}
	//funcion para eliminar estudiantes
	public function borrar($id_jug_be){

	if ($this->jugador->eliminarPorId($id_jug_be)) {
		redirect('jugadores/index');
	} else {
		echo "Error al eliminar";
	}

	}
	public function actualizar($id){
		$data["jugadorEditar"]=$this->jugador->obtenerPorId($id);
		$this->load->view("header");
		$this->load->view("jugadores/actualizar",$data);
		$this->load->view("footer");

	}


	public function procesarActualizacion(){
		$datosJugadoresEditado=array(
			"nombre_jug_be" =>$this->input->post('nombre_jug_be'),
			"apellido_jug_be" =>$this->input->post('apellido_jug_be'),
            "edad_jug_be" =>$this->input->post('edad_jug_be'),
			"club_jug_be" =>$this->input->post('club_jug_be'),
            "posicion_jug_be" =>$this->input->post('posicion_jug_be'),
			"numero_jug_be" =>$this->input->post('numero_jug_be'),


		);

		$id=$this->input->post("id_jug_be");
		if($this->jugador-->actualizar($id,$datosJugadoresEditado)){
			redirect('equipos/index');
		}else{
			echo "<h1>ERROR</h1>";

		}
	}





}//cierre de clase
