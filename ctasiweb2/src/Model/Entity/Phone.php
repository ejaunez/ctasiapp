<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Phone Entity
 *
 * @property int $id
 * @property int $customer_id
 * @property string $country_id
 * @property int $area_code
 * @property int $number
 *
 * @property \App\Model\Entity\Phone $phone
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Country $country
 */
class Phone extends Entity
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
        'phone_id' => false
    ];
}
