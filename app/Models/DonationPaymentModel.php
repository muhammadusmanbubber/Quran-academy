<?php

namespace App\Models;

use CodeIgniter\Model;

class DonationPaymentModel extends Model
{
    protected $table      = 'donation_payment';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'id',
        'user_id',
        'amount',
        'payment_date',
        'payment_method',
        'transaction_id',
        'payment_status',
        'created_at',
        'updated_at',
    ];

    // Enable automatic timestamp updates
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
