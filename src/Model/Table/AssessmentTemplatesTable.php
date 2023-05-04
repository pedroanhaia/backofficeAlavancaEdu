<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AssessmentTemplates Model
 *
 * @property \App\Model\Table\AssessmentsTable&\Cake\ORM\Association\HasMany $Assessments
 *
 * @method \App\Model\Entity\AssessmentTemplate newEmptyEntity()
 * @method \App\Model\Entity\AssessmentTemplate newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\AssessmentTemplate[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AssessmentTemplate get($primaryKey, $options = [])
 * @method \App\Model\Entity\AssessmentTemplate findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\AssessmentTemplate patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AssessmentTemplate[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\AssessmentTemplate|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AssessmentTemplate saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AssessmentTemplate[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\AssessmentTemplate[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\AssessmentTemplate[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\AssessmentTemplate[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AssessmentTemplatesTable extends Table
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

        $this->setTable('assessment_templates');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Assessments', [
            'foreignKey' => 'assessment_template_id',
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
            ->scalar('title')
            ->maxLength('title', 200)
            ->allowEmptyString('title');

        $validator
            ->scalar('guidelines')
            ->allowEmptyString('guidelines');

        return $validator;
    }
}
