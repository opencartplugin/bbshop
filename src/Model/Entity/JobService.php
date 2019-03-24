<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * JobService Entity
 *
 * @property int $id
 * @property int|null $job_id
 * @property int|null $service_id
 * @property float|null $price
 * @property int|null $qty
 * @property float|null $discount
 * @property float|null $amount
 *
 * @property \App\Model\Entity\Job $job
 * @property \App\Model\Entity\Service $service
 */
class JobService extends Entity
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
        'job_id' => true,
        'service_id' => true,
        'price' => true,
        'qty' => true,
        'discount' => true,
        'amount' => true,
        'job' => true,
        'service' => true
    ];
}
