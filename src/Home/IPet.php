<?php

namespace Home;

/**
 * Class IPet
 * @package Home
 *
 * Interface for pet
 */
interface IPet
{
    public function __construct($name);

    public function getName();

    public function feed($food);

    public function getMood();

    public function play($duration);

    public function isPlaying();
}
