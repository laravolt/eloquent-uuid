<?php

namespace Laravolt\Database\Eloquent;

use Ramsey\Uuid\Uuid as BaseUuid;

trait Uuid
{

    public function createUuid()
    {
        return BaseUuid::uuid4()->getHex();
    }

    public function fillUuid(array $columns = [])
    {
        if (empty($columns)) {
            $columns = $this->uuid;
        }

        foreach ($columns as $column) {

            if (is_null($this->getAttribute($column))) {

                if ($column == $this->getKeyName()) {
                    $this->setIncrementing(false);
                }

                $this->setAttribute($column, $this->createUuid());

            }
        }

        return $this;
    }

}
