<?php

namespace App\Models;


class Job
{
    public static function all()
    {
        return [
            [
                "title" => "Laravel Senior Developer",
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.",
                "salary" => 100000,
            ],
            [
                "title" => "Laravel Junior Developer",
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.",
                "salary" => 50000,
            ],
        ];
    }
}
