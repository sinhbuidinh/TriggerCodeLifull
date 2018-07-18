<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\ProductType;

class ProductTypeRepository extends BaseRepository
{
    public $model;

    public function __construct()
    {
        $this->model = new ProductType();
        parent::__construct($this->model);
    }

    public function insertOrUpdate($product_data)
    {
        return [
            'result' => $this->baseInsertOrUpdate($product_data),
            'message' => [
                MESSAGE_TYPE_ERROR   => $this->error_msg,
                MESSAGE_TYPE_SUCCESS => $this->success_msg
            ]
        ];
    }

    public function listAll($id = [], $order = [])
    {
        return $this->getList($id, $order);
    }
}