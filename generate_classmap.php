<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: danchukas
 * Date: 2018-03-23 21:33
 */

$current_dir = __DIR__;
$map = walk_dir($current_dir);
file_put_contents('class_map', '<?php return ' . var_export($map, true) . ';');

function walk_dir($current_dir)
{
    $class_map = [];

    $dir_item_list = \scandir($current_dir, SCANDIR_SORT_ASCENDING);
    // delete . and ..
    $dir_item_list = \array_slice($dir_item_list, 2);

    foreach ($dir_item_list as $name) {
        $filename = $current_dir . DIRECTORY_SEPARATOR . $name;
        if (is_file($filename)) {
            $class = get_class_from_file($filename);
            $class_map[$class] = str_replace(__DIR__, '.', $filename);
        } else {
            $class_map = \array_merge($class_map, \walk_dir($filename));
        }
    }

    return $class_map;
}


function get_class_from_file($path_to_file)
{
    //Grab the contents of the file
    $contents = file_get_contents($path_to_file);

    //Start with a blank namespace and class
    $namespace = $class = "";

    //Set helper values to know that we have found the namespace/class token and need to collect the string values after them
    $getting_namespace = $getting_class = false;

    //Go through each token and evaluate it as necessary
    foreach (token_get_all($contents) as $token) {

        //If this token is the namespace declaring, then flag that the next tokens will be the namespace name
        if (is_array($token) && $token[0] == T_NAMESPACE) {
            $getting_namespace = true;
        }

        //If this token is the class declaring, then flag that the next tokens will be the class name
        if (is_array($token)
            && ($token[0] == T_CLASS || $token[0] == T_INTERFACE || $token[0] == T_TRAIT)
        ) {
            $getting_class = true;
        }

        //While we're grabbing the namespace name...
        if ($getting_namespace === true) {

            //If the token is a string or the namespace separator...
            if (is_array($token) && in_array($token[0], [T_STRING, T_NS_SEPARATOR])) {

                //Append the token's value to the name of the namespace
                $namespace .= $token[1];

            } else if ($token === ';') {

                //If the token is the semicolon, then we're done with the namespace declaration
                $getting_namespace = false;

            }
        }

        //While we're grabbing the class name...
        if ($getting_class === true) {

            //If the token is a string, it's the name of the class
            if (is_array($token) && $token[0] == T_STRING) {

                //Store the token's value as the class name
                $class = $token[1];

                //Got what we need, stope here
                break;
            }
        }
    }

    //Build the fully-qualified class name and return it
    return $namespace ? $namespace . '\\' . $class : $class;

}