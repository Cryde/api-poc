<?php

namespace App\Provider;

use ApiPlatform\Doctrine\Orm\State\CollectionProvider;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Operation;
use ApiPlatform\State\ProviderInterface;

class BookProvider implements ProviderInterface
{

    public function __construct(private readonly CollectionProvider $collectionProvider)
    {
    }

    public function provide(Operation $operation, array $uriVariables = [], array $context = []): object|array|null
    {
        if ($operation instanceof GetCollection) {
            return $this->collectionProvider->provide($operation, $uriVariables, $context);
        }
    }
}