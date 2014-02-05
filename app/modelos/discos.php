<?php

namespace modelos;

class discos extends \core\sgbd\bd {
	
	public static $tabla = 'discos';
	
	
	public static function create_table() {
		
		$consulta = "
			drop table if exists daw2_discos;
                        create table daw2_discos (
                        id integer auto_increment not null primary key
                        , album varchar(50) not null
                        , artista varchar(50) not null
                        , precio decimal(10,2) not null
                        , fecha_lanzamiento date
                        )
			engine = innodb;	
		";
		
		return self::execute($consulta);
		
	}
	
	
	/**
	 * El parámetro fila es un array que trae detro en otro array asociado al índice 'values' los valores de las columnas a insertar.
	 * Si hay errores en el mismos array se devuelven dentro del índice 'errores'.
	 * @param array &$fila = array('values' =>array('col1' => valo1, ), 'errores' => array('col1' => 'error1', ))
	 * @return boolean
	 */
	public static function insertar(array &$fila ) {
		
		
		$validacion = true;
		if ( ! isset($fila['values']['disco']) or ! is_string($fila['values']['disco'])) {
			$validacion = false;
			$fila['errores']['disco'] = "Esta columna no puede esta vacía y debe ser un string.";
		}
		if ( ! isset($fila['values']['descripcion']) ) {
			$fila['values']['descripcion'] = null;
		}
		elseif ( ! is_string($fila['values']['descripcion'])) {
			$validacion = false;
			$fila['errores']['descripcon'] = "Esta columna debe ser un string.";
		}
		
		if ($validacion) {
		
			return self::insertar_fila($fila['values'], self::$tabla);
		}
		else {
			return false;
		}
	}
			
	 
	
	
	public static function borrar(array &$fila ) {
		
		
		$validacion = true;
		if ( ! isset($fila['values']['id']))  {
			$validacion = false;
			throw new \Exception(".....");
		}
		
		
		if ($validacion) {
		
			$consulta = "
				delete from ".self::$tabla."
					where disco = '{$fila['values']['disco']}' or id = {$fila['values']['id']}
				;		
			";

			return self::ejecutar_consulta($consulta);
		}
		else {
			return false;
		}
	}
		
	
}