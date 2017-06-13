<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PricelistsProduct Entity
 *
 * @property int $id
 * @property int $pricelist_id
 * @property int $product_id
 * @property float $price
 * @property float $discount_max
 * @property float $commision_perc
 *
 * @property \App\Model\Entity\Product $product
 * @property \App\Model\Entity\Pricelist $pricelist
 */
class PricelistsProduct extends Entity
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
        'product_id' => false,
        'pricelist_id' => false
    ];
}
