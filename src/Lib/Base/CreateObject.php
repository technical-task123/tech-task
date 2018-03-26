<?php
declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-23 19:12
 *
 * @since 1.0.0 First time this was introduced.
 */

/**
 * This namespace is required "\DanchukAS\AmadeusTechTask123\Lib"
 * to search for this file in the directory relative to the file
 * in which the "\DanchukAS\AmadeusTechTask123\Lib" class is implemented.
 *
 * @see \DanchukAS\AmadeusTechTask123\Lib All benefits of "\DanchukAS\AmadeusTechTask123\Lib".
 *
 * @since 1.0.1 First time this was introduced.
 */

namespace DanchukAS\AmadeusTechTask123\Lib\Base;


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
 * @see \DanchukAS\AmadeusTechTask123\Lib how to use and is implemented the call of this class.
 *
 * @package DanchukAS\AmadeusTechTask123\Lib
 * @since 1.0.0 First time this was introduced.
 */
class CreateObject extends \LibFunction
{

    /**
     * Create object by class name and return it.
     *
     * Method is non static and named "run" for uniform and centralised call by \DanchukAS\AmadeusTechTask123\Lib
     * alike other "LibFunctions" and for has all benefits of "LibFunctions".
     * @see \LibFunction All benefits of "LibFunctions".
     * @see \DanchukAS\AmadeusTechTask123\Lib how to use and is implemented the call to this method.
     *
     * @param string|null $class_name Fully qualified or qualified or unqualified name
     *
     * @return mixed
     *
     * @since 1.0.0 Fix bug with param as fully qualified name.
     */
    public function run(string $class_name = null)
    {
        // Support empty object.
        if (null === $class_name) {
            $class_name = \stdClass::class;
        }

        // Make fully qualified name from qualified or unqualified.
        // For uniform behavior of load class
        // named class as it is in global namespace
        // instead wrong next load with prefixed current file namespace.
        if ('\\' !== $class_name[0]) {
            $class_name = '\\' . $class_name;
        }

        // Delegate finding and including the source file for $class_name on the outside.
        return new $class_name();
    }

}
