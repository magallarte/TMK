<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.j6g6xTt' shared service.

return $this->privates['.service_locator.j6g6xTt'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('fabric' => function (): \App\Entity\Fabric {
    return ($this->privates['.errored..service_locator.j6g6xTt.App\Entity\Fabric'] ?? $this->load('getFabricService.php'));
}));
