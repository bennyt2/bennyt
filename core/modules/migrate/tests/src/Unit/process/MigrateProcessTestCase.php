<?php

/**
 * @file
 * Contains \Drupal\Tests\migrate\Unit\process\MigrateProcessTestCase.
 */

namespace Drupal\Tests\migrate\Unit\process;

use Drupal\Tests\migrate\Unit\MigrateTestCase;

abstract class MigrateProcessTestCase extends MigrateTestCase {

  /**
   * @var \Drupal\migrate\Plugin\MigrateProcessInterface
   */
  protected $plugin;

  /**
   * @var \Drupal\migrate\Row
   */
  protected $row;

  /**
   * @var \Drupal\migrate\MigrateExecutable
   */
  protected $migrateExecutable;

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    $this->row = $this->getMockBuilder('Drupal\migrate\Row')
      ->disableOriginalConstructor()
      ->getMock();
    $this->migrateExecutable = $this->getMockBuilder('Drupal\migrate\MigrateExecutable')
      ->disableOriginalConstructor()
      ->getMock();

    parent::setUp();
  }

}
