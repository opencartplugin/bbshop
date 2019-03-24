<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JobServicesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JobServicesTable Test Case
 */
class JobServicesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\JobServicesTable
     */
    public $JobServices;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.JobServices',
        'app.Jobs',
        'app.Services'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('JobServices') ? [] : ['className' => JobServicesTable::class];
        $this->JobServices = TableRegistry::getTableLocator()->get('JobServices', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->JobServices);

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
