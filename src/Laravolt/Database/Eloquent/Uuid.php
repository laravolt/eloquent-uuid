<?php

namespace Laravolt\Database\Eloquent;

use Exception;
use Ramsey\Uuid\Uuid as BaseUuid;

trait Uuid
{

    public function createUuid()
    {
        return BaseUuid::uuid4()->getHex();
    }

    public function fillUuid(array $columns = [])
    {
        if (! isset($this->uuid)) {
            throw new Exception(sprintf('UUID columns is not defined in model %s', get_class($this)));
        }

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
