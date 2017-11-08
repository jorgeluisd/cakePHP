<?php 
	namespace App\Controller;

	class TurbinasController extends AppController
	{

	    public function index()
	    {
	        $turbinas = $this->Turbinas->find('all');
	        $this->set(compact('turbinas'));
	    }

	    public function view($id = null)
    	{
        	$turbina = $this->Turbinas->get($id);
        	$this->set(compact('turbina'));
    	}

    	public function create()
	    {
	        $turbina = $this->Turbinas->newEntity();
	        if ($this->request->is('post')) {
	            $turbina = $this->Turbinas->patchEntity($turbina, $this->request->getData());
	             $turbina->activo = ActivoController::traduce($this->request->data['activo']);
	            
	            if ($this->Turbinas->save($turbina)) {
	                $this->Flash->success(__('Turbina guardada con exito.'));
	                return $this->redirect(['action' => 'index']);
	            }
	            $this->Flash->error(__('Hubo un error al guardar.'));
	        }
	        $this->set('turbina', $turbina);
	    }

	    public function edit($id = null)
		{
		    $turbina = $this->Turbinas->get($id);
		    
		    $turbina->activo=($turbina->activo=='s')? true:false;
		    
		    if ($this->request->is(['post', 'put'])) {

		    	$this->request->data['activo'] = ActivoController::traduce($this->request->data['activo']);

		        $this->Turbinas->patchEntity($turbina, $this->request->getData());

		        if ($this->Turbinas->save($turbina)) {
		            $this->Flash->success(__('Tu turbina ha sido actualizada.'));
		            return $this->redirect(['action' => 'index']);
		        }
		        $this->Flash->error(__('Tu turbina no se ha podido actualizar.'));
		    }

		    $this->set('turbina', $turbina);
		}

		public function delete($id)
		{
		    $this->request->allowMethod(['post', 'delete']);

		    $turbina = $this->Turbinas->get($id);
		    if ($this->Turbinas->delete($turbina)) {
		        $this->Flash->success(__('La turbina con id: {0} ha sido eliminado.', h($id)));
		        return $this->redirect(['action' => 'index']);
		    }
		}


	}