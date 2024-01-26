<?php
session_start();
class Model_app extends CI_Model
{
    public $nome, $senha, $telefone, $email, $data, $cpf;

    //Inserindo cliente - Table: Cliente
    public function inserir($nome, $senha, $telefone, $email, $data, $cpf)
    {
        $query = $this->db->query('SELECT * FROM cliente WHERE email = "'.$email.'" OR cpf = "'.$cpf.'"');
        if ($query->num_rows() > 0) {
            echo 1;
        } else {
            $this->nome = $nome;
            $this->senha = $senha;
            $this->telefone = $telefone;
            $this->email = $email;
            $this->data = $data;
            $this->cpf = $cpf;
            $this->db->insert('cliente', $this);
            echo 2;
        }

    }

    //Mostrar os pedidos no carrosel - Table: Clientes
    public function get_pedidos()
    {
        $query = $this->db->query('SELECT * FROM entrega LEFT JOIN motoboy ON entrega.idMotoboy = motoboy.idMotoboy WHERE entrega.idCliente = ' . $_SESSION['user'][1] . ' ORDER BY status = "Agendada" DESC, status = "Em andamento" DESC, status = "Finalizada" DESC, idEntrega DESC ');
        return $query->result();
    }

    //Mostrar os pedidos no carrosel - Table: Motoboys
    public function get_pedidosM()
    {
        $query = $this->db->query('SELECT * FROM entrega LEFT JOIN parametrosfrete ON entrega.idEntrega = parametrosfrete.idParametro LEFT JOIN cliente ON entrega.idCliente = cliente.idCliente WHERE status = "Agendada"');
        return $query->result();
    }

    //Mostrar os pedidos no carrosel - Table: Clientes
    public function get_pedidosmotoboys()
    {
        $query = $this->db->query('SELECT * FROM entrega LEFT JOIN motoboy ON entrega.idMotoboy = motoboy.idMotoboy LEFT JOIN cliente ON entrega.idCliente = cliente.idCliente LEFT JOIN parametrosfrete ON entrega.idEntrega = parametrosfrete.idParametro WHERE entrega.idMotoboy= ' . $_SESSION['user'][1] . ' ORDER BY status = "Em andamento" DESC');
        return $query->result();
    }

    //Salvar os parâmetros do frete - Table: parametrosFrete
    public function salvarParametro($p, $d, $t, $id, $f, $cepo, $cepd, $lo, $ld, $bo, $bd)
    {
        $data = array(
            'peso' => $p,
            'distancia' => $d,
            'tempo' => $t,
        );

        //Table entregas
        $data2 = array(
            'idCliente' => $id,
            'idMotoboy' => null,
            'status' => 'Agendada',
            'horarioInicio' => null,
            'horarioPrevisto' => null,
            'valorFrete' => $f,
            'cep_origem' => $cepo,
            'cep_destino' => $cepd,
            'log_origem' => $lo,
            'log_destino' => $ld,
            'bairro_origem' => $bo,
            'bairro_destino' => $bd
        );

        $this->db->insert('parametrosfrete', $data);
        $this->db->insert('entrega', $data2);
    }

    //Exibindo entrega na tela do Administrador - Table: Entrega
    public function get_entrega()
    {
        $query = $this->db->get('entrega'); // select * from 'produtos'
        return $query->result();
    }

    //Verificação de Login - Cliente
    public function verificar($id, $senha)
    {
        $query = $this->db->query("SELECT * FROM cliente WHERE email = '$id' AND senha = '$senha'");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $primeiroNome = explode(" ", $row->nome);
                $_SESSION['user'][0] = $primeiroNome[0];
                $_SESSION['user'][1] = $row->idCliente;
                $_SESSION['user'][2] = 'Cliente';
            }
            echo base_url('App/Clientes');
        }
    }

    //Verificação de Login - Administrador
    public function verificarAdmin($email_adm, $senha_adm)
    {
        $query = $this->db->query("SELECT * FROM administrador WHERE email_adm = '$email_adm' AND senha_adm = '$senha_adm'");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $primeiroNome = explode(" ", $row->nome);
                $_SESSION['user'][0] = $primeiroNome[0];
                $_SESSION['user'][1] = $row->idAdmin;
                $_SESSION['user'][2] = 'Administrador';
            }
            echo base_url('App/admin');
        }
    }

    //Verificação de Login - Motoboy
    public function verificar_motoboy($idMotoboy, $senha_m)
    {
        $query = $this->db->query("SELECT * FROM motoboy WHERE email_m = '$idMotoboy' AND senha_m = '$senha_m'");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $primeiroNome = explode(" ", $row->nome_m);
                $_SESSION['user'][0] = $primeiroNome[0];
                $_SESSION['user'][1] = $row->idMotoboy;
                $_SESSION['user'][2] = 'Motoboy';
            }
            echo base_url('App/motoboys');
        }
    }

    //Inserindo dados no bd - Table: Motoboy
    public function inserir_motoboy($nome_m, $cpf_m, $telefone_m, $placa_m, $foto_m, $email_m, $senha_m)
    {   
        $query = $this->db->query('SELECT * FROM motoboy WHERE email_m = "'.$email_m.'" OR cpf_m = "'.$cpf_m.'"');
        if ($query->num_rows() > 0) {
            echo 1;
        } else {
            if(isset($_FILES['foto_m']))
            {
               $ext = strtolower(substr($_FILES['foto_m']['name'],-4)); //Pegando extensão do arquivo
               $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
               $dir = './uploads/'; //Diretório para uploads
            
               move_uploaded_file($_FILES['foto_m']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
            } 
            $foto_m = $new_name;
            $data = array(
                'nome_m' => $nome_m,
                'cpf_m' => $cpf_m,
                'telefone_m' => $telefone_m,
                'placa_m' => $placa_m,
                'foto_m' => $foto_m,
                'email_m' => $email_m,
                'senha_m' => $senha_m,
                'saldo' => 0
            );
            $this->db->insert('motoboy', $data);
            echo 2;
        }
    }

    //Em andamento
    public function alterar($idEntrega)
    {
        $this->db->query('UPDATE entrega LEFT JOIN parametrosfrete ON parametrosfrete.idParametro = entrega.idEntrega SET entrega.idMotoboy = ' . $_SESSION['user'][1] . ', entrega.status = "Em andamento", entrega.horarioInicio = NOW(), entrega.horarioPrevisto = DATE_ADD(horarioInicio, INTERVAL parametrosfrete.tempo SECOND) WHERE entrega.idEntrega = ' . $idEntrega . '');
    }

    //Finalizando Pedido
    public function alterarAndamento($idEntrega)
    {
        // valor do frete * 0.7
        // UPDATE motoboy INNER JOIN entrega ON entrega.idMotoboy = motoboy.idMotoboy SET entrega.status = 'Finalizada', motoboy.saldo = (motoboy.saldo + entrega.valorFrete) * 0.7 WHERE entrega.idEntrega = 1

        $this->db->query('UPDATE motoboy INNER JOIN entrega ON entrega.idMotoboy = motoboy.idMotoboy SET entrega.status = "Finalizada", motoboy.saldo = (motoboy.saldo + entrega.valorFrete) * 0.7 WHERE entrega.idEntrega = ' . $idEntrega . '');
    }
}
