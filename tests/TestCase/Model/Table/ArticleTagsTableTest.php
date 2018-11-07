<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArticleTagsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArticleTagsTable Test Case
 */
class ArticleTagsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ArticleTagsTable
     */
    public $ArticleTags;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.article_tags',
        'app.articles',
        'app.tags'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ArticleTags') ? [] : ['className' => ArticleTagsTable::class];
        $this->ArticleTags = TableRegistry::getTableLocator()->get('ArticleTags', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ArticleTags);

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
