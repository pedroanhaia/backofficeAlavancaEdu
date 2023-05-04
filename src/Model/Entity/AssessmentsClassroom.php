<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AssessmentsClassroom Entity
 *
 * @property int $id
 * @property int|null $assessment_id
 * @property int|null $classroom_id
 *
 * @property \App\Model\Entity\Assessment $assessment
 * @property \App\Model\Entity\Classroom $classroom
 */
class AssessmentsClassroom extends Entity
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
        'assessment_id' => true,
        'classroom_id' => true,
        'assessment' => true,
        'classroom' => true,
    ];
}
