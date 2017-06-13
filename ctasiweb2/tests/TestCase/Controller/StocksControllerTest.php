<?php
namespace App\Test\TestCase\Controller;

use App\Controller\StocksController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\StocksController Test Case
 */
class StocksControllerTest extends IntegrationTestCase
{

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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
