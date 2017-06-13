<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TransportsPosts Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Transports
 * @property \Cake\ORM\Association\BelongsTo $Posts
 *
 * @method \App\Model\Entity\TransportsPost get($primaryKey, $options = [])
 * @method \App\Model\Entity\TransportsPost newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TransportsPost[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TransportsPost|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TransportsPost patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TransportsPost[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TransportsPost findOrCreate($search, callable $callback = null, $options = [])
 */
class TransportsPostsTable extends Table
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

        $this->setTable('transports_posts');
        $this->setDisplayField('transport_id');
        $this->setPrimaryKey(['transport_id', 'post_id']);

        $this->belongsTo('Transports', [
            'foreignKey' => 'transport_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Posts', [
            'foreignKey' => 'post_id',
            'joinType' => 'INNER'
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
        $rules->add($rules->existsIn(['transport_id'], 'Transports'));
        $rules->add($rules->existsIn(['post_id'], 'Posts'));

        return $rules;
    }
}
