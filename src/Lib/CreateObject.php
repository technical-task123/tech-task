<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\Lib;


/**
 * Class CreateObject
 *
 * Use is for create any object in project.
 *
 * Help, detect, control creation any objects in one place, instead anonymous.
 * Have access to projects functions.
 * Project functions has possibility to get any information from and give any information
 * to processes of find class and creation object.
 * Is possibile include any triggers on finding class, pre and post creation.
 *
 * Example:
 * - add a secondary using of all or some created instances,
 * instead creation every time new.
 * - add property
 * - add, delete, replace namespace
 * - change autoload system
 * - add monitoring for creation process
 * - add handling to creation process (try ... catch, etc.)
 *
 * @package DanchukAS\AmadeusTechTask123\Lib
 */
class CreateObject extends \LibFunction
{

    /**
     * Method is non static and named "run" for uniform and centralised call alike other "LibFunctions"
     * and for has all benefits of "LibFunctions"
     * @see \LibFunction for view all benefits of "LibFunctions"
     *
     * @param string|null $class_name
     *
     * @return object
     */
    public function run(string $class_name = null): object
    {
        // Support empty object.
        if (null === $class_name) {
            $class_name = \stdClass::class;
        }

        // For class names alike as class in global namespace
        if ('\\' !== $class_name[0]) {

            // For uniform behavior of load class
            // named class as it is in global namespace
            // instead wrong next load with prefixed current file namespace.
            $class_name = '\\' . $class_name;
        }

        return new $class_name();
    }

}
