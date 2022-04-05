<?php

namespace App\Repositories\Eloquent\Converter;

use App\Models\Converter\File;
use Illuminate\Support\Collection;
use App\Repositories\Eloquent\BaseRepository;

/**
 * @FileRepository
 * @package App\Repositories\Eloquent\Converter
 * @author Brazhnikov
 */
class FileRepository extends BaseRepository implements FileRepositoryInterface
{
    /**
     * FileRepository constructor.
     *
     * @param File $model
     */
    public function __construct(File $model)
    {
        parent::__construct($model);
    }

    /**
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->model->all();
    }
}
