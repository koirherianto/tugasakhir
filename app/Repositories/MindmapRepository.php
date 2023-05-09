<?php

namespace App\Repositories;

use App\Models\Mindmap;
use App\Repositories\BaseRepository;

class MindmapRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'judul',
        'subjudul',
        'posisi',
        'red',
        'green',
        'blue',
        'mindmap_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Mindmap::class;
    }
}
