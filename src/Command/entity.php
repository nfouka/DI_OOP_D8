<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Drupal\oop\Command;

/**
 * Description of entity
 *
 * @author nadir
 */
class entity  extends \Symfony\Component\Console\Command\Command {

  use \Drupal\Console\Command\Shared\CommandTrait ;
  
    /**
   * Drupal\Core\Entity\EntityManager definition.
   *
   * @var \Drupal\Core\Entity\EntityManager
   */
  protected $entityManager;
  
      /**
     * @var Connection
     */
  protected $database;
    
    
  /**
   * Constructor.
   */
  public function __construct(  \Drupal\Core\Entity\EntityManager $entity_manager , 
                                \Drupal\Core\Database\Connection $database
          ) {
        parent::__construct() ; 
         $this->entityManager = $entity_manager;
         $this->database = $databases ; 
  }

}
