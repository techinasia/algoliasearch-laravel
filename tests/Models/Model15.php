<?php

namespace AlgoliaSearch\Tests\Models;

use AlgoliaSearch\Laravel\AlgoliaEloquentTrait;
use Illuminate\Database\Eloquent\Model;

class Model15 extends Model
{
    use AlgoliaEloquentTrait;

    public function algoliaSettings($indexName)
    {
        return [
            'replicas' => $indexName === 'index1' ? [] : ['model_15_desc']
        ];
    }

    public function replicasSettings($indexName)
    {
        if ($indexName === 'index1') {
            return [];
        }

        return [
            'model_15_desc' => [
                'ranking' => [
                    'desc(name)'
                ]
            ]
        ];
    }
}