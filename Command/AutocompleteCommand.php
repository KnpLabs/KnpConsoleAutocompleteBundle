<?php

namespace Bundle\ConsoleAutocompleteBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Initializes a new application.
 *
 * @package    symfony
 * @subpackage console
 * @author     Matthieu Bontemps <matthieu@knplabs.com>
 */
class AutocompleteCommand extends Command\Command
{
    /**
     * @see Command
     */
    protected function configure()
    {
        $this
            ->setDefinition(array(
            ))
            ->setName('console:autocomplete')
            ->setHelp(<<<EOT
The <info>console:autocomplete</info> will provide autocompletion facilities for shells.
For the moment, it just conveniently lists all commands in a shell friendly format.

  <info>php app/console console:autocomplete</info>
EOT
        );
        ;
    }

    /**
     * @see Command
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $commands = $this->application->getCommands();
        $commands = array_keys($commands);

        $output->write(join(" ", $commands), false); 
    }
}
