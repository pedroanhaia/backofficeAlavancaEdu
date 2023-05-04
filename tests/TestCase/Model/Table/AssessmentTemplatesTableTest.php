<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AssessmentTemplatesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AssessmentTemplatesTable Test Case
 */
class AssessmentTemplatesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AssessmentTemplatesTable
     */
    protected $AssessmentTemplates;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.AssessmentTemplates',
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
        $config = TableRegistry::getTableLocator()->exists('AssessmentTemplates') ? [] : ['className' => AssessmentTemplatesTable::class];
        $this->AssessmentTemplates = TableRegistry::getTableLocator()->get('AssessmentTemplates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->AssessmentTemplates);

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
