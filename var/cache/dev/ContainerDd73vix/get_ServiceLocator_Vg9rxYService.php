<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.vg9rx_y' shared service.

return $this->privates['.service_locator.vg9rx_y'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('schoolStop' => function (): \App\Entity\SchoolStop {
    return ($this->privates['.errored..service_locator.vg9rx_y.App\Entity\SchoolStop'] ?? $this->load('getSchoolStopService.php'));
}));