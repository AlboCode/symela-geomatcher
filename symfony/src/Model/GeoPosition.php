<?php

namespace App\Model;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiProperty;

#[ApiResource]
class GeoPosition
{
    #[ApiProperty(identifier: true)]
    public $id;

    public $latitude;

    public $longitude;

    public $description;
}
