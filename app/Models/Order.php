<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['name','order_no', 'phone', 'email', 'address', 'up_long', 'up_body', 'up_bodyLose', 'pat',
                            'put', 'hattarLomba', 'hattarMuk', 'kaf', 'gola', 'plate_fara', 'collar_choura', 'plate_choura',
                            'ghar', 'hif', 'nich_hata', 'madani_fara', 'mota_mor', 'hata_pasting', 'up_pocket', 'up_collar',
                            'up_gola', 'up_plate', 'up_pasting', 'up_lace', 'up_ful', 'up_button', 'low_long', 'low_muk',
                            'low_hie', 'low_ghar', 'low_komor', 'low_belt', 'low_hif', 'low_pocket', 'cost', 'nogod',
                            'order_date', 'd_date', 'up_message', 'low_message'
];

    public function setup_pocketAttribute($order)
    {
        $this->attributes['up_pocket'] = json_encode($order);
    }

    public function getup_pocketAttribute($order)
    {
        return $this->attributes['up_pocket'] = json_decode($order);
    }


    public function setup_collarAttribute($order)
    {
        $this->attributes['up_collar'] = json_encode($order);
    }

    public function getup_collarAttribute($order)
    {
        return $this->attributes['up_collar'] = json_decode($order);
    }

    public function setup_golaAttribute($order)
    {
        $this->attributes['up_gola'] = json_encode($order);
    }

    public function getup_golaAttribute($order)
    {
        return $this->attributes['up_gola'] = json_decode($order);
    }


    public function setup_plateAttribute($order)
    {
        $this->attributes['up_plate'] = json_encode($order);
    }

    public function getup_plateAttribute($order)
    {
        return $this->attributes['up_plate'] = json_decode($order);
    }

    public function setup_pastingAttribute($order)
    {
        $this->attributes['up_pasting'] = json_encode($order);
    }

    public function getup_pastingAttribute($order)
    {
        return $this->attributes['up_pasting'] = json_decode($order);
    }


    public function setup_laceAttribute($order)
    {
        $this->attributes['up_lace'] = json_encode($order);
    }

    public function getup_laceAttribute($order)
    {
        return $this->attributes['up_lace'] = json_decode($order);
    }

    public function setup_fulAttribute($order)
    {
        $this->attributes['up_ful'] = json_encode($order);
    }

    public function getup_fulAttribute($order)
    {
        return $this->attributes['up_ful'] = json_decode($order);
    }

    public function setup_buttonAttribute($order)
    {
        $this->attributes['up_button'] = json_encode($order);
    }

    public function getup_buttonAttribute($order)
    {
        return $this->attributes['up_button'] = json_decode($order);
    }

    public function setlow_pocketAttribute($order)
    {
        $this->attributes['low_pocket'] = json_encode($order);
    }

    public function getlow_pocketAttribute($order)
    {
        return $this->attributes['low_pocket'] = json_decode($order);
    }
}
