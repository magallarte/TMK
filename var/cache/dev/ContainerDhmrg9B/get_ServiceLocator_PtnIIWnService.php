<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.ptnIIWn' shared service.

return $this->privates['.service_locator.ptnIIWn'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('deliveryRepository' => function (): \App\Repository\DeliveryRepository {
    return ($this->privates['App\Repository\DeliveryRepository'] ?? $this->load('getDeliveryRepositoryService.php'));
}));