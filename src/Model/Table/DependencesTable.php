<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Dependences Model
 *
 * @property \App\Model\Table\DepartmentsTable&\Cake\ORM\Association\HasMany $Departments
 *
 * @method \App\Model\Entity\Dependence newEmptyEntity()
 * @method \App\Model\Entity\Dependence newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Dependence[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Dependence get($primaryKey, $options = [])
 * @method \App\Model\Entity\Dependence findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Dependence patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Dependence[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Dependence|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dependence saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dependence[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Dependence[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Dependence[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Dependence[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DependencesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('dependences');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Departments', [
            'foreignKey' => 'dependence_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 40)
            ->allowEmptyString('name');

        return $validator;
    }
}
