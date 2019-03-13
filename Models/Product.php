<?php

class Product extends Model
{
    // Set the table name
    protected $table = 'products';

    // Define the relations here
    static protected $belongsTo = [];
    static protected $hasMany = [];

    // Define the properties here. Make them 'protected' and add a docblock

    /**
     * @Type varchar(255)
     */
    protected $title;

    /**
     * @Type varchar(65000)
     */
    protected $description;

    /**
     * @Type decimal(6,2)
     */
    protected $price;

    /**
     * @Type int(11)
     */
    protected $barcode;

    /**
     * @Type varchar(255)
     */
    protected $stock;

    /**
     * @Type varchar(255)
     */
    protected $category;

    /**
     * @Type varchar(255)
     */
    protected $color;

    /**
     * @Type int(11)
     */
    protected $weight;

    /**
     * @Type int(11)
     */
    protected $height;

    /**
     * @Type int(11)
     */
    protected $width;

    /**
     * @Type int(11)
     */
    protected $depth;


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


    public static function addForm()
    {
    	$form = new Form();

        $form->addField((new FormField("title"))
            ->type("text")
            ->placeholder("Title")
            ->required());

        return $form->getHTML();
    }


    public static function editForm($id)
    {
    	$product = Product::findById($id);

    	$form = new Form();

        $form->addField((new FormField("title"))
            ->type("text")
            ->value($product->title)
            ->placeholder("Title")
            ->required());

        return $form->getHTML();
    }


    public static function store($form)
    {
    	$product = new Product();
        $product->title = $form['title'];
        $product->save();

        return $product;
    }


    public static function createRandomProduct()
    {

        $products = [
            'iPhone',
            'HTC',
            'Samsung TV',
            'Laptop HP',
            'Koelkast Etna',
            'Playstation Sony',
            'Boormachine Bosch',
            'Muis Razer',
            'Nintendo Switch',
            'X-Box One',
        ];

        for ($i=0; $i < 100; $i++) {
            $faker = Faker\Factory::create('nl_NL');

            $product = new Product();
            $product->title = $products[array_rand($products)];
            $product->description = $faker->text(200);
            $product->price = $faker->randomNumber(2);
            $product->barcode = substr($faker->creditCardNumber(), 0, 9);
            $product->stock = $faker->randomNumber(2);
            $product->category = '';
            $product->color = array_rand(colors());
            $product->weight = $faker->randomNumber(2);
            $product->width = $faker->randomNumber(2);
            $product->height = $faker->randomNumber(2);
            $product->depth = $faker->randomNumber(2);
            $product->created_at = date('Y-m-d H:i:s');
            $product->updated_at = date('Y-m-d H:i:s');
            $product->save();

            for ($j=0; $j < $faker->randomNumber(2); $j++) {
                ProductDetail::createRandomProductDetail($product, $faker);
            }
        }
    }
}
