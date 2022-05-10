<?php
require_once "IControlador.php";
require_once "Model/User.php";

class ControladorAdicionarSaldo implements IControlador{
    private $user;


    public function __construct(){
        $this->user = new User();
        
    }
    public function processaRequisicao(){
        $this->user->setId($_POST['id']);
        $this->user->pesquisarUser();
        $saldoA = $this->user->getSaldo();
        $saldoB = ($_POST['saldo']);

        $this->user->setUsuario($_POST['usuario']);
        $this->user->setNome($_POST['nome']);
        $this->user->setMatricula($_POST['matricula']);
        $this->user->setSaldo($saldoB + $saldoA);

        
        
        $this->user->adicionarSaldo();
 
      header('Location:ListarUser', true,302);
    }

}


?>