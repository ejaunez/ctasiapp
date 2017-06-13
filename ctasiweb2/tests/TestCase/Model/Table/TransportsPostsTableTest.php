<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TransportsPostsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TransportsPostsTable Test Case
 */
class TransportsPostsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TransportsPostsTable
     */
    public $TransportsPosts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.transports_posts',
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
        $config = TableRegistry::exists('TransportsPosts') ? [] : ['className' => 'App\Model\Table\TransportsPostsTable'];
        $this->TransportsPosts = TableRegistry::get('TransportsPosts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TransportsPosts);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
