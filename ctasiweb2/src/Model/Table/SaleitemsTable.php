<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Saleitems Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Sales
 * @property \Cake\ORM\Association\BelongsTo $Products
 *
 * @method \App\Model\Entity\Saleitem get($primaryKey, $options = [])
 * @method \App\Model\Entity\Saleitem newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Saleitem[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Saleitem|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Saleitem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Saleitem[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Saleitem findOrCreate($search, callable $callback = null, $options = [])
 */
class SaleitemsTable extends Table
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

        $this->setTable('saleitems');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Sales', [
            'foreignKey' => 'sale_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Products', [
            'foreignKey' => 'product_id'
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
            ->numeric('quantity')
            ->allowEmpty('quantity');

        $validator
            ->numeric('item_price')
            ->allowEmpty('item_price');

        $validator
            ->numeric('item_discount')
            ->allowEmpty('item_discount');

        $validator
            ->numeric('item_net')
            ->allowEmpty('item_net');

        $validator
            ->numeric('item_tax')
            ->allowEmpty('item_tax');

        $validator
            ->numeric('item_total')
            ->allowEmpty('item_total');

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
        $rules->add($rules->existsIn(['sale_id'], 'Sales'));
        $rules->add($rules->existsIn(['product_id'], 'Products'));

        return $rules;
    }
}
