<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.uO5nSH6' shared service.

return $this->privates['.service_locator.uO5nSH6'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('memberRepository' => function (): \App\Repository\MemberRepository {
    return ($this->privates['App\Repository\MemberRepository'] ?? $this->load('getMemberRepositoryService.php'));
}));
