<?php
declare(strict_types=1);

/**
 * Add correct line ending to string and show it
 *
 * @param string|null $string
 */
function output(string $string = null): void
{
    echo $string . (PHP_SAPI === 'cli' ? "\r\n" : '<br/>');
}