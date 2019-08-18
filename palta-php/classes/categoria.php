<?php

	class categoria
	{
		private $id_categoria;
		private $name;


		public function __construct($name)
		{
			$this->name = $name;

		}

		public function setID_categoria($id_categoria)
		{
			$this->id_categoria = $id_categoria;
		}

		public function getID_categoria()
		{
			return $this->id_categoria;
		}

		public function getName()
		{
			return $this->name;
		}

	
	}
