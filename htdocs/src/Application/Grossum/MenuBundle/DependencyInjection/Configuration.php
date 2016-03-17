<?php

namespace Application\Grossum\MenuBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('application_grossum_menu');

        $this->addModelSection($rootNode);

        return $treeBuilder;
    }

    /**
     * @param ArrayNodeDefinition $node
     */
    private function addModelSection(ArrayNodeDefinition $node)
    {
//        $node
//            ->children()
//                ->arrayNode('class')
//                    ->addDefaultsIfNotSet()
//                    ->children()
//                        ->scalarNode('menu')->defaultValue('Application\\Grossum\\MenuBundle\\Entity\\Menu')->end()
//                        ->scalarNode('menu_item')->defaultValue('Application\\Grossum\\MenuBundle\\Entity\\MenuItem')
//                        ->end()
//                    ->end()
//                ->end()
//            ->end();
    }
}
