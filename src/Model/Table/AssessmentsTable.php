<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Assessments Model
 *
 * @property \App\Model\Table\AssessmentTemplatesTable&\Cake\ORM\Association\BelongsTo $AssessmentTemplates
 * @property \App\Model\Table\AssesstementsItemsTable&\Cake\ORM\Association\HasMany $AssesstementsItems
 * @property \App\Model\Table\ItemAnswersTable&\Cake\ORM\Association\HasMany $ItemAnswers
 * @property \App\Model\Table\ClassroomsTable&\Cake\ORM\Association\BelongsToMany $Classrooms
 *
 * @method \App\Model\Entity\Assessment newEmptyEntity()
 * @method \App\Model\Entity\Assessment newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Assessment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Assessment get($primaryKey, $options = [])
 * @method \App\Model\Entity\Assessment findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Assessment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Assessment[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Assessment|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Assessment saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Assessment[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Assessment[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Assessment[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Assessment[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AssessmentsTable extends Table
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

        $this->setTable('assessments');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('AssessmentTemplates', [
            'foreignKey' => 'assessment_template_id',
        ]);
        $this->hasMany('AssesstementsItems', [
            'foreignKey' => 'assessment_id',
        ]);
        $this->hasMany('ItemAnswers', [
            'foreignKey' => 'assessment_id',
        ]);
        $this->belongsToMany('Classrooms', [
            'foreignKey' => 'assessment_id',
            'targetForeignKey' => 'classroom_id',
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('token')
            ->maxLength('token', 10)
            ->allowEmptyString('token');

        $validator
            ->scalar('guidelines')
            ->allowEmptyString('guidelines');

        $validator
            ->dateTime('starts_at')
            ->allowEmptyDateTime('starts_at');

        $validator
            ->dateTime('ends_at')
            ->allowEmptyDateTime('ends_at');

        $validator
            ->integer('duration')
            ->allowEmptyString('duration');

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
        $rules->add($rules->existsIn(['assessment_template_id'], 'AssessmentTemplates'));

        return $rules;
    }
}
