# Universally Unique Identifier (UUID) for Laravel Eloquent

Generate UUID automatically when creating/inserting new data.


## Install

Via Composer

``` bash
$ composer require laravolt/eloquent-uuid
```

Then register the service provider, head over your `config/app.php` file and add the following line into the `providers` array:

``` php
Laravolt\Database\Eloquent\UuidServiceProvider::class,
```

## Usage

### Create/Alter Database Table Column Type


### Implement in Eloquent Model

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
