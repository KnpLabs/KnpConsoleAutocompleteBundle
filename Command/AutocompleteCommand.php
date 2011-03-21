<?php

namespace Knplabs\Bundle\ConsoleAutocompleteBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
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
                new InputArgument('command_name', InputArgument::OPTIONAL, 'A command name to generate autocomplete options for'),
            ))
            ->setName('console:autocomplete')
            ->setHelp(<<<EOT
The <info>console:autocomplete</info> will provide autocompletion facilities for shells.
For the moment, it just conveniently lists all commands in a shell friendly format.

  <info>php app/console console:autocomplete</info>
EOT
            );
    }

    /**
     * @see Command
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $commandName = $input->getArgument('command_name');
        
        if ($commandName !== null && $this->getApplication()->has($commandName)) {
            $this->autocompleteOptionName($input, $output, $commandName);
            
        } else {
            $this->autocompleteCommandName($input, $output);
        }
    }
    
    protected function autocompleteOptionName(InputInterface $input, OutputInterface $output, $commandName)
    {
        $options = array_merge(
            $this->getApplication()->get($commandName)->getDefinition()->getOptions(),
            $this->getApplication()->getDefinition()->getOptions()
        );
        $options = array_map(function($option) {
            return '--' . $option->getName();
        }, $options);
        $output->write(join(" ", $options), false);
    }
    
    protected function autocompleteCommandName(InputInterface $input, OutputInterface $output)
    {
        $commands = $this->getApplication()->all();
        $commands = array_keys($commands);
        $output->write(join(" ", $commands), false);
    }
}
