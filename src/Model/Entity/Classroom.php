<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Classroom Entity
 *
 * @property int $ID
 * @property string|null $name
 * @property int|null $school_id
 *
 * @property \App\Model\Entity\School $school
 * @property \App\Model\Entity\Student[] $students
 * @property \App\Model\Entity\Assessment[] $assessments
 */
class Classroom extends Entity
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
        'name' => true,
        'school_id' => true,
        'school' => true,
        'students' => true,
        'assessments' => true,
    ];
}
