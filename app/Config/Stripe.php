<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Stripe extends BaseConfig
{
    public $secret_key;
    public $publishable_key;

    public function __construct()
    {
        parent::__construct();

        // Load the keys from environment variables
        $this->secret_key = getenv('STRIPE_SECRET_KEY') ?: 'sk_test_51PseEjHiseu988hv3PmHnAtUXiheOF5dpNLanz5Jb1dIaTEG9jK0eAUv7aMsnTtQUw7O3OlueuP1kLKRyqkSQs9100D7EawK9L';
        $this->publishable_key = getenv('STRIPE_PUBLISHABLE_KEY') ?: 'pk_test_51PseEjHiseu988hvnlG8tFkJsJhcpSvg9Gv06IpYdcIqyZdSm9B8NM39g8Tpmko717TfnL7hHWgnv7dxywOsO0FO007joWU84P';
    }
}
