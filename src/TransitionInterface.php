<?php

namespace Workflux;

interface TransitionInterface
{
    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     *
     * @return boolean
     */
    public function isActivatedBy(InputInterface $input, OutputInterface $output): bool;

    /**
     * @return string
     */
    public function getFrom(): string;

    /**
     * @return string
     */
    public function getTo(): string;
}
