<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StocksTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StocksTable Test Case
 */
class StocksTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StocksTable
     */
    public $Stocks;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stocks',
        'app.stores',
        'app.transports',
        'app.sales',
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
        'app.phones',
        'app.pricelists',
        'app.products',
        'app.units',
        'app.saleitems',
        'app.pricelists_products',
        'app.sectors',
        'app.posts',
        'app.transports_posts',
        'app.sale_users',
        'app.aproval_users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Stocks') ? [] : ['className' => 'App\Model\Table\StocksTable'];
        $this->Stocks = TableRegistry::get('Stocks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Stocks);

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
