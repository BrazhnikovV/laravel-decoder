<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Eloquent\BaseRepository;
use App\Repositories\Eloquent\Converter\FileRepository;
use App\Repositories\Eloquent\EloquentRepositoryInterface;
use App\Repositories\Eloquent\Converter\FileRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(FileRepositoryInterface::class, FileRepository::class);
    }
}
