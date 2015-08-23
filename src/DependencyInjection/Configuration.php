<?php

namespace NilPortugues\Symfony2\JsonApiBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    const DEFAULT_PATH = '%kernel.root_dir%/config/serializer/';
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();

        $treeBuilder
            ->root('nilportugues_json_api')
                ->children()
                    ->scalarNode('mappings')->isRequired()->cannotBeEmpty()->defaultValue(self::DEFAULT_PATH)->end()
                ->end()
        ;

        return $treeBuilder;
    }
}
