<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.eWPu2Tx' shared service.

return $this->privates['.service_locator.eWPu2Tx'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('fabricRepository' => function (): \App\Repository\FabricRepository {
    return ($this->privates['App\Repository\FabricRepository'] ?? $this->load('getFabricRepositoryService.php'));
}));