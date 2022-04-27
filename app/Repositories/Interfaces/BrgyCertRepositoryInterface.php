<?php

namespace App\Repositories\Interfaces;

interface BrgyCertRepositoryInterface
{
    public function getAll();

    public function getById($id);

    public function updateById($id, $payload);

    public function deleteById($id);
}
