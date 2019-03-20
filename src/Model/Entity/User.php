<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;


/**
 * User Entity
 *
 * @property int $id
 * @property int $role_id
 * @property string $name
 * @property string $username
 * @property string $password
 * @property string $email
 * @property \Cake\I18n\FrozenDate|null $birthdate
 * @property string|null $birthplace
 * @property bool|null $gender
 * @property string|null $phone
 * @property int|null $shop_id
 * @property string|null $photo
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Role[] $roles
 * @property \App\Model\Entity\Shop $shop
 * @property \App\Model\Entity\Job[] $jobs
 */
class User extends Entity
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
        'name' => true,
        'username' => true,
        'password' => true,
        'email' => true,
        'birthdate' => true,
        'birthplace' => true,
        'gender' => true,
        'phone' => true,
        'shop_id' => true,
        'photo' => true,
        'created' => true,
        'modified' => true,
        'roles' => true,
        'shop' => true,
        'jobs' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
    protected function _setPassword($password)
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher)->hash($password);
        }
    }    

}
