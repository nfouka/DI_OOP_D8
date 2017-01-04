<?php

namespace Drupal\oop\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Command\Command;
use Drupal\Console\Command\Shared\CommandTrait;
use Drupal\Console\Style\DrupalStyle;

/**
 * Class DefaultCommand.
 *
 * @package Drupal\oop
 */
class DefaultCommand extends Command {

  use CommandTrait;

  /**
   * {@inheritdoc}
   */
  protected function configure() {
    $this
      ->setName('oop_command')
      ->setDescription($this->trans('commands.oop_command.description'));
  }

  /**
   * {@inheritdoc}
   */
  protected function execute(InputInterface $input, OutputInterface $output) {
    $io = new DrupalStyle($input, $output);

    $io->info($this->trans('commands.oop_command.messages.success'));
  }
}
