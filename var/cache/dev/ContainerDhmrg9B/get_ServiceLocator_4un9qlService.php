<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.4un_9ql' shared service.

return $this->privates['.service_locator.4un_9ql'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('deliveryBag' => function (): \App\Entity\DeliveryBag {
    return ($this->privates['.errored..service_locator.4un_9ql.App\Entity\DeliveryBag'] ?? $this->load('getDeliveryBagService.php'));
}));
