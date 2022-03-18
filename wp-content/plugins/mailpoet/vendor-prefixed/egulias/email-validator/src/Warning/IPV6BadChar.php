<?php
namespace MailPoetVendor\Egulias\EmailValidator\Warning;
if (!defined('ABSPATH')) exit;
class IPV6BadChar extends Warning
{
 const CODE = 74;
 public function __construct()
 {
 $this->message = 'Bad char in IPV6 domain literal';
 $this->rfcNumber = 5322;
 }
}
