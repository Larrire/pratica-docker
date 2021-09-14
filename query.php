<?php

if( $connection ){
	try {
		$sql = 'SELECT * FROM techs';

		$query = $connection->prepare($sql);

		$query->execute();

		$techs = $query->fetchAll();
	} catch (Exception $e) {
		$erro .= '<br>' . 'Ocorreu um erro ao tentar puxar os dados do banco.';
	}
}