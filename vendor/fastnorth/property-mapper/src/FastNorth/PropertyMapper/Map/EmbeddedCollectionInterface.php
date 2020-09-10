<?php

namespace FastNorth\PropertyMapper\Map;

use FastNorth\PropertyMapper\MapInterface;
use FastNorth\PropertyMapper\FactoryInterface;

/**
 * EmbeddedCollectionInterface
 *
 * An embedded collection
 */
interface EmbeddedCollectionInterface extends LinkedInterface
{
    /**
     * Get the map for the collection
     */
    public function getMap();

    /**
     * Get the factory for new items
     *
     * @return FactoryInterface
     */
    public function getFactory();
}
