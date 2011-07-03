<?php

namespace Knp\Bundle\ConsoleAutocompleteBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle as BaseBundle;

class KnpConsoleAutocompleteBundle extends BaseBundle
{
    /**
     * {@inheritdoc}
     */
    public function getNamespace()
    {
        return __NAMESPACE__;
    }

    /**
     * {@inheritdoc}
     */
    public function getPath()
    {
        return strtr(__DIR__, '\\', '/');
    }
}
