<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	//*** Contrutor ***
	public function __construct(){
	
		parent::__construct();
		$this->load->library('Sistema');
		initSite();
		
	} //End of Contruct
	
	//*** FUNCTIONS ***
	
	public function index() {
		//Chama a função que carregara a view
		$this->home();
	}  /* End of index */
	
	public function home(){
		
		//Defini os dados para serem exibidos em painel_view
		setTheme('titulo', 'Inicio');
		setTheme('conteudo', '<div class="col-sm-12 col-md-12 col-lg-12"><p>Escolha um menu para iniciar</p></div>');
			
		//Carrega o tema
		loadTemplate();
	}
	
	
	public function pagina($slug=NULL) {
		if (isset($slug) && $slug != NULL)
		{
			//Efetua a busca pelo slug no BD
			echo "teste";
		} else {
		//Lê a url e pega o tercceiro parametro
		$slug = $this->uri->segment(3);
		}
		
	}  /* End of function pagina() */
	
	
} /*   End of file site.php  */
/*   Location: ./application/controllers/Site.php  */