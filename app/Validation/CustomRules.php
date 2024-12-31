<?php

namespace App\Validation;

use Exception;

class CustomRules
{
    public function __construct()
    {
    }

    /**
     * Checks an uploaded file to verify that the dimensions are within
     * a specified allowable dimension.
     */
    public function min_dims(?string $blank, string $params): bool
    {
        $params = explode(',', $params);
        // Get uploaded image size
        $fileWidth  = $params[0];
        $fileHeight = $params[1];
        // Get Parameter sizes
        $allowedWidth  = $params[2] ?? 0;
        $allowedHeight = $params[3] ?? 0;
        if ($fileWidth < $allowedWidth || $fileHeight < $allowedHeight) {
            return false;
        }
        return true;
    }

    public function orderExist(string $str, string $fields, array $data): bool
    {
        try {
            $db = \Config\Database::connect();
            $order = $db->table('orders')->select('id')->where('id', $str)->get()->getRowArray();
            if (!empty($order)) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return false;
        }
    }
}
