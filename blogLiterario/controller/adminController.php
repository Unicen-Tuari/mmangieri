<?php
require_once "./model/blogLiterarioModel.php";
require_once "./view/adminView.php";

class adminController{
    private $adminView;
    private $blogLiterarioModel;

	function __construct(){
		$this->adminView= new adminView();
		$this->blogLiterarioModel= new blogLiterarioModel();
	}

	function crearLibro($params = []){
		$autores= $this->blogLiterarioModel->obtenerAutores();
		$this->adminView->mostrarCrearLibro($autores);
	}

	function guardarLibro($params = []){
		$libro=['id_autor'=>$_POST['autor'],
   				'titulo'=> $_POST['titulo'],
				'genero'=>$_POST['genero'],
				'sinopsis'=>$_POST['sinopsis']
					];
		$this->blogLiterarioModel->insertarLibro($libro);
		header("Location: ".BASEURL."verLibrosAutorAdmin/".$libro['id_autor']);
	}

	function actualizarLibro($params = []){
		$libro=['id_libro'=> $params[0],
				'id_autor'=>$_POST['autor'],
				'titulo'=>$_POST['titulo'],
				'genero'=>$_POST['genero'],
				'sinopsis'=>$_POST['sinopsis']
				];
		$this->blogLiterarioModel->editarLibro($libro);
		header("Location: ".BASEURL."verLibrosAutorAdmin/".$libro['id_autor']);
	}

	function crearAutor($params = []){
		$this->adminView->mostrarCrearAutor();
	}

	function guardarAutor($params = []){
		$autor=['nombre'=>$_POST['nombre'],
				'biografia'=>$_POST['biografia']
				];
		$this->blogLiterarioModel->insertarAutor($autor);
		header("Location: ".BASEURL."verAutoresAdmin");
	}

	function actualizarAutor($params = []){
		$autor=['id_autor'=> $params[0],
				'nombre'=>$_POST['nombre'],
				'biografia'=>$_POST['biografia']
				];
		$this->blogLiterarioModel->editarAutor($autor);
		header("Location: ".BASEURL."verAutoresAdmin");
	}

	function borrarLibro($params = []){
		$libro= $this->blogLiterarioModel->obtenerLibro($params[0]);
		$autor=$this->blogLiterarioModel->obtenerAutor($libro['id_autor']);
		$this->blogLiterarioModel->borrarLibro($params[0]);
		header("Location: ".BASEURL."verLibrosAutorAdmin/".$libro['id_autor']);
	}

	function borrarAutor($params = []){
		$this->blogLiterarioModel->borrarAutor($params[0]);
		header("Location: ".BASEURL."verAutoresAdmin");
	}

	function editarAutor($params = []){
		$autor= $this->blogLiterarioModel->obtenerAutor($params[0]);
		$this->adminView->mostrarEditarAutor($autor);
	}

	function editarLibro($params = []){
		$autores= $this->blogLiterarioModel->obtenerAutores();
		$libro= $this->blogLiterarioModel->obtenerLibro($params[0]);
		$this->adminView->mostrarEditarLibro($libro, $autores);
	}

	function mostrarAutores($params=[]){
		$autores= $this->blogLiterarioModel->obtenerAutores();
		$this->adminView->mostrarAutores($autores);
	}

	function mostrarLibro($params= []){
		$libro=$this->blogLiterarioModel->obtenerLibro($params[0]);
		$autor= $this->blogLiterarioModel->obtenerAutor($libro['id_autor']);
		$this->adminView->mostrarLibro($libro, $autor);
	}

	function mostrarLibrosAutor($params= []){
		$librosAutor= $this->blogLiterarioModel->obtenerLibrosAutor($params[0]);
		$autor= $this->blogLiterarioModel->obtenerAutor($params[0]);
		$this->adminView->mostrarLibrosAutor($librosAutor, $autor);
	}

	function listarLibros($params= []){
		$libros= $this->blogLiterarioModel->listarLibros();
		$autores= $this->blogLiterarioModel->obtenerAutores();
		$this->blogLiterarioView->listarLibros($libros, $autores);
	}
}
?>