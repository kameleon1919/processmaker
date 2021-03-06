<?php

use Faker\Generator as Faker;
use ProcessMaker\Models\Process;
use ProcessMaker\Models\ProcessCollaboration;

/**
 * Model factory for a process collaboration
 */
$factory->define(ProcessCollaboration::class, function (Faker $faker) {
    return [
        'process_id' => function () {
            return factory(Process::class)->create()->getKey();
        },
    ];
});
