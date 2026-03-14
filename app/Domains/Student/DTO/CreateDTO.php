<?php

namespace App\Domains\Student\DTO\DTO;

class CreateDTO
{
    public function __construct(

    )
    {}

    public static function fromRequest($request)
    {
        return new self();
    }
}
