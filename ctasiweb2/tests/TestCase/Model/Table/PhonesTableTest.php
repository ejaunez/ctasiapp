<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PhonesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PhonesTable Test Case
 */
class PhonesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PhonesTable
     */
    public $Phones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.phones',
        'app.customers',
        'app.users',
        'app.campaigns',
        'app.campaigns_customers',
        'app.campaigns_users',
        'app.addresses',
        'app.departments',
        'app.regions',
        'app.countries',
        'app.currencies',
        'app.pricelists',
        'app.products',
        'app.units',
        'app.saleitems',
        'app.sales',
        'app.transports',
        'app.stores',
        'app.stocks',
        'app.posts',
        'app.transports_posts',
        'app.sale_users',
        'app.aproval_users',
        'app.pricelists_products',
        'app.sectors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Phones') ? [] : ['className' => 'App\Model\Table\PhonesTable'];
        $this->Phones = TableRegistry::get('Phones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Phones);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
