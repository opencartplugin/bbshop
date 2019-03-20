<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RolesAction Entity
 *
 * @property int $id
 * @property int|null $role_id
 * @property int|null $action_id
 *
 * @property \App\Model\Entity\Role $role
 * @property \App\Model\Entity\Action $action
 */
class RolesAction extends Entity
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
        'role_id' => true,
        'action_id' => true,
        'role' => true,
        'action' => true
    ];
}
