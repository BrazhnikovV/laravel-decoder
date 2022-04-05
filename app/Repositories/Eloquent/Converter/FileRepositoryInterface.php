<?php

namespace App\Repositories\Eloquent\Converter;

use Illuminate\Support\Collection;

/**
 * @FileRepositoryInterface
 * @package App\Repositories\Eloquent\Converter
 * @author Brazhnikov
 */
interface FileRepositoryInterface
{
    public function all(): Collection;
}
