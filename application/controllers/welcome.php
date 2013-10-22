<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('header');
                $this->load->view('contenido');
                $this->load->view('footer');
	}
        function guardarDatos(){
            $num1 = $this->input->post('num1');
            $num2 = $this->input->post('num2');
            $oper = $this->input->post('oper');
            $resultado=0;
            if($oper =='+')
                $resultado = $num1+$num2;
            if($oper =='-')
                $resultado = $num1-$num2;
            if($oper =='*')
                $resultado = $num1*$num2;
            if($oper =='/')
                $resultado = $num1/$num2;
            
            $this->modelo->guardarDatos($num1,$oper,$num2,$resultado);
        }
        function consultar(){
            $datos= $this->modelo->consultar()->result();
            $data['respuestas']=$datos;
            $suma=0;
            foreach ($datos as $fila):
                $suma = $suma + $fila->res;
            endforeach;
            $data['suma'] = $suma;
            $this->load->view('historial',$data);
        }
        function eliminar($id){
            $id=$this->input->post('id');
            $this->modelo->eliminar($id);
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */