<?php

namespace App\Scraper;

use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;
use App\Product;

class phone
{
    
    public function scrape($url,$id)
    {
        
        $client = new Client();
       
        $crawler1 = $client->request('GET', $url);
        $GLOBALS['id1']= $id;
        //print($id1);

        try {
            //code...
            //$crawler = Goutte::request('GET', 'https://badhabitsstore.vn/collections/hoodie-and-sweater?page=3');

                $linkProduct = $crawler1->filter('div.col-lg-12.col-md-12.col-sm-12.col-xs-12 a.page-node')->each(function ($node) {
                //$a=$node->text();
                //print($a . "\n");
                return $node->text();

            //$b =array($a);
            //print($b);

            });
            //print($linkProduct[2]);
            $GLOBALS['page']=end($linkProduct);
            //print($GLOBALS['page']);
            for ($i=0; $i<= $GLOBALS['page']; $i++) { 
                # code...
                //print($i);
                $crawler = $client->request('GET', $url."?page=".$i);
            
                $crawler->filter('div.content-product-list.product-list.filter.clearfix div.col-md-3.col-sm-6.col-xs-6.pro-loop.col-4')->each(
                    function (Crawler $node ) {
                        
                        $title = $node->filter(' h3.pro-name a')->text();
        
                        $price = $node->filter('p.pro-price ')->text();
                        $thumbnail = $node->filter('img.img-loop')->attr('src');
                        
                        $price = preg_replace('/\D/', '', $price);
                        $product = new Product;
                        $thumbnail1= env("Shop").$thumbnail;
        
                        $product->title = $title;
                        $product->price = $price;
                        $product->thumbnail = $thumbnail1;
                        $product->next_page = $GLOBALS['page'];
                        $product->header_id = $GLOBALS['id1'];
                        //$product->rate = $rate;
                        $product->save();
                        print("lay du lieu thanh cong"."\n");
                    }
                );
            };

            
            
        } catch (InvalidArgumentException $e) {
            //throw $th;
        }
        

        
    }
    
    

}