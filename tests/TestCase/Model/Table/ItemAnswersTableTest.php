<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ItemAnswersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ItemAnswersTable Test Case
 */
class ItemAnswersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ItemAnswersTable
     */
    protected $ItemAnswers;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ItemAnswers',
        'app.Students',
        'app.Assessments',
        'app.Items',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ItemAnswers') ? [] : ['className' => ItemAnswersTable::class];
        $this->ItemAnswers = TableRegistry::getTableLocator()->get('ItemAnswers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ItemAnswers);

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
