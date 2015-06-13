<?php

class OrderItem extends Eloquent {

    protected $table = "orderitems";
    protected $guarded = ["id"];
    protected $softDelete = true;

    public function product() {
        return $this->belongsTo("Product");
    }

    public function order() {
        return $this->belongsTo("Order");
    }

    public function getTotalAttribute() {
        return $this->quantity * $this->price;
    }

}