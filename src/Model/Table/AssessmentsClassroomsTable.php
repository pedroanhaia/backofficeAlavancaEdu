<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AssessmentsClassrooms Model
 *
 * @property \App\Model\Table\AssessmentsTable&\Cake\ORM\Association\BelongsTo $Assessments
 * @property \App\Model\Table\ClassroomsTable&\Cake\ORM\Association\BelongsTo $Classrooms
 *
 * @method \App\Model\Entity\AssessmentsClassroom newEmptyEntity()
 * @method \App\Model\Entity\AssessmentsClassroom newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\AssessmentsClassroom[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AssessmentsClassroom get($primaryKey, $options = [])
 * @method \App\Model\Entity\AssessmentsClassroom findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\AssessmentsClassroom patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AssessmentsClassroom[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\AssessmentsClassroom|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AssessmentsClassroom saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AssessmentsClassroom[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\AssessmentsClassroom[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\AssessmentsClassroom[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\AssessmentsClassroom[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AssessmentsClassroomsTable extends Table
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

        $this->setTable('assessments_classrooms');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Assessments', [
            'foreignKey' => 'assessment_id',
        ]);
        $this->belongsTo('Classrooms', [
            'foreignKey' => 'classroom_id',
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
        $rules->add($rules->existsIn(['assessment_id'], 'Assessments'));
        $rules->add($rules->existsIn(['classroom_id'], 'Classrooms'));

        return $rules;
    }
}
