<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pricelist Entity
 *
 * @property int $id
 * @property string $country_id
 * @property string $name
 * @property \Cake\I18n\FrozenTime $begin_date
 * @property \Cake\I18n\FrozenTime $end_date
 * @property string $event
 *
 * @property \App\Model\Entity\Pricelist $pricelist
 * @property \App\Model\Entity\Country $country
 * @property \App\Model\Entity\Product[] $products
 */
class Pricelist extends Entity
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
        'pricelist_id' => false
    ];
}
