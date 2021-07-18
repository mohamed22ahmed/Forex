<?php

namespace App\Http\Controllers\forex;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class ForexController extends Controller
{
    // forex dashboard
    public function index(){
        if(!check_market())
            return redirect(route('forex.market_stop'));
        if(!check_logout())
            return redirect('/logout');
        $client = new Client();
    	$response = $client->request('GET', 'http://localhost/dashboardforex/index2.php');
        $body = $response->getBody()->getContents();
        $dataset=json_decode($body);

        return view('forex.index',compact('dataset'));
    }
    public function index_test(){
        if(!check_market())
            return redirect(route('forex.market_stop'));
        if(!check_logout())
            return redirect('/logout');
        $client = new Client();
    	$response = $client->request('GET', 'http://localhost/dashboardforex/index2.php');
        $body = $response->getBody()->getContents();
        $dataset=json_decode($body);

        return response()->json($dataset);
    }

    // index liquidity
    public function index_liquidity(){
        if(!check_market())
            return redirect(route('forex.market_stop'));
        if(!check_logout())
            return redirect('/logout');
        $client = new Client();
    	$response = $client->request('GET', 'http://localhost/dashboardforex/liquidity-Json.php');
        $body = $response->getBody()->getContents();
        $dataset=json_decode($body);

        return view('forex.index_liquidity',compact('dataset'));
    }
    public function index_liquidity_test(){
        if(!check_market())
            return redirect(route('forex.market_stop'));
        if(!check_logout())
            return redirect('/logout');
        $client = new Client();
    	$response = $client->request('GET', 'http://localhost/dashboardforex/liquidity-Json.php');
        $body = $response->getBody()->getContents();
        $dataset=json_decode($body);

        return response()->json($dataset);
    }

    // currency pair liquidity
    public function currency_pair(){
        if(!check_market())
            return redirect(route('forex.market_stop'));
        if(!check_logout())
            return redirect('/logout');
        $client = new Client();
    	$response = $client->request('GET', 'http://localhost/dashboardforex/currence_liquidity_json.php');
        $body = $response->getBody()->getContents();
        $dataset=json_decode($body);

        return view('forex.currency_pair',compact('dataset'));
    }
    public function currency_pair_test(){
        if(!check_market())
            return redirect(route('forex.market_stop'));
        if(!check_logout())
            return redirect('/logout');
        $client = new Client();
    	$response = $client->request('GET', 'http://localhost/dashboardforex/currence_liquidity_json.php');
        $body = $response->getBody()->getContents();
        $dataset=json_decode($body);

        return response()->json($dataset);
    }

    // index frame
    public function index_frame(){
        if(!check_market())
            return redirect(route('forex.market_stop'));
        if(!check_logout())
            return redirect('/logout');
        $client = new Client();
    	$response = $client->request('GET', 'http://localhost/dashboardforex/index-frames-json.php');
        $body = $response->getBody()->getContents();
        $dataset=json_decode($body);

        return view('forex.index_frame',compact('dataset'));
    }
    public function index_frame_test(){
        if(!check_market())
            return redirect(route('forex.market_stop'));
        if(!check_logout())
            return redirect('/logout');
        $client = new Client();
    	$response = $client->request('GET', 'http://localhost/dashboardforex/index-frames-json.php');
        $body = $response->getBody()->getContents();
        $dataset=json_decode($body);

        return response()->json($dataset);
    }

    // Trading Live
    public function trading_live(){
        if(!check_market())
            return redirect(route('forex.market_stop'));
        if(!check_logout())
            return redirect('/logout');
        $client = new Client();
    	$response = $client->request('GET', 'http://localhost/dashboardforex/trading-json.php');
        $body = $response->getBody()->getContents();
        $dataset=json_decode($body);

        return view('forex.trading_live',compact('dataset'));
    }
    public function trading_live_test(){
        if(!check_market())
            return redirect(route('forex.market_stop'));
        if(!check_logout())
            return redirect('/logout');
        $client = new Client();
    	$response = $client->request('GET', 'http://localhost/dashboardforex/trading-json.php');
        $body = $response->getBody()->getContents();
        $dataset=json_decode($body);

        return response()->json($dataset);
    }


    public function market(){
        if(!check_market())
            return redirect(route('forex.market_stop'));
        if(!check_logout())
            return redirect('/logout');
        $client = new Client();
    	$response = $client->request('GET', 'http://localhost/dashboardforex/market-json.php');
        $body = $response->getBody()->getContents();
        $dataset=json_decode($body);

        return view('forex.market',compact('dataset'));
    }
    public function market_test(){
        if(!check_market())
            return redirect(route('forex.market_stop'));
        if(!check_logout())
            return redirect('/logout');
        $client = new Client();
    	$response = $client->request('GET', 'http://localhost/dashboardforex/market-json.php');
        $body = $response->getBody()->getContents();
        $dataset=json_decode($body);

        return response()->json($dataset);
    }


    public function Commodities(){
        if(!check_market())
            return redirect(route('forex.market_stop'));
        if(!check_logout())
            return redirect('/logout');
        $client = new Client();
    	$response = $client->request('GET', 'http://localhost/dashboardforex/Commodities_json.php');
        $body = $response->getBody()->getContents();
        $dataset=json_decode($body);

        return view('forex.Commodities',compact('dataset'));
    }
    public function Commodities_test(){
        if(!check_market())
            return redirect(route('forex.market_stop'));
        if(!check_logout())
            return redirect('/logout');
        $client = new Client();
    	$response = $client->request('GET', 'http://localhost/dashboardforex/Commodities_json.php');
        $body = $response->getBody()->getContents();
        $dataset=json_decode($body);

        return response()->json($dataset);
    }

    public function Crypto(){
        if(!check_market())
            return redirect(route('forex.market_stop'));
        if(!check_logout())
            return redirect('/logout');
        $client = new Client();
    	$response = $client->request('GET', 'http://localhost/dashboardforex/Crypto_json.php');
        $body = $response->getBody()->getContents();
        $dataset=json_decode($body);

        return view('forex.Crypto',compact('dataset'));
    }
    public function Crypto_test(){
        if(!check_market())
            return redirect(route('forex.market_stop'));
        if(!check_logout())
            return redirect('/logout');
        $client = new Client();
    	$response = $client->request('GET', 'http://localhost/dashboardforex/Crypto_json.php');
        $body = $response->getBody()->getContents();
        $dataset=json_decode($body);

        return response()->json($dataset);
    }

    public function US_Stocks(){
        if(!check_market())
            return redirect(route('forex.market_stop'));
        if(!check_logout())
            return redirect('/logout');
        $client = new Client();
    	$response = $client->request('GET', 'http://localhost/dashboardforex/US_Stocks_json.php');
        $body = $response->getBody()->getContents();
        $dataset=json_decode($body);

        return view('forex.US_Stocks',compact('dataset'));
    }
    public function US_Stocks_test(){
        if(!check_market())
            return redirect(route('forex.market_stop'));
        if(!check_logout())
            return redirect('/logout');
        $client = new Client();
    	$response = $client->request('GET', 'http://localhost/dashboardforex/US_Stocks_json.php');
        $body = $response->getBody()->getContents();
        $dataset=json_decode($body);

        return response()->json($dataset);
    }


    public function commodities_dashboard(){
        if(!check_market())
            return redirect(route('forex.market_stop'));
        if(!check_logout())
            return redirect('/logout');
        $client = new Client();
    	$response = $client->request('GET', 'http://localhost/dashboardforex/commodities_dashboard.php');
        $body = $response->getBody()->getContents();
        $dataset=json_decode($body);

        return view('forex.commodities_dashboard',compact('dataset'));
    }
    public function commodities_dashboard_test(){
        if(!check_market())
            return redirect(route('forex.market_stop'));
        if(!check_logout())
            return redirect('/logout');
        $client = new Client();
    	$response = $client->request('GET', 'http://localhost/dashboardforex/commodities_dashboard.php');
        $body = $response->getBody()->getContents();
        $dataset=json_decode($body);

        return response()->json($dataset);
    }

    public function stocks_dashboard(){
        if(!check_market())
            return redirect(route('forex.market_stop'));
        if(!check_logout())
            return redirect('/logout');
        $client = new Client();
    	$response = $client->request('GET', 'http://localhost/dashboardforex/stocks_dashboard.php');
        $body = $response->getBody()->getContents();
        $dataset=json_decode($body);

        return view('forex.stocks_dashboard',compact('dataset'));
    }
    public function stocks_dashboard_test(){
        if(!check_market())
            return redirect(route('forex.market_stop'));
        if(!check_logout())
            return redirect('/logout');
        $client = new Client();
    	$response = $client->request('GET', 'http://localhost/dashboardforex/stocks_dashboard.php');
        $body = $response->getBody()->getContents();
        $dataset=json_decode($body);

        return response()->json($dataset);
    }


    public function crypto_dashboard(){
        if(!check_market())
            return redirect(route('forex.market_stop'));
        if(!check_logout())
            return redirect('/logout');
        $client = new Client();
    	$response = $client->request('GET', 'http://localhost/dashboardforex/crypto_dashboard.php');
        $body = $response->getBody()->getContents();
        $dataset=json_decode($body);

        return view('forex.crypto_dashboard',compact('dataset'));
    }
    public function crypto_dashboard_test(){
        if(!check_market())
            return redirect(route('forex.market_stop'));
        if(!check_logout())
            return redirect('/logout');
        $client = new Client();
    	$response = $client->request('GET', 'http://localhost/dashboardforex/crypto_dashboard.php');
        $body = $response->getBody()->getContents();
        $dataset=json_decode($body);

        return response()->json($dataset);
    }

    public function USStocks_dashboard(){
        if(!check_market())
            return redirect(route('forex.market_stop'));
        if(!check_logout())
            return redirect('/logout');
        $client = new Client();
    	$response = $client->request('GET', 'http://localhost/dashboardforex/USStocks_dashboard.php');
        $body = $response->getBody()->getContents();
        $dataset=json_decode($body);

        return view('forex.USStocks_dashboard',compact('dataset'));
    }
    public function USStocks_dashboard_test(){
        if(!check_market())
            return redirect(route('forex.market_stop'));
        if(!check_logout())
            return redirect('/logout');
        $client = new Client();
    	$response = $client->request('GET', 'http://localhost/dashboardforex/USStocks_dashboard.php');
        $body = $response->getBody()->getContents();
        $dataset=json_decode($body);

        return response()->json($dataset);
    }


    public function daily_market(){
        if(!check_market())
            return redirect(route('forex.market_stop'));

        if(!check_logout())
            return redirect('/logout');
        return view('forex.daily_market');
    }

    public function market_stop(){
        return view('forex.market_stop');
    }
}
