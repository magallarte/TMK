<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.3WLkTWh' shared service.

return $this->privates['.service_locator.3WLkTWh'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('donationBag' => function (): \App\Entity\DonationBag {
    return ($this->privates['.errored..service_locator.3WLkTWh.App\Entity\DonationBag'] ?? $this->load('getDonationBagService.php'));
}));
