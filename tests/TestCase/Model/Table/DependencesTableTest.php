<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DependencesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DependencesTable Test Case
 */
class DependencesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DependencesTable
     */
    protected $Dependences;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Dependences',
        'app.Departments',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Dependences') ? [] : ['className' => DependencesTable::class];
        $this->Dependences = TableRegistry::getTableLocator()->get('Dependences', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Dependences);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
