<?php
namespace App\Test\TestCase\Controller;

use App\Controller\PostsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\PostsController Test Case
 */
class PostsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.posts',
        'app.departments',
        'app.regions',
        'app.countries',
        'app.currencies',
        'app.phones',
        'app.customers',
        'app.users',
        'app.campaigns',
        'app.campaigns_customers',
        'app.campaigns_users',
        'app.addresses',
        'app.sales',
        'app.transports',
        'app.stores',
        'app.stocks',
        'app.products',
        'app.units',
        'app.saleitems',
        'app.pricelists',
        'app.pricelists_products',
        'app.transports_posts',
        'app.sale_users',
        'app.aproval_users',
        'app.sectors'
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
