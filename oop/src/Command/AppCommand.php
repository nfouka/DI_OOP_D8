<?php

namespace Drupal\oop\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Drupal\Console\Command\Shared\CommandTrait;
use Drupal\Console\Style\DrupalStyle;

/**
 * Class AppCommand.
 *
 * @package Drupal\oop
 */
class AppCommand extends entity  {
  
   protected $event ;
    
    public function __construct(
                        \Drupal\Core\Entity\EntityManager $entity_manager, 
                        \Drupal\Core\Database\Connection $database , 
                        \Drupal\Component\EventDispatcher\ContainerAwareEventDispatcher $event 
                            ) {
        parent::__construct($entity_manager, $database);
        $this->event = $event  ;  
               
    }


    /**
   * {@inheritdoc}
   */
  protected function configure() {
    $this
      ->setName('app')
      ->setDescription($this->trans('commands.app.description'));
  }

  /**
   * {@inheritdoc}
   */
  protected function execute(InputInterface $input, OutputInterface $output) {
    $io = new DrupalStyle($input, $output);
    $io->info($this->trans('commands.app.messages.success'));
  }
}
