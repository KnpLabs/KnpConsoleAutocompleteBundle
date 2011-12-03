# ConsoleAutocompleteBundle

This bundle provides a simple way of autocompleting your commands in your shell.

## Installation

If you are following symfony-standard deps you can do this:

    [ConsoleAutocompleteBundle]
    git=https://github.com/KnpLabs/KnpConsoleAutocompleteBundle.git
    target=/bundles/Knp/Bundle/ConsoleAutocompleteBundle

If not then just download the bundle and put it under the `Knp/` namespace or

If you use git submodules:

    git submodule add https://github.com/KnpLabs/ConsoleAutocompleteBundle.git vendor/bundles/Knp/Bundle/ConsoleAutocompleteBundle

Then, like for any other bundle, include it in your Kernel class:

    public function registerBundles()
    {
        $bundles = array(
            // enable third-party bundles
            ...
            new Knp\Bundle\ConsoleAutocompleteBundle\KnpConsoleAutocompleteBundle(),
            
            // register your bundles
            ...
        );

        ...
    }
    
The first time you install `ConsoleAutocompleteBundle` in a project, you should add `Resources/Shells/symfony2-completion.bash` in your bash profile (in `~/.bash_profile` on MacOS and `~/.bashrc` on Ubuntu Debian or other linux):

    ...
    source /path-to-symfony2-completion.bash

That's it! Now when you type:

`./app/console doc[TAB]`, you should see an autocompletion of the command name.

`./app/console doctrine:fixtures:load --[TAB]`, you should see an autocompletion of the option names.

Valid executable names are:

* `console`
* `Symfony`

If none of these names do it for you, you can enable completion for your own executable. Add this line to your bash profile, just below where you sourced `symfony2-completion.bash`:

    complete -F _console my-console-name

## Copyright & Credits

ConsoleAutocompleteBundle Copyright (c) 2011 [KnpLabs](http://KnpLabs.com).  
See LICENSE for details.

Contributors:

* [Matthieu Bontemps](https://github.com/mbontemps)
* [Justin Hileman](https://github.com/bobthecow)