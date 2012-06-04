THIS PROJECT IS NO LONGER MAINTAINED by KnpLabs
------------------------------------------------
Contact us if you want to be the official maintainer of this Bundle

# ConsoleAutocompleteBundle

This bundle provides a simple way of autocompleting your commands in your shell.

## Installation

Installation is a quick (I promise!) 4 step process:

1. Download KnpConsoleAutocompleteBundle
2. Configure the Autoloader
3. Enable the Bundle
4. Add profile shortcut

### Step 1: Download KnpConsoleAutocompleteBundle

Ultimately, the KnpConsoleAutocompleteBundle files should be downloaded to the
`vendor/bundles/Knp/Bundle/ConsoleAutocompleteBundle` directory.

This can be done in several ways, depending on your preference. The first
method is the standard Symfony2 method.

**Using the vendors script**

Add the following lines in your `deps` file:

```
[KnpConsoleAutocompleteBundle]
    git=https://github.com/KnpLabs/KnpConsoleAutocompleteBundle.git
    target=/bundles/Knp/Bundle/ConsoleAutocompleteBundle
```

Now, run the vendors script to download the bundle:

``` bash
$ php bin/vendors install
```

**Using submodules**

If you prefer instead to use git submodules, then run the following:

``` bash
$ git submodule add git://github.com/KnpLabs/KnpConsoleAutocompleteBundle.git vendor/bundles/Knp/Bundle/ConsoleAutocompleteBundle
$ git submodule update --init
```

### Step 2: Configure the Autoloader

Add the `Knp` namespace to your autoloader:

``` php
<?php
// app/autoload.php

$loader->registerNamespaces(array(
    // ...
    'Knp' => __DIR__.'/../vendor/bundles',
));
```

### Step 3: Enable the bundle

Finally, enable the bundle in the kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Knp\Bundle\ConsoleAutocompleteBundle\KnpConsoleAutocompleteBundle(),
    );
}
```

### Step 4: Add profile shortcut

The first time you install `KnpConsoleAutocompleteBundle` in a project, you should add `Resources/Shells/symfony2-completion.bash` in your bash profile (in `~/.bash_profile` on MacOS and `~/.bashrc` on Ubuntu Debian or other linux):

``` bash
source /path-to-symfony2-completion.bash
```

## Usage

That's it! Now when you type:

`./app/console doc[TAB]`, you should see an autocompletion of the command name.

`./app/console doctrine:fixtures:load --[TAB]`, you should see an autocompletion of the option names.

Valid executable names are:

* `console`
* `Symfony`

## Troubleshooting

If none of these names do it for you, you can enable completion for your own executable. Add this line to your bash profile, just below where you sourced `symfony2-completion.bash`:

    complete -F _console my-console-name

## Copyright & Credits

KnpConsoleAutocompleteBundle Copyright (c) 2011 [KnpLabs](http://KnpLabs.com).  
See LICENSE for details.

Contributors:

* [Matthieu Bontemps](https://github.com/mbontemps)
* [Justin Hileman](https://github.com/bobthecow)