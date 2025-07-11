<?php

namespace App\Enums;

enum UserType: string
{
    case Influencer = 'influencer';
    case Supplier = 'supplier';
    case Admin = 'admin';
} 