<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ItemAnswer Entity
 *
 * @property int $id
 * @property int|null $student_id
 * @property int|null $assessment_id
 * @property int|null $item_id
 * @property \Cake\I18n\FrozenTime|null $dateTime
 * @property int|null $answer
 * @property int|null $duration
 *
 * @property \App\Model\Entity\Student $student
 * @property \App\Model\Entity\Assessment $assessment
 * @property \App\Model\Entity\Item $item
 */
class ItemAnswer extends Entity
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
        'student_id' => true,
        'assessment_id' => true,
        'item_id' => true,
        'dateTime' => true,
        'answer' => true,
        'duration' => true,
        'student' => true,
        'assessment' => true,
        'item' => true,
    ];
}
