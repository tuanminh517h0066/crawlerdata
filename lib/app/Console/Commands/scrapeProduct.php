<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Goutte;
use App\Product;
class scrapeProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrape:product';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        
        $crawler = Goutte::request('GET', 'https://badhabitsstore.vn/');

        $linkProduct = $crawler->filter('ul.clearfix.clonemenu li a')->each(function ($node) {
            //$a=$node->attr("href");
            //print(env("Shop").$a . "\n");
            return $node->attr("href");

            //$b =array($a);
            //print($b);

        });
        $url1 = env("Shop1").$linkProduct[1];
        print($url1. "\n");
        
        //$bot = new \App\Scraper\phone();
        //$bot->scrape($url1);
        
        

        
        $crawler1 = Goutte::request('GET', $url1);

        $linkProduct1 = $crawler1->filter('ul.tree-menu.xx li a')->each(function ($node) {
            $a = $node->attr("href");
            return env("Shop1").$a;
            //return $node->attr("href");

            //$b =array($a);
            //print($b);
            //$bot = new \App\Scraper\phone();
            //$bot->scrape();

        });
        //$url1=$linkProduct[0];
        //print($url1);
        //$bot = new \App\Scraper\phone();
        //$bot->scrape($url1);
        
        //$url1=env("Shop1").$linkProduct[1];
        //print(count($linkProduct)."\n");

        for ($i=0; $i < count($linkProduct1); $i++) { 
            # code...
            //print($linkProduct[$i]);
            $bot = new \App\Scraper\phone();
            $bot->scrape($linkProduct1[$i]);
        }
        
        
        
        
    }

}
    /* EXAMPLE SECTION 
    public static function scrapeProduct($url){
        /*
        $crawler = Goutte::request('GET', $url);
        $title = $crawler->filter('p.name.product-title > a')->each(function ($node) {
            //print($node->text() . "\n");
            return $node->text();
        });
        /*
        if(isset($title[0])){
            $title = $title[0];
        }
        
        print("title lay duoc la: " .$title . "\n");

        $price = $crawler->filter('span.price > span.woocommerce-Price-amount.amount')->each(function ($node) {
            //print($node->text() . "\n");
            return $node->text();
        });
        /*
        if(isset($price[0])){
            $price = $price[0];
        }
        

        $price = preg_replace('/\D/', '', $price);

        print("gia lay duoc la: " .$price . "\n");

        $thumbnail = $crawler->filter('div.image-fade_in_back > a > img.attachment-woocommerce_thumbnail.size-woocommerce_thumbnail.wp-post-image')->each(function ($node) {
            //print($node->text() . "\n");
            return $node->attr('src');
        });
        /*
        if(isset($thumbnail[0])){
            $thumbnail = $thumbnail[0];
        }
        

        print("thumbnail lay duoc la: " .$thumbnail . "\n");

        $data = [
            'title' => $title,
            'price' => $price,
            'thumbnail' => $thumbnail,

        ];

        Product::create($data);
        
        $crawler = Goutte::request('GET', $url);

        $crawler->filter('div.products-container ul.cols cols-5 li.cate-pro-short')->each(
            function (Crawler $node) {
                //if(isset($title)){
                $title = $node->filter('h3#product_link')->text();

                //}
                //if(isset($price)){
                $price = $node->filter('p.special-price span.price')->text();
                //}
                //if(isset($thumbnail)){
                $thumbnail = $node->filter('div.lt-product-group-image a img#product_link.cpslazy.loaded')->attr("src");
                //
            //}
                $price = preg_replace('/\D/', '', $price);
                
                
                
            }
            

        );
            print($title."\n");

            
           
            
           

        

    }
    */
    

