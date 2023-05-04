<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Item Entity
 *
 * @property int $id
 * @property int|null $department_id
 * @property int|null $subject_id
 * @property string|null $name
 * @property string|null $statement
 * @property string|null $option_1
 * @property string|null $option_2
 * @property string|null $option_3
 * @property string|null $option_4
 * @property int|null $correnct_answer
 * @property bool|null $shareable
 * @property string|null $bncc_ref
 *
 * @property \App\Model\Entity\Department $department
 * @property \App\Model\Entity\Subject $subject
 * @property \App\Model\Entity\AssesstementsItem[] $assesstements_items
 * @property \App\Model\Entity\ItemAnswer[] $item_answers
 */
class Item extends Entity
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
        'department_id' => true,
        'subject_id' => true,
        'name' => true,
        'statement' => true,
        'option_1' => true,
        'option_2' => true,
        'option_3' => true,
        'option_4' => true,
        'correnct_answer' => true,
        'shareable' => true,
        'bncc_ref' => true,
        'department' => true,
        'subject' => true,
        'assesstements_items' => true,
        'item_answers' => true,
    ];
}
