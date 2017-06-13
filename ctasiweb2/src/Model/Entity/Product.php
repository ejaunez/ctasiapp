<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $unit_id
 * @property string $country_id
 * @property float $cost_pap
 * @property float $cost_lifo
 * @property float $cost_fifo
 *
 * @property \App\Model\Entity\Unit $unit
 * @property \App\Model\Entity\Country $country
 * @property \App\Model\Entity\Saleitem[] $saleitems
 * @property \App\Model\Entity\Stock[] $stocks
 * @property \App\Model\Entity\Pricelist[] $pricelists
 */
class Product extends Entity
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
