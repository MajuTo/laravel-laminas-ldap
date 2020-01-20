<?php
namespace MajuTo\LaravelLaminasLdap;

class Ldap extends \Laminas\Ldap\Ldap
{

    public function __construct($options = null)
    {
        parent::__construct($options);
    }

}