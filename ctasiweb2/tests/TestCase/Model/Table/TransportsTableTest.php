<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TransportsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TransportsTable Test Case
 */
class TransportsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TransportsTable
     */
    public $Transports;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.transports',
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
        'app.transports_posts',
        'app.sales',
        'app.sale_users',
        'app.aproval_users',
        'app.saleitems',
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
        $config = TableRegistry::exists('Transports') ? [] : ['className' => 'App\Model\Table\TransportsTable'];
        $this->Transports = TableRegistry::get('Transports', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Transports);

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
