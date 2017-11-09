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
	            ->minLength('nombre',2)->maxLength('nombre',45)
	            ->notEmpty('modelo')
	            ->minLength('modelo',2)->maxLength('modelo',45)
	            ->notEmpty('color')
	            ->minLength('color',2)->maxLength('color',45)
	            ->alphaNumeric('nombre')
	            ->alphaNumeric('modelo')
	            ->alphaNumeric('color');

	        return $validator;
	    }

	}	