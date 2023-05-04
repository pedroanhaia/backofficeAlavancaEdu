<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AssessmentsClassroomsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AssessmentsClassroomsTable Test Case
 */
class AssessmentsClassroomsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AssessmentsClassroomsTable
     */
    protected $AssessmentsClassrooms;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.AssessmentsClassrooms',
        'app.Assessments',
        'app.Classrooms',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('AssessmentsClassrooms') ? [] : ['className' => AssessmentsClassroomsTable::class];
        $this->AssessmentsClassrooms = TableRegistry::getTableLocator()->get('AssessmentsClassrooms', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->AssessmentsClassrooms);

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
