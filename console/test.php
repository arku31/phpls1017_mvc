<?php
namespace AppBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Formatter\OutputFormatter;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Output\OutputInterface;

class CreateUserCommand extends Command
{
    protected function configure()
    {
        $this->setName('calc:smth')
            ->setDescription('Calcing smth.')
            ->setHelp('This command allows you to create a user...');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output = new ConsoleOutput();
        $output->setFormatter(new OutputFormatter(true));

        $output->writeln(
            '<comment>Calculating</comment> your'
            .' <info>income</info>'
        );


        $rows = 10;
        $progressBar = new ProgressBar($output, $rows);
        $progressBar->setBarCharacter('<fg=magenta>$</>');
        $progressBar->setProgressCharacter(".");

        $table = new Table($output);
        for ($i = 0; $i<$rows; $i++) {
            $table->addRow([
                sprintf('In round <info>#%s</info> you got', $i),
                rand(0, 1000)."$"
            ]);
            usleep(300000);

            $progressBar->advance();
        }

        $progressBar->finish();
        $output->writeln('');
        $table->render();
    }
}