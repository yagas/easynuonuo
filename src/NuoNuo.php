<?php

namespace Easynuonuo;

use Easynuonuo\invoice\invoice;

class NuoNuo
{
    public $appKey;
    public $appSercret;
    public $token;
    public $taxnum;

    public function __construct($appKey, $appSercret, $token, $taxnum)
    {
        $this->appKey = $appKey;
        $this->appSercret = $appSercret;
        $this->token = $token;
        $this->taxnum = $taxnum;
    }
}