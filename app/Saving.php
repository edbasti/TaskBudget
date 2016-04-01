<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saving extends Model
{
    /**
     * Fillable fields
     * 
     * @var array
     */
    protected $fillable = [
        'code',
        'amount',
        'description',
        'category'
    ];

    public function period()
    {
        return $this->belongsTo('App\Period');
    }

    public function scopeAssets($query)
    {
        return $query->where('category', '=', 'asset');
    }

    public function scopeExpenses($query)
    {
        return $query->where('category', '=', 'expense');
    }
}
