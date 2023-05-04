<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Classrooms Model
 *
 * @property \App\Model\Table\SchoolsTable&\Cake\ORM\Association\BelongsTo $Schools
 * @property \App\Model\Table\StudentsTable&\Cake\ORM\Association\HasMany $Students
 * @property \App\Model\Table\AssessmentsTable&\Cake\ORM\Association\BelongsToMany $Assessments
 *
 * @method \App\Model\Entity\Classroom newEmptyEntity()
 * @method \App\Model\Entity\Classroom newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Classroom[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Classroom get($primaryKey, $options = [])
 * @method \App\Model\Entity\Classroom findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Classroom patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Classroom[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Classroom|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Classroom saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Classroom[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Classroom[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Classroom[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Classroom[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ClassroomsTable extends Table
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

        $this->setTable('classrooms');
        $this->setDisplayField('name');
        $this->setPrimaryKey('ID');

        $this->belongsTo('Schools', [
            'foreignKey' => 'school_id',
        ]);
        $this->hasMany('Students', [
            'foreignKey' => 'classroom_id',
        ]);
        $this->belongsToMany('Assessments', [
            'foreignKey' => 'classroom_id',
            'targetForeignKey' => 'assessment_id',
            'joinTable' => 'assessments_classrooms',
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
            ->integer('ID')
            ->allowEmptyString('ID', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 120)
            ->allowEmptyString('name');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['school_id'], 'Schools'));

        return $rules;
    }
}
