<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Purchases Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Providers
 *
 * @method \App\Model\Entity\Purchase get($primaryKey, $options = [])
 * @method \App\Model\Entity\Purchase newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Purchase[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Purchase|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Purchase patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Purchase[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Purchase findOrCreate($search, callable $callback = null, $options = [])
 */
class PurchasesTable extends Table
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

        $this->setTable('purchases');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Providers', [
            'foreignKey' => 'provider_id'
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
            ->allowEmpty('provider_name');

        $validator
            ->allowEmpty('provider_address');

        $validator
            ->decimal('net_amount')
            ->allowEmpty('net_amount');

        $validator
            ->decimal('discount_percentage')
            ->allowEmpty('discount_percentage');

        $validator
            ->decimal('discount_amount')
            ->allowEmpty('discount_amount');

        $validator
            ->decimal('tax_amount')
            ->allowEmpty('tax_amount');

        $validator
            ->decimal('total_amount')
            ->allowEmpty('total_amount');

        $validator
            ->dateTime('purchase_date')
            ->allowEmpty('purchase_date');

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
        $rules->add($rules->existsIn(['provider_id'], 'Providers'));

        return $rules;
    }
}
