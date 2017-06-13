<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StoresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StoresTable Test Case
 */
class StoresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StoresTable
     */
    public $Stores;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stores',
        'app.stocks',
        'app.products',
        'app.units',
        'app.countries',
        'app.currencies',
        'app.phones',
        'app.customers',
        'app.users',
        'app.campaigns',
        'app.campaigns_customers',
        'app.campaigns_users',
        'app.addresses',
        'app.departments',
        'app.regions',
        'app.sectors',
        'app.posts',
        'app.transports',
        'app.sales',
        'app.sale_users',
        'app.aproval_users',
        'app.saleitems',
        'app.transports_posts',
        'app.pricelists',
        'app.pricelists_products'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Stores') ? [] : ['className' => 'App\Model\Table\StoresTable'];
        $this->Stores = TableRegistry::get('Stores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Stores);

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
}
