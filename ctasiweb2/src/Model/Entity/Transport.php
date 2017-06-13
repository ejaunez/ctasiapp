<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Transport Entity
 *
 * @property string $id
 * @property string $name
 * @property string $phone
 * @property string $mobile
 * @property string $email
 * @property string $store_id
 *
 * @property \App\Model\Entity\Store $store
 * @property \App\Model\Entity\Sale[] $sales
 * @property \App\Model\Entity\Post[] $posts
 */
class Transport extends Entity
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
        '*' => true,
        'id' => false
    ];
}
