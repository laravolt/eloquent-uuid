# Universally Unique Identifier (UUID) for Laravel Eloquent

## Install

Via Composer

``` bash
$ composer require laravolt/eloquent-uuid
```

## Usage

``` php
<?php

namespace App;

use Laravolt\Contracts\Eloquent\Uuid as UuidContract;
use Laravolt\Database\Eloquent\Uuid;

class Book extends Model implements UuidContract
{
    use Uuid;

    // Uuid Columns
    protected $uuid = ['id'];
```
