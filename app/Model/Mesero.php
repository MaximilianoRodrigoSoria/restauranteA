<?php 
	/**
	* 
	*/


	class Mesero extends AppModel
	{	//VALIDACIONES
		public $validate = array(
				'dni'=> array(
							'notEmpty'=>array(
									'rule'=>'notEmpty'),
							'Los datos no son numericos'=>array(
									'rule'=>'numeric')
							,
							'unique'=>array(
									'rule'=>'isUnique',
									'message'=>'Ya existe el DNI'	
									)

							),
				'nombre'=> array(
							'rule'=>'notEmpty'),
				'apellido'=> array(
							'rule'=>'notEmpty'),
				'telefono'=> array(
							'notEmpty'=>array(
									'rule'=>'notEmpty'),
							'Los datos no son numericos'=>array(
									'rule'=>'numeric'))
			);		
	
		//RELACIONES	
		public $hasMany = array(
						'Mesa'=>array(
									'className'=>'Mesa',
									'foreignKey'=>'mesero_id',
									'conditions'=>'',
									'order'=>'Mesa.serie DESC',
									'depend'=> false
									));
	

	}


 ?>