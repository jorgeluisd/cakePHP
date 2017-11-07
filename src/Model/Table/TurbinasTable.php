<?php 
	namespace App\Model\Table;

	use Cake\ORM\Table;
	use Cake\Validation\Validator;

	class TurbinasTable extends Table
	{
	    public function initialize(array $config)
	    {
	        $this->addBehavior('Timestamp');
	    }

	    public function validationDefault(Validator $validator)
	    {
	        $validator
	            ->notEmpty('nombre')
	            ->notEmpty('modelo')
	            ->notEmpty('color');

	        return $validator;
	    }

	}	