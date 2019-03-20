<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Shop Entity
 *
 * @property int $id
 * @property string|null $sname
 * @property string|null $address
 * @property string|null $phone
 * @property string|null $fax
 * @property float|null $latitude
 * @property float|null $longitude
 *
 * @property \App\Model\Entity\User[] $users
 */
class Shop extends Entity
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
        'sname' => true,
        'address' => true,
        'phone' => true,
        'fax' => true,
        'latitude' => true,
        'longitude' => true,
        'users' => true
    ];
}
