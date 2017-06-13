<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PricelistsProductsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PricelistsProductsTable Test Case
 */
class PricelistsProductsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PricelistsProductsTable
     */
    public $PricelistsProducts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pricelists_products',
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
        'app.stores',
        'app.stocks',
        'app.sales',
        'app.sale_users',
        'app.aproval_users',
        'app.saleitems',
        'app.transports_posts',
        'app.pricelists'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PricelistsProducts') ? [] : ['className' => 'App\Model\Table\PricelistsProductsTable'];
        $this->PricelistsProducts = TableRegistry::get('PricelistsProducts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PricelistsProducts);

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
