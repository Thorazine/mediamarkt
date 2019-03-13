<?php

class ProductDetail extends Model
{
    // Set the table name
    protected $table = 'product_details';

    // Define the relations here
    static protected $belongsTo = [];
    static protected $hasMany = [];

    // Define the properties here. Make them 'protected' and add a docblock

    /**
     * @Type int(11)
     */
    protected $product_id;

    /**
     * @Type int(11)
     */
    protected $store_id;

    /**
     * @Type varchar(255)
     */
    protected $serialnumber;

    /**
     * @Type varchar(65000)
     */
    protected $description;


    /**
     * @Type timestamp
     */
    protected $created_at;


    /**
     * @Type timestamp
     */
    protected $updated_at;


    // This method is called after filling the model with the values from the form and
    // before saving it to the database. You can add your own adjustments and checks here.
    // If a model shouldn't be saved, simply return false. Else return nothing, or true. Whatever.
    protected static function newModel($obj) {

    }


    public function __construct(){

    }


    public static function createRandomProductDetail($product, $faker)
    {
        $productDetail = new ProductDetail();
        $productDetail->product_id = $product->id;
        $productDetail->store_id = 1;
        $productDetail->serialnumber = $faker->creditCardNumber();
        $productDetail->created_at = date('Y-m-d H:i:s');
        $productDetail->updated_at = date('Y-m-d H:i:s');
        $productDetail->save();
    }
}
