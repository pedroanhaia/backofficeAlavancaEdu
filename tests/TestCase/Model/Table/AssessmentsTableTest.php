<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AssessmentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AssessmentsTable Test Case
 */
class AssessmentsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AssessmentsTable
     */
    protected $Assessments;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Assessments',
        'app.AssessmentTemplates',
        'app.AssesstementsItems',
        'app.ItemAnswers',
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
        $config = TableRegistry::getTableLocator()->exists('Assessments') ? [] : ['className' => AssessmentsTable::class];
        $this->Assessments = TableRegistry::getTableLocator()->get('Assessments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Assessments);

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
