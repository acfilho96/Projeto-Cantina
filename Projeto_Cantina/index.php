<?php
if (!isset($_SESSION)) session_start();
    
	
	//testa a variável url que veio lá do htaccess
	if (isset($_GET['url'])) //se estiver preenchida, pega o valor
	  {
            $url =  strtoupper($_GET['url']);
    		switch ($url){
				case "NOVABEBIDA":
					require "Controller/ControladorFormBebida.php";    
				    $controlador = new ControladorFormBebida();
					$controlador->processaRequisicao();
					break;
				case "INCLUIRBEBIDA":
					require "Controller/ControladorNovaBebida.php";    
					$controlador = new ControladorNovaBebida();
					$controlador->processaRequisicao();
					break;
			    case "LISTARBEBIDAS":
					require "Controller/ControladorListarBebida.php";
                    $controlador = new ControladorListarBebida();
                    $controlador->processaRequisicao();
					break;
				case "EXCLUIRBEBIDA":
					require "Controller/ControladorExcluirBebida.php";    
					$controlador = new ControladorExcluirBebida();
					$controlador->processaRequisicao();
					break;
				case "FORMALTERARBEBIDA":
					require "Controller/ControladorFormAlterarBebida.php";    
					$controlador = new ControladorFormAlterarBebida();
					$controlador->processaRequisicao();
					break;
				case "ALTERARBEBIDA":
					require "Controller/ControladorAlterarBebida.php";    
					$controlador = new ControladorAlterarBebida();
					$controlador->processaRequisicao();
					break;
				case "NOVACOMIDA":
					require "Controller/ControladorFormComida.php";    
				    $controlador = new ControladorFormComida();
					$controlador->processaRequisicao();
					break;
				case "INCLUIRCOMIDA":
					require "Controller/ControladorNovaComida.php";    
					$controlador = new ControladorNovaComida();
					$controlador->processaRequisicao();
					break;
			    case "LISTARPRODUTOS":
					require "Controller/ControladorListarComida.php";
                    $controlador = new ControladorListarComida();
                    $controlador->processaRequisicao();
					break;
				case "EXCLUIRCOMIDA":
					require "Controller/ControladorExcluirComida.php";    
					$controlador = new ControladorExcluirComida();
					$controlador->processaRequisicao();
					break;
				case "FORMALTERARCOMIDA":
					require "Controller/ControladorFormAlterarComida.php";    
					$controlador = new ControladorFormAlterarComida();
					$controlador->processaRequisicao();
					break;
				case "ALTERARCOMIDA":
					require "Controller/ControladorAlterarComida.php";    
					$controlador = new ControladorAlterarComida();
					$controlador->processaRequisicao();
					break;
				case "NOVOUSER":
					require "Controller/ControladorFormUser.php";    
				    $controlador = new ControladorFormUser();
					$controlador->processaRequisicao();
					break;
				case "INCLUIRUSER":
					require "Controller/ControladorNovoUser.php";    
					$controlador = new ControladorNovoUser();
					$controlador->processaRequisicao();
					break;
			    case "LISTARUSER":
					require "Controller/ControladorListarUser.php";
                    $controlador = new ControladorListarUser();
                    $controlador->processaRequisicao();
					break;
				case "EXCLUIRUSER":
					require "Controller/ControladorExcluirUser.php";    
					$controlador = new ControladorExcluirUser();
					$controlador->processaRequisicao();
					break;
				case "FORMALTERARUSER":
					require "Controller/ControladorFormAlterarUser.php";    
					$controlador = new ControladorFormAlterarUser();
					$controlador->processaRequisicao();
					break;
				case "ALTERARUSER":
					require "Controller/ControladorAlterarUser.php";    
					$controlador = new ControladorAlterarUser();
					$controlador->processaRequisicao();
					break;
                case "FORMADICIONARSALDO": 
					require "Controller/ControladorFormAdicionarSaldo.php";    
					$controlador = new ControladorFormAdicionarSaldo();
					$controlador->processaRequisicao();
					break;
				case "ADICIONARSALDO":
					require "Controller/ControladorAdicionarSaldo.php";    
					$controlador = new ControladorAdicionarSaldo();
					$controlador->processaRequisicao();
					break;
				case "LISTARPRODUTOSALUNO":
					require "Controller/ControladorListarProdutos.php"; 
					$controlador = new ControladorListarProdutos();
					$controlador->processaRequisicao(); 
					break;
				case "ADDITEMCARRINHO":
					require "Controller/ControladorAddItemCarrinho.php";
					require_once 'Model/CarrinhoDAO.php';
					$carrinhoDAO = new CarrinhoDAO();
					$controlador = new ControladorAddItemCarrinho($carrinhoDAO);
					$controlador->processaRequisicao();
					break;
				case "CARRINHO":
					require "Controller/ControladorListaCarrinho.php";
					$controlador = new ControladorListaCarrinho();
					$controlador->processaRequisicao();
					break;
				case "CARRINHOALTQUANT":
					require "Controller/ControladorAlteraQuantCarrinho.php";
					require_once 'Model/CarrinhoDAO.php';
					$carrinhoDAO = new CarrinhoDAO();
					$controlador = new ControladorAlteraQuantCarrinho($carrinhoDAO);
					$controlador->processaRequisicao();
					break;
				case "APAGAITEMCARRINHO":
					require "Controller/ControladorApagaItemCarrinho.php";
					require_once 'Model/CarrinhoDAO.php';
					$carrinhoDAO = new CarrinhoDAO();
					$controlador = new ControladorApagaItemCarrinho($carrinhoDAO);
					$controlador->processaRequisicao();
					break;
				case "FINALIZARCOMPRA":
					require "Controller/ControladorFormFinalizarCompra.php";    
				    $controlador = new ControladorFormFinalizarCompra();
					$controlador->processaRequisicao();
					break;
				case "LISTARRESP":
					require "Controller/ControladorListarResp.php";
                    $controlador = new ControladorListarResp();
                    $controlador->processaRequisicao();
					break;
				case "EXCLUIRRESP":
					require "Controller/ControladorExcluirResp.php";    
					$controlador = new ControladorExcluirResp();
					$controlador->processaRequisicao();
					break;
				case "FORMALTERARRESP":
					require "Controller/ControladorFormAlterarResp.php";    
					$controlador = new ControladorFormAlterarResp();
					$controlador->processaRequisicao();
					break;
				case "ALTERARRESP":
					require "Controller/ControladorAlterarResp.php";    
					$controlador = new ControladorAlterarResp();
					$controlador->processaRequisicao();
					break;
				case "INCLUIRRESP":
					require "Controller/ControladorNovoResp.php";    
					$controlador = new ControladorNovoResp();
					$controlador->processaRequisicao();
					break;
				case "NOVORESP":
					require "Controller/ControladorFormResp.php";    
				    $controlador = new ControladorFormResp();
					$controlador->processaRequisicao();
					break;
				default:
				 header("Location: ./View/Login.php");
				    break;
			  }
			  }
			  else                     //senão, vai para uma página padrão, neste caso a home do site
                $url = '404.php';
?>
	
