<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClassroomsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClassroomsTable Test Case
 */
class ClassroomsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ClassroomsTable
     */
    protected $Classrooms;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Classrooms',
        'app.Schools',
        'app.Students',
        'app.Assessments',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Classrooms') ? [] : ['className' => ClassroomsTable::class];
        $this->Classrooms = TableRegistry::getTableLocator()->get('Classrooms', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Classrooms);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
