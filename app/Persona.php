<?php namespace App;
	
	class Persona
	{
		public $nombre = 'Jonatan';
		private $apellido = 'Jorge';
		private $edad = '25';
		private $nacionalidad = 'Argentino';

		public function mostrarDato($dato)
		{
			global $d;
			$d = $this->$dato;
			echo $d;
		}

		public function setearDato($dato, $valor)
		{
			$this->dato = $valor;
		}

		public function mostrarNombre()
		{
			global $n;
			$n = $this->nombre;
			echo $n;
		}
		/*
		function __construct(argument)
		{
			# code...
		}
		*/
	}