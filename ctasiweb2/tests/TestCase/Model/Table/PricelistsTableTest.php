<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PricelistsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PricelistsTable Test Case
 */
class PricelistsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PricelistsTable
     */
    public $Pricelists;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pricelists',
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
        'app.products',
        'app.units',
        'app.saleitems',
        'app.sales',
        'app.sale_users',
        'app.aproval_users',
        'app.pricelists_products',
        'app.transports_posts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Pricelists') ? [] : ['className' => 'App\Model\Table\PricelistsTable'];
        $this->Pricelists = TableRegistry::get('Pricelists', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Pricelists);

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
