<?php 
/**
* 
*/
class MeserosController extends AppController
{
	//Declaracion de Helper
	public $helpers = array('Html','Form');
	public $components = array('Session');

	public function index()	
		{$this->set('meseros',$this->Mesero->find('all'));}
	
	public function ver($id = null) {

		if (!$id) {
			throw new NotFoundException("Detalles invalidos!!!");
				}
		$mesero = $this->Mesero->findById($id);
		if (!$mesero) {
			throw new NotFoundException("El mesero no existe!!!");
		}

		$this->set('mesero',$mesero);

	}

	public function nuevo(){
		if ($this->request->is('post')) {
			$this->Mesero->create();
			if ($this->Mesero->save($this->request->data)) {
				$this->Session->SetFlash('El mesero a sido creado!!!', 'default', array('class'=>'success'));
				return $this->redirect(array('action'=>'index'));
			}
			$this->Session->SetFlash('No se pudo crear nuevo mesero');
		}
	}

	public function editar($id=null)
		//SI PUDO RECUPERAR LOS DATOS
		{if (!$id) {throw new NotFoundException("Detalles invalidos!!!");}
		$mesero =$this->Mesero->findById($id);
		//SI EL MESERO EXISTE
		if (!$mesero) {throw new NotFoundException("El mesero no existe!!!");}
		
		//SI SE MANDO ALGO POR POST
		if($this->request->is('post','put'))
			{$this->Mesero->id=$id;
			if ($this->Mesero->save($this->request->data))
				{$this->Session->SetFlash('El mesero a sido modificado exitosamente!!!', 'default', array('class'=>'success'));
				return $this->redirect(array('action'=>'index'));}				
			$this->Session->SetFlash('No se pudo modificar mesero');}

			if (!$this->request->data) {
				$this->request->data=$mesero;
			}


			}


	public function eliminar($id){
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException("Detalles invalidos!!!");
		}
		if ($this->Mesero->delete($id)) {
			$this->Session->SetFlash('El mesero a sido borrado exitosamente!!!', 'default', array('class'=>'success'));
				return $this->redirect(array('action'=>'index'));
			
		}
		}
		
}

 ?>