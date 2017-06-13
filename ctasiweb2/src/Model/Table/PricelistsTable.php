<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pricelists Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Countries
 * @property \Cake\ORM\Association\BelongsToMany $Products
 *
 * @method \App\Model\Entity\Pricelist get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pricelist newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pricelist[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pricelist|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pricelist patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pricelist[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pricelist findOrCreate($search, callable $callback = null, $options = [])
 */
class PricelistsTable extends Table
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

        $this->setTable('pricelists');
        $this->setDisplayField('name');
        $this->setPrimaryKey('pricelist_id');

        $this->belongsTo('Countries', [
            'foreignKey' => 'country_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsToMany('Products', [
            'foreignKey' => 'pricelist_id',
            'targetForeignKey' => 'product_id',
            'joinTable' => 'pricelists_products'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->dateTime('begin_date')
            ->allowEmpty('begin_date');

        $validator
            ->dateTime('end_date')
            ->allowEmpty('end_date');

        $validator
            ->allowEmpty('event');

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
        $rules->add($rules->existsIn(['country_id'], 'Countries'));

        return $rules;
    }
}
