<?php
declare(strict_types=1);

namespace DanchukAS\AmadeusTechTask123\GlobalFunctionLib;


class MergeRunParam extends \LibFunction
{

    public function run(\IHasRunParam $object, \ARunParam ...$additionRunParam)
    {
        $merged_run_param = $this->lib->getRunParam($object);
        foreach ($additionRunParam as $runParam) {
            foreach ($runParam as $name => $value) {
                if (null !== $value) {
                    /** @noinspection PhpVariableVariableInspection */
                    $merged_run_param->$name = $value;
                }
            }
        }

    }

}