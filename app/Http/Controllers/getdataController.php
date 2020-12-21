<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Sunra\PhpSimple\HtmlDomParser;
use Ixudra\Curl\Facades\Curl;
use Goutte;

class getdataController extends Controller
{	

	
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getData()
    { 
            $url= 'https://www.delightsdirect.co.uk/Fancy-Dress/ProductDetail.aspx?StockCode=HENP143';
           // $url = 'https://www.sattacademy.com/job-solution/view?cat_id=1&sub_cat_id=768';
            
            $crawler = Goutte::request('GET',  $url);
            $crawler->filter('#HENP143_0_StockAvail')->each(function ($node) {
                print_r($node->text());
            });
            //var_dump($crawler);

            // $crawler->filter('.card')->each(function ($node) {
        
            //     $node->filter('.card-title a')->each(function ($title) {
        
            //         print $title->text()."\n";
                   
            
            //     });

            //     $node->filter('.answer')->each(function ($answer) {
        
            //         print $answer->text()."\n";
                   
            
            //     });

            //     $node->filter('.rightAns')->each(function ($rightAns) {
        
            //         print "rightAns:".$rightAns->text()."\n";
                   
            
            //     });

            // });
            
            

    		//$url = 'http://www.studytable.net/';
        	//$document = HtmlDomParser::str_get_html($url);
			//$html=$response->content;

			//var_dump($html);

    }
}
