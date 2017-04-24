<?php

namespace AlgoliaSearch\Tests\Models;

use AlgoliaSearch\Laravel\AlgoliaEloquentTrait;
use Illuminate\Database\Eloquent\Model;

class Model14 extends Model
{
    use AlgoliaEloquentTrait;

    public $algoliaSettings = [
        'replicas' => [
            'contacts_desc'
        ]
    ];

    public $replicasSettings = [
        'contacts_desc' => [
            'ranking' => [
                'desc(name)'
            ]
        ]
    ];
}
