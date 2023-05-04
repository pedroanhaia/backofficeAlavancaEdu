<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Department Entity
 *
 * @property int $id
 * @property int|null $location_id
 * @property int|null $dependence_id
 * @property string|null $name
 *
 * @property \App\Model\Entity\Location $location
 * @property \App\Model\Entity\Dependence $dependence
 * @property \App\Model\Entity\Item[] $items
 * @property \App\Model\Entity\School[] $schools
 * @property \App\Model\Entity\User[] $users
 */
class Department extends Entity
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
        'location_id' => true,
        'dependence_id' => true,
        'name' => true,
        'location' => true,
        'dependence' => true,
        'items' => true,
        'schools' => true,
        'users' => true,
    ];
}
