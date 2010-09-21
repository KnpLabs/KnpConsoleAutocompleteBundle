# ConsoleAutocompleteBundle

This bundle provides a simple way of autocompleting your commands in your shell.

## Bash

Include `ConsoleAutocompleteBundle/Resources/Shells/symfony2-completion.bash` in your bash profile:

    …
    source /path-to-symfony2-completion.bash

Enable the `ConsoleAutocompleteBundle` in your Symfony2 project.

That's it! Now when you type:

`./myproject/console doc[TAB]`, you should see an autocompletion.

## Credits

[knpLabs](http://www.knplabs.com), Matthieu Bontemps.
