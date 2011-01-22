# ConsoleAutocompleteBundle

This bundle provides a simple way of autocompleting your commands in your shell.

## Installation

Download the bundle and put it under the `Knplabs/` namespace.

If you use git submodules:

    git submodule add git://github.com/knplabs/ConsoleAutocompleteBundle.git src/Bundle/Knplabs/ConsoleAutocompleteBundle

Then, like for any other bundle, include it in your Kernel class:

    public function registerBundles()
    {
        $bundles = array(
            // enable third-party bundles
            ...
            new Bundle\Knplabs\ConsoleAutocompleteBundle\KnplabsConsoleAutocompleteBundle(),
            
            // register your bundles
            ...
        );

        ...
    }
    
The first time you install `ConsoleAutocompleteBundle` in a project, you should add `Resources/Shells/symfony2-completion.bash` in your bash profile (in `~/.bash_profile` on MacOS):

    ...
    source /path-to-symfony2-completion.bash

That's it! Now when you type:

`./app/console doc[TAB]`, you should see an autocompletion.

Valid executable names are:

* `console`
* `console-dev`
* `console-prod`
* `console-staging`
* `console-test`
* `Symfony`

## Credits

[knpLabs](http://www.knplabs.com), Matthieu Bontemps.
