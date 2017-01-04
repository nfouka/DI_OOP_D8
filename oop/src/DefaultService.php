<?php

namespace Drupal\oop;
use Drupal\Core\Entity\EntityManager;
use Drupal\Core\Session\PermissionsHashGenerator;

/**
 * Class DefaultService.
 *
 * @package Drupal\oop
 */
class DefaultService implements aaa {

  /**
   * Drupal\Core\Entity\EntityManager definition.
   *
   * @var \Drupal\Core\Entity\EntityManager
   */
  protected $entityManager;
  /**
   * Drupal\Core\Session\PermissionsHashGenerator definition.
   *
   * @var \Drupal\Core\Session\PermissionsHashGenerator
   */
  protected $userPermissionsHashGenerator;
  /**
   * Constructor.
   */
  public function __construct(EntityManager $entity_manager, PermissionsHashGenerator $user_permissions_hash_generator) {
    $this->entityManager = $entity_manager;
    $this->userPermissionsHashGenerator = $user_permissions_hash_generator;
  }

}
