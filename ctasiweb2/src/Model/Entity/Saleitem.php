<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Saleitem Entity
 *
 * @property int $id
 * @property int $sale_id
 * @property string $product_id
 * @property float $quantity
 * @property float $item_price
 * @property float $item_discount
 * @property float $item_net
 * @property float $item_tax
 * @property float $item_total
 *
 * @property \App\Model\Entity\Sale $sale
 * @property \App\Model\Entity\Product $product
 */
class Saleitem extends Entity
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
