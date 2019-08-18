<?php

	abstract class DB
	{
				public static function getAllProductos()
		{
			global $connection;

			$stmt = $connection->prepare(" SELECT id_productos, nombre, cantidad, precio,stock, id_categorias FROM productos");

			$stmt->execute();

			$productos = $stmt->fetchAll(PDO::FETCH_ASSOC);

			$productosObject = [];

			foreach ($productos as $producto) {
				$finalproducto = new Producto($producto['nombre'], $producto['cantidad'], $producto['precio'],$producto['stock'],$producto['id_categoria'], );

				$finalproducto->setId_producto($producto['id_producto']);

				$productosObject[] = $finalproducto;
			}

			return $productosObject;
		}

		public static function saveProducto(Producto $producto)
		{
			global $connection;

			try {
				$stmt = $connection->prepare("
					INSERT INTO productos (nombre, cantidad, id_categoria, precio, stock)
					VALUES(:nombre, :cantidad, :id_categoria, :precio, :stock)
				");


				$stmt->bindValue(':nombre', $producto->getNombre());
				$stmt->bindValue(':cantidad', $producto->getCantidad());
				$stmt->bindValue(':id_categoria', $producto->getId_categoria());
				$stmt->bindValue(':precio', $producto->getPrecio());
				$stmt->bindValue(':stock', $producto->getStock());


				$stmt->execute();

				return true;
			} catch (PDOException $exception) {
				return false;
			}
		}

		public static function saveGenre(Genre $genre)
		{
			global $connection;

			$genres = self::getAllGenres();

			$finalGenres = [];

			foreach ($genres as $oneGenre) {
				$finalGenres[] = $oneGenre->getName();
			}

			if (!in_array($genre->getName(), $finalGenres)) {
				$stmt = $connection->prepare("
					INSERT INTO genres (name, ranking, active)
					VALUES(:name, :ranking, :active)
				");

				$stmt->bindValue(':name', $genre->getName());
				$stmt->bindValue(':ranking', $genre->getRanking());
				$stmt->bindValue(':active', $genre->getActive());

				$stmt->execute();

				return true;
			} else {
				return false;
			}
		}

		public static function getAllActors()
		{
			global $connection;

			$stmt = $connection->prepare(" SELECT id, first_name, last_name, rating,favorite_movie_id FROM actors");

			$stmt->execute();

			$actors = $stmt->fetchAll(PDO::FETCH_ASSOC);

			$ActoresObject = [];

			foreach ($actors as $actor) {
				$finalActor = new Actor($actor['first_name'], $actor['last_name'], $actor['rating'], $actor['favorite_movie_id']);

				$finalActor->setId($actor['id']);

				$ActoresObject[] = $finalActor;
			}

			return $ActoresObject;
		}

		public static function saveActor(Actor $actor)
		{
			global $connection;

			$actors = self::getAllActors();

			$finalActors = [];

			foreach ($actors as $oneActor) {
				$finalActors[] = $oneActor->getFirst_Name();
			}

			if (!in_array($actor->getFirst_Name(), $finalActors)) {
				$stmt = $connection->prepare("
					INSERT INTO actors (first_name,last_name, rating, favorite_movie_id)
					VALUES(:first_name, :last_name, :rating, :favorite_movie_id)
				");

				$stmt->bindValue(':first_name', $actor->getFirst_Name());
				$stmt->bindValue(':last_name', $actor->getLast_Name());
				$stmt->bindValue(':rating', $actor->getRating());
				$stmt->bindValue(':favorite_movie_id', $actor->getfavorite_movie_id());
				$stmt->execute();

				return true;
			} else {
				return false;
			}
		}
	}
