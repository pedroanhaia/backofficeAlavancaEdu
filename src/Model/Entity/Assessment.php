<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Assessment Entity
 *
 * @property int $id
 * @property int|null $assessment_template_id
 * @property string|null $token
 * @property string|null $guidelines
 * @property \Cake\I18n\FrozenTime|null $starts_at
 * @property \Cake\I18n\FrozenTime|null $ends_at
 * @property int|null $duration
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\AssessmentTemplate $assessment_template
 * @property \App\Model\Entity\AssesstementsItem[] $assesstements_items
 * @property \App\Model\Entity\ItemAnswer[] $item_answers
 * @property \App\Model\Entity\Classroom[] $classrooms
 */
class Assessment extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'assessment_template_id' => true,
        'token' => true,
        'guidelines' => true,
        'starts_at' => true,
        'ends_at' => true,
        'duration' => true,
        'created' => true,
        'modified' => true,
        'assessment_template' => true,
        'assesstements_items' => true,
        'item_answers' => true,
        'classrooms' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'token',
    ];
}
