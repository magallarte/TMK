<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.yAd9_DO' shared service.

return $this->privates['.service_locator.yAd9_DO'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('school' => function (): \App\Entity\School {
    return ($this->privates['.errored..service_locator.yAd9_DO.App\Entity\School'] ?? $this->load('getSchoolService.php'));
}));
