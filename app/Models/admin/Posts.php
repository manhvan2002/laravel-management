<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Posts extends Model
{
    use HasFactory;

    protected  $table = 'customers';
    protected  $primaryKey = 'id';
    public     $incrementing = true;
    public     $timestamps = true;
    const      CREATED_AT = 'created_at';
    const      UPDATED_AT = 'updated_at';
}