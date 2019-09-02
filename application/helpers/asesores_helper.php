<?php
defined('BASEPATH') OR exit('No direct script access allowed');


function get_asesores(){

	$CI =& get_instance();   
	$CI->load->model('Asesores_model', 'asesores_model', TRUE);	
	$data = $CI->asesores_model->get_asesores();
	return $data;	
}


function get_asesores_array($array = ''){

	$CI =& get_instance();   
	$CI->load->model('Asesores_model', 'asesores_model', TRUE);
	$query_array = array('id_asesor','primer_nombre','segundo_nombre','primer_apellido','segundo_apellido');

	if(empty($array)){ 

		$data = get_asesores();
		$query_array = array('id_asesor','primer_nombre','segundo_nombre','primer_apellido','segundo_apellido');

	} else {

		$query = array('sexo', 'etnia', 'telefono', 'celular', 'asesor_email', 'documento', 'fecha', 'fk_id_tipoid', 'nivel_academico', 'municipio', 'fk_id_ex');

		$keys = array('ID', 'Primer_Nombre', 'Segundo_Nombre', 'Primer_Apellido', 'Segundo_Apellido', 'Sexo', 'Etnia', 'Telefono', 'Celular', 'e-mail', 'Documento', 'Nivel_Academico', 'Municipio', );

		foreach ($query as $value) {
			$query_array[] = (array_key_exists($value,$array) ? $value : '' );
		}

echo "<br><br>ECHO ARREGLO ENTRADA<br>";
var_dump($array);	

		$data = $CI->asesores_model->get_asesores_array($query_array);

		$array_data = replace_key($data, $keys);

		return $array_data;
	}
}



function replace_key($array, $newkey) {

    $newarr = array();

	foreach ($array as $data){

	    $oldkey = array_keys($data);
	    $value	= array_values($data);

	    $newkey = changeIDkey($oldkey);
	    $newarr[] = array_combine($newkey, $value);
	}

	return $newarr;
}


function changeIDkey($array){

	$new_keys = array();

	foreach ($array as $key) {

		if ($key === "id_asesor") 		 $key = 'ID';
		if ($key === "primer_nombre") 	 $key = 'Primer_Nombre';
		if ($key === "segundo_nombre") 	 $key = 'Segundo_Nombre';
		if ($key === "primer_apellido")  $key = 'Primer_Apellido';
		if ($key === "segundo_apellido") $key = 'Segundo_Apellido';
		if ($key === "sexo") 		 	 $key = 'Sexo';
		if ($key === "etnia") 	 		 $key = 'Etnia';
		if ($key === "telefono") 		 $key = 'Telefono';
		if ($key === "celular") 		 $key = 'Celular';
		if ($key === "asesor_email") 	 $key = 'e-mail';
		if ($key === "documento") 		 $key = 'Documento';
		if ($key === "nivel_academico")	 $key = 'Nivel_Academico';
		if ($key === "municipio") 		 $key = 'Municipio';		

		$new_keys[] = $key;
	}
	return $new_keys;
}

?>