<?php
namespace Grossum\Tests\Unit\Entity;

use Grossum\Tests\Unit\EntityTestCaseTrait;
use Grossum\MenuBundle\Entity\BaseMenu;

class BaseMenuTest extends \PHPUnit_Framework_TestCase
{
    use EntityTestCaseTrait;

    public function testProperties()
    {
        $properties = [
            ['id', 1],
            ['name', 'menu'],
            ['createdAt', new \DateTime()],
            ['updatedAt', new \DateTime()],
        ];
        $this->assertPropertyAccessors($this->createBaseMenu(), $properties);
    }
    /**
     * Test ProductTaxCode relations
     */
    public function testRelations()
    {
        $this->assertPropertyCollections($this->createBaseMenu(), [
            ['menus', new BaseMenu()],
        ]);
    }
    public function testToString()
    {
        $entity = new BaseMenu();
        $this->assertEmpty((string)$entity);
        $entity->setCode('test');
        $this->assertEquals('test', (string)$entity);
    }
    public function testPreUpdate()
    {
        $baseMenu = $this->createBaseMenu();
        $baseMenu->preUpdate();
        $this->assertInstanceOf('\DateTime', $baseMenu->getUpdatedAt());
    }
    public function testPrePersist()
    {
        $baseMenu = $this->createBaseMenu();
        $baseMenu->prePersist();
        $this->assertInstanceOf('\DateTime', $baseMenu->getUpdatedAt());
        $this->assertInstanceOf('\DateTime', $baseMenu->getCreatedAt());
    }
    /**
     * @return BaseMenu
     */
    private function createBaseMenu()
    {
        return new BaseMenu();
    }
}
