<?php

namespace TheSportsDb\Test\PropertyMapper;

use TheSportsDb\Entity\EntityInterface;
use TheSportsDb\Entity\Factory\FactoryContainer;
use TheSportsDb\Entity\Factory\FactoryInterface;
use TheSportsDb\PropertyMapper\PropertyDefinition;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-09-06 at 09:43:25.
 */
class PropertyDefinitionTest extends \PHPUnit_Framework_TestCase {

  /**
   * @covers TheSportsDb\PropertyMapper\PropertyDefinition::getName
   */
  public function testGetName() {
    $propdef = new PropertyDefinition('testProp');
    $this->assertEquals('testProp', $propdef->getName());
    $propdef = new PropertyDefinition('testProp2');
    $this->assertEquals('testProp2', $propdef->getName());
  }

  /**
   * @covers TheSportsDb\PropertyMapper\PropertyDefinition::getEntityType
   */
  public function testGetEntityType() {
    $propdef = new PropertyDefinition('testProp', 'testType');
    $this->assertEquals('testType', $propdef->getEntityType());
    $propdef = new PropertyDefinition('testProp', 'testType2');
    $this->assertEquals('testType2', $propdef->getEntityType());
  }

  /**
   * @covers TheSportsDb\PropertyMapper\PropertyDefinition::isArray
   */
  public function testIsArray() {
    $propdef = new PropertyDefinition('testProp');
    $this->assertFalse($propdef->isArray());
    $propdef = new PropertyDefinition('testProp', NULL, FALSE);
    $this->assertFalse($propdef->isArray());
    $propdef = new PropertyDefinition('testProp', NULL, TRUE);
    $this->assertTrue($propdef->isArray());

  }

  /**
   * @covers TheSportsDb\PropertyMapper\PropertyDefinition::sanitizeProperty
   */
  public function testSanitizeProperty() {
    $this->_testSanitizePropertySimple();
    $this->_testSanitizePropertyEntity();
    $this->_testSanitizePropertySimpleArray();
    $this->_testSanitizePropertyEntityArray();
  }

  /**
   * Test TheSportsDb\PropertyMapper\PropertyDefinition::sanitizeProperty with
   * a simple property.
   */
  private function _testSanitizePropertySimple() {
    // Factory container.
    $factoryContainer = new FactoryContainer();

    // No entity.
    $propdef = new PropertyDefinition('testProp');

    // Data.
    $data = new \stdClass();
    $data->testProp = 'test';

    // Test method.
    $propdef->sanitizeProperty($data, $factoryContainer);
    $this->assertEquals('test', $data->testProp);
  }

  /**
   * Test TheSportsDb\PropertyMapper\PropertyDefinition::sanitizeProperty with
   * an entity property.
   */
  private function _testSanitizePropertyEntity() {
    // Factory container.
    $factoryContainer = new FactoryContainer();

    // Entity, no array.
    $propdef = new PropertyDefinition('testProp', 'mockEntityType');

    // Data.
    $data = new \stdClass();
    $data->testProp = new \stdClass();
    $data->testProp->id = 'test';

    // Mock factory.
    $factory = $this->getMockBuilder(FactoryInterface::class)
      ->disableOriginalConstructor()
      ->getMock();
    $factoryContainer->addFactory($factory, 'mockEntityType');

    // Mock Entity.
    $entity = $this->getMockBuilder(EntityInterface::class)
      ->setMockClassName('MockEntity')
      ->getMock();

    // Mock factory create method.
    $factory->expects($this->once())
      ->method('create')
      ->with($this->equalTo($data->testProp), $this->equalTo('mockEntityType'))
      ->willReturn($entity);

    // Test method.
    $propdef->sanitizeProperty($data, $factoryContainer);
    $this->assertEquals($entity, $data->testProp);
  }

  /**
   * Test TheSportsDb\PropertyMapper\PropertyDefinition::sanitizeProperty with
   * an array property.
   */
  private function _testSanitizePropertySimpleArray() {
    // Factory container.
    $factoryContainer = new FactoryContainer();

    // Array of entities.
    $propdef = new PropertyDefinition('testProp', 'mockEntityType', TRUE);

    // Data.
    $data = new \stdClass();
    $data->testProp = array();
    $data->testProp[0] = new \stdClass();
    $data->testProp[0]->id = 'test1';
    $data->testProp[1] = new \stdClass();
    $data->testProp[1]->id = 'test2';

    // Mock factory.
    $factory = $this->getMockBuilder(FactoryInterface::class)
      ->disableOriginalConstructor()
      ->getMock();
    $factoryContainer->addFactory($factory, 'mockEntityType');

    // Mock Entity.
    $entity1 = $this->getMockBuilder(EntityInterface::class)
      ->setMockClassName('MockEntity1')
      ->getMock();
    $entity2 = $this->getMockBuilder(EntityInterface::class)
      ->setMockClassName('MockEntity2')
      ->getMock();

    // Mock factory create method.
    $factory->expects($this->at(0))
      ->method('create')
      ->with($this->equalTo($data->testProp[0]), $this->equalTo('mockEntityType'))
      ->willReturn($entity1);
    $factory->expects($this->at(1))
      ->method('create')
      ->with($this->equalTo($data->testProp[1]), $this->equalTo('mockEntityType'))
      ->willReturn($entity2);

    // Test method.
    $propdef->sanitizeProperty($data, $factoryContainer);
    $this->assertEquals($entity1, $data->testProp[0]);
    $this->assertEquals($entity2, $data->testProp[1]);
  }
  /**
   * Test TheSportsDb\PropertyMapper\PropertyDefinition::sanitizeProperty with
   * an array of entities property.
   */
  private function _testSanitizePropertyEntityArray() {
    // Factory container.
    $factoryContainer = new FactoryContainer();

    // Array of entities.
    $propdef = new PropertyDefinition('testProp', 'mockEntityType', TRUE);

    // Data.
    $data = new \stdClass();
    $data->testProp = array();

    // Mock entities.
    $entity1 = $this->getMockBuilder(EntityInterface::class)
      ->setMockClassName('MockEntity1')
      ->getMock();
    $entity2 = $this->getMockBuilder(EntityInterface::class)
      ->setMockClassName('MockEntity2')
      ->getMock();

    // Set entities as properties.
    $data->testProp[0] = $entity1;
    $data->testProp[1] = $entity2;

    // Mock factory.
    $factory = $this->getMockBuilder(FactoryInterface::class)
      ->disableOriginalConstructor()
      ->getMock();
    $factoryContainer->addFactory($factory, 'mockEntityType');


    // Mock factory create method (should never be called, items are already
    // entities).
    $factory->expects($this->never())->method($this->anything());

    // Test method.
    $propdef->sanitizeProperty($data, $factoryContainer);
    $this->assertEquals($entity1, $data->testProp[0]);
    $this->assertEquals($entity2, $data->testProp[1]);
  }

}
