<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SaleitemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SaleitemsTable Test Case
 */
class SaleitemsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SaleitemsTable
     */
    public $Saleitems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.saleitems',
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
        'app.stocks',
        'app.stores',
        'app.transports',
        'app.posts',
        'app.transports_posts',
        'app.pricelists_products',
        'app.sectors',
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
        $config = TableRegistry::exists('Saleitems') ? [] : ['className' => 'App\Model\Table\SaleitemsTable'];
        $this->Saleitems = TableRegistry::get('Saleitems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Saleitems);

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
