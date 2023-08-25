<?php
namespace App\Enums;

enum InvoiceEnum: string
{
    case Billed = 'B';
    case Paid = 'P';
    case Void = 'V';
}