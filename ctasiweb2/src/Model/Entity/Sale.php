<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sale Entity
 *
 * @property int $id
 * @property int $customer_id
 * @property int $address_id
 * @property int $phone_id
 * @property \Cake\I18n\FrozenTime $sale_date
 * @property \Cake\I18n\FrozenTime $dispatch_date
 * @property string $transport_id
 * @property float $items_qty
 * @property float $sale_commission
 * @property float $sale_net
 * @property float $sale_tax
 * @property float $sale_total
 * @property int $sale_user_id
 * @property int $aproval_user_id
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Address $address
 * @property \App\Model\Entity\Phone $phone
 * @property \App\Model\Entity\Transport $transport
 * @property \App\Model\Entity\SaleUser $sale_user
 * @property \App\Model\Entity\AprovalUser $aproval_user
 * @property \App\Model\Entity\Saleitem[] $saleitems
 */
class Sale extends Entity
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
