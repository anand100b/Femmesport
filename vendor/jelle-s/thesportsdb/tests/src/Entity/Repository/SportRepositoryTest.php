<?php

namespace TheSportsDb\Entity\Repository;

use TheSportsDb\Entity\SportInterface;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-09-14 at 08:48:20.
 */
class SportRepositoryTest extends \PHPUnit_Framework_TestCase {

  /**
   * @var \TheSportsDb\Entity\Repository\SportRepository
   */
  protected $sportRepository;

  /**
   * Sets up the fixture, for example, opens a network connection.
   * This method is called before a test is executed.
   */
  protected function setUp() {
    include __DIR__ . '/../../../../default_bootstrap.php';
    $this->sportRepository = isset($container) ? $container->get('thesportsdb.repository.sport') : $repositoryContainer->getRepository('sport');
  }

  /**
   * Tears down the fixture, for example, closes a network connection.
   * This method is called after a test is executed.
   */
  protected function tearDown() {
    $this->sportRepository = NULL;
  }

  /**
   * @covers TheSportsDb\Entity\Repository\SportRepository::byId
   */
  public function testById() {
    $sport = $this->sportRepository->byId('Soccer');
    // Should be a sport.
    $this->assertInstanceOf(SportInterface::class, $sport);
    $this->assertEquals('Soccer', $sport->getName());

    // Try a fake sport.
    $sport = $this->sportRepository->byId('FakeSport123');
    // Should be a sport.
    $this->assertInstanceOf(SportInterface::class, $sport);
    $this->assertEquals('FakeSport123', $sport->getName());

    // Sport doesn't exist, so exception when we try to load its leagues.
    $this->expectException(\Exception::class);
    $this->expectExceptionMessage('Could not fully load sport with id FakeSport123.');
    $sport->getLeagues();
  }

  /**
   * @covers TheSportsDb\Entity\Repository\SportRepository::all
   * @todo   Implement testAll().
   */
  public function testAll() {
    $sports = $this->sportRepository->all();
    $this->assertNotEmpty($sports);
    foreach ($sports as $sport) {
      // Should be a sport.
      $this->assertInstanceOf(SportInterface::class, $sport);
    }
  }

}
