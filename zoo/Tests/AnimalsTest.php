<?php

namespace Zoo\Tests;

use Ds\Set;
use PHPUnit\Framework\TestCase;
use Zoo\Action\Eat;
use Zoo\Action\Move;
use Zoo\Action\NotSupportedAction;
use Zoo\Action\Voice;
use Zoo\Animal\Cat;

/**
 * Class AnimalsTest
 * @package HotelsHandler\Tests
 */
class AnimalsTest extends TestCase
{
    public function testCatEnabledActions()
    {
        $this->expectOutputString(' Zoo\Animal\Cat eat: chicken  Zoo\Animal\Cat do move: jump ');

        $eatAction = new Eat('chicken');
        $moveAction = new Move('jump');

        $supportedActions = new Set();

        $supportedActions->add(Move::class);

        $cat = new Cat($eatAction, $supportedActions);

        $cat->addAction($moveAction);

        $cat->runActions();
    }

    public function testCatDisabledActions()
    {
        $this->expectException(NotSupportedAction::class);

        $eatAction = new Eat('chicken');
        $moveAction = new Move('jump');
        $voiceAction = new Voice('pi');

        $supportedActions = new Set();

        $supportedActions->add(Move::class);

        $cat = new Cat($eatAction, $supportedActions);

        $cat->addAction($moveAction);
        $cat->addAction($voiceAction);

        $cat->runActions();
    }
}