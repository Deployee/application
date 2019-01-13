<?php


namespace Deployee\Components\Application;

use Deployee\Components\Container\ContainerInterface;

abstract class Command extends \Symfony\Component\Console\Command\Command
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * @param ContainerInterface $container
     */
    public function setContainer(ContainerInterface $container)
    {
        $this->container = $container;
    }
}