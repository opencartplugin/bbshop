<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Job Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime|null $trandate
 * @property int|null $user_id
 * @property int|null $customer_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\JobService[] $job_services
 */
class Job extends Entity
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
        'trandate' => true,
        'user_id' => true,
        'customer_id' => true,
        'user' => true,
        'customer' => true,
        'job_services' => true
    ];
}
