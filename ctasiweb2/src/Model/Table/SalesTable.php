<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sales Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Customers
 * @property \Cake\ORM\Association\BelongsTo $Addresses
 * @property \Cake\ORM\Association\BelongsTo $Phones
 * @property \Cake\ORM\Association\BelongsTo $Transports
 * @property \Cake\ORM\Association\BelongsTo $SaleUsers
 * @property \Cake\ORM\Association\BelongsTo $AprovalUsers
 * @property \Cake\ORM\Association\HasMany $Saleitems
 *
 * @method \App\Model\Entity\Sale get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sale newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sale[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sale|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sale patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sale[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sale findOrCreate($search, callable $callback = null, $options = [])
 */
class SalesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('sales');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id'
        ]);
        $this->belongsTo('Addresses', [
            'foreignKey' => 'address_id'
        ]);
        $this->belongsTo('Phones', [
            'foreignKey' => 'phone_id'
        ]);
        $this->belongsTo('Transports', [
            'foreignKey' => 'transport_id'
        ]);
        $this->belongsTo('SaleUsers', [
            'foreignKey' => 'sale_user_id'
        ]);
        $this->belongsTo('AprovalUsers', [
            'foreignKey' => 'aproval_user_id'
        ]);
        $this->hasMany('Saleitems', [
            'foreignKey' => 'sale_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->dateTime('sale_date')
            ->allowEmpty('sale_date');

        $validator
            ->dateTime('dispatch_date')
            ->allowEmpty('dispatch_date');

        $validator
            ->numeric('items_qty')
            ->allowEmpty('items_qty');

        $validator
            ->numeric('sale_commission')
            ->allowEmpty('sale_commission');

        $validator
            ->numeric('sale_net')
            ->allowEmpty('sale_net');

        $validator
            ->numeric('sale_tax')
            ->allowEmpty('sale_tax');

        $validator
            ->numeric('sale_total')
            ->allowEmpty('sale_total');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));
        $rules->add($rules->existsIn(['address_id'], 'Addresses'));
        $rules->add($rules->existsIn(['phone_id'], 'Phones'));
        $rules->add($rules->existsIn(['transport_id'], 'Transports'));
        $rules->add($rules->existsIn(['sale_user_id'], 'SaleUsers'));
        $rules->add($rules->existsIn(['aproval_user_id'], 'AprovalUsers'));

        return $rules;
    }
}
