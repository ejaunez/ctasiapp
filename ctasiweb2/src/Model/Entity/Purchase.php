<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Purchase Entity
 *
 * @property int $id
 * @property string $provider_id
 * @property string $provider_name
 * @property string $provider_address
 * @property float $net_amount
 * @property float $discount_percentage
 * @property float $discount_amount
 * @property float $tax_amount
 * @property float $total_amount
 * @property \Cake\I18n\FrozenTime $purchase_date
 *
 * @property \App\Model\Entity\Provider $provider
 */
class Purchase extends Entity
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
