<?php

namespace App\Domains\Student\DTO\DTO;

class UpdateDTO
{
    public function __construct(

    )
    {}

    public static function fromRequest($request)
    {
        return new self();
    }
}
