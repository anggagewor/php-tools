<?php

namespace Anggagewor\PhpTools\Commands;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'hello', description: 'Say hello from Angga Tools')]
class SampleCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('<info>Hello from php-tools!</info>');
        return Command::SUCCESS;
    }
}
