<?php

namespace App\Provider;

use ApiPlatform\Doctrine\Orm\State\CollectionProvider;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\Operation;
use ApiPlatform\State\ProviderInterface;

class UserProvider implements ProviderInterface
{
    public function __construct(private readonly CollectionProvider $collectionProvider)
    {
    }

    public function provide(Operation $operation, array $uriVariables = [], array $context = []): object|array|null
    {
        // add debug here to check if it come here to get anything
        if ($operation instanceof Get) {
            return $this->collectionProvider->provide($operation, $uriVariables, $context);
        }
    }
}