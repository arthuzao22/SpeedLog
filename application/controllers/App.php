<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	public function index()
	{
		echo '<link rel="shortcut icon" href="'. base_url('images/favicon.png') .'">';
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}

	public function clientes() {
		$this->load->model('Model_app');	
		$dados['pedidos']=$this->Model_app->get_pedidos();
		echo '<link rel="shortcut icon" href="'. base_url('images/favicon.png') .'">';
		$this->load->view('clientes');
		$this->load->view('carousel', $dados);
		$this->load->view('footer');
	}

	public function login() {
		echo '<link rel="shortcut icon" href="'. base_url('images/favicon.png') .'">';
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}

	public function motoboys()
	{
		// $this->load->view('header');
		$this->load->model('Model_app');
		$dadosM['pedidosM'] = $this->Model_app->get_pedidosM();
		echo '<link rel="shortcut icon" href="' . base_url('images/favicon.png') . '">';
		$this->load->view('motoboys');
		$this->load->view('carouselM', $dadosM);
		$this->load->view('footer');
	}

	public function motoboysM()
	{
		$this->load->model('Model_app');
		$dadosMotoboys['dadosMotoboys'] = $this->Model_app->get_pedidosmotoboys();
		echo '<link rel="shortcut icon" href="' . base_url('images/favicon.png') . '">';
		$this->load->view('motoboys');
		$this->load->view('carouselMotoboy', $dadosMotoboys);
		$this->load->view('footer');
	}

	public function admin() {
		echo '<link rel="shortcut icon" href="'. base_url('images/favicon.png') .'">';
		$this->load->model('Model_app');
		$dados['entrega']=$this->Model_app->get_entrega();
		$this->load->view('admin', $dados);
	}

	public function register() {
		echo '<link rel="shortcut icon" href="'. base_url('images/favicon.png') .'">';
		$this->load->view('header');
		$this->load->view('register');
		$this->load->view('footer');
	}

	// INSERIR CLIENTES
	public function inserir() {
		$nome=$this->input->post('nome');
		$senha=$this->input->post('senha');
		$telefone=$this->input->post('telefone');
		$email=$this->input->post('email');
		$data=$this->input->post('data');
		$cpf=$this->input->post('cpf');
		$this->load->model('Model_app');
		$this->Model_app->inserir($nome, $senha, $telefone, $email, $data, $cpf);
	}

	//INSERIR MOTOBOYS
	public function inserir_motoboy() {
		$nome_m=$this->input->post('nome_m');
		$cpf_m=$this->input->post('cpf_m');
		$telefone_m=$this->input->post('telefone_m');
		$placa_m=$this->input->post('placa_m');
		$foto_m=$this->input->post('foto_m');
		$email_m=$this->input->post('email_m');
		$senha_m=$this->input->post('senha_m');
		$this->load->model('Model_app');
		$this->Model_app->inserir_motoboy($nome_m, $cpf_m, $telefone_m, $placa_m, $foto_m, $email_m, $senha_m);
		
	}
	// VERIFICAR CLIENTES
	public function verificar() {
		$id=$this->input->post('id');
		$senha=$this->input->post('senha');
		$this->load->model('Model_app');
		$this->Model_app->verificar($id, $senha);
	}
	// VERIFICAR MOTOBOYS
	public function verificar_motoboy() {
		$email_m=$this->input->post('email_m');
		$senha_m=$this->input->post('senha_m');
		$this->load->model('Model_app');
		$this->Model_app->verificar_motoboy($email_m, $senha_m);
	}
	//VERIFICAR ADM
	public function verificarAdmin() {
        $email_adm=$this->input->post('email_adm');
        $senha_adm=$this->input->post('senha_adm');
        $this->load->model('Model_app');
        $this->Model_app->verificarAdmin($email_adm, $senha_adm);
    }

	public function logout() {
		session_start();
		unset($_SESSION['user']);
		header('Location: http://localhost/Speedlog/');
	}

	public function calcularFrete() {
		$valor = 0;

		$p = $this->input->post('p');
		$t = ($this->input->post('t') / 60) * 0.3;
		$d = ($this->input->post('d') / 1000) * 0.5;

		$valor += $t + $d;
		
		if ($p < 1) {
			$valor += 3;
		}
		if ($p >= 1 && $p < 3) {
			$valor += 5;
		}
		if ($p >= 3 && $p < 8) {
			$valor += 9;
		}
		if ($p >= 8 && $p <= 12) {
			$valor += 12;
		}
		$valor = number_format($valor, 2, ',', '.');
		echo $valor;
	}

	public function salvarParametro() {
		$p = $this->input->post('p');
		$d = $this->input->post('d');
		$t = $this->input->post('t');
		$id = $this->input->post('id');
		$f = $this->input->post('f');
		$cepo = $this->input->post('cepo');
		$cepd = $this->input->post('cepd');
		$lo = $this->input->post('lo');
		$ld = $this->input->post('ld');
		$bo = $this->input->post('bo');
		$bd = $this->input->post('bd');
		$this->load->model('Model_app');
		$this->Model_app->salvarParametro($p,$d,$t,$id,$f,$cepo,$cepd, $lo, $ld, $bo, $bd);
	}

	// alterar dados no BD
	public function alterar()
	{
		$this->load->model('Model_app');
		$idEntrega = $this->input->post('idEntrega');
		$this->Model_app->alterar($idEntrega);
	}

	public function alterarAndamento()
	{
		$this->load->model('Model_app');
		$idEntrega = $this->input->post('idEntrega');
		$this->Model_app->alterarAndamento($idEntrega);
	}
}