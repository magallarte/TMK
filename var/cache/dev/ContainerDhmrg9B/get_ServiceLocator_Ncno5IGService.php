<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.Ncno5IG' shared service.

return $this->privates['.service_locator.Ncno5IG'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('news' => function (): \App\Entity\News {
    return ($this->privates['.errored..service_locator.Ncno5IG.App\Entity\News'] ?? $this->load('getNewsService.php'));
}));
