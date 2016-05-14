<?php

namespace Laravolt\Contracts\Eloquent;

interface Uuid
{

    public function createUuid();

    public function fillUuid(array $columns = []);

}
