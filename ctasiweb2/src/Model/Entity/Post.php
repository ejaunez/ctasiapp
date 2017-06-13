<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Post Entity
 *
 * @property string $id
 * @property string $name
 * @property string $address
 * @property int $department_id
 *
 * @property \App\Model\Entity\Post $post
 * @property \App\Model\Entity\Department $department
 * @property \App\Model\Entity\Transport[] $transports
 */
class Post extends Entity
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
        'post_id' => false
    ];
}
