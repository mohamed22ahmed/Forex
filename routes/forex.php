<?php


Route::prefix('forex')->middleware('forex')->name('forex.')->group(function(){
    Route::get('/index','ForexController@index')->name('index');
    Route::get('/index_test','ForexController@index_test')->name('index_test');

    Route::get('/index_liquidity','ForexController@index_liquidity')->name('index_liquidity');
    Route::get('/index_liquidity_test','ForexController@index_liquidity_test')->name('index_liquidity_test');

    Route::get('/currency_pair','ForexController@currency_pair')->name('currency_pair');
    Route::get('/currency_pair_test','ForexController@currency_pair_test')->name('currency_pair_test');

    Route::get('/index_frame','ForexController@index_frame')->name('index_frame');
    Route::get('/index_frame_test','ForexController@index_frame_test')->name('index_frame_test');

    Route::get('/trading_live','ForexController@trading_live')->name('trading_live');
    Route::get('/trading_live_test','ForexController@trading_live_test')->name('trading_live_test');



    Route::get('/US_Stocks','ForexController@US_Stocks')->name('US_Stocks');
    Route::get('/US_Stocks_test','ForexController@US_Stocks_test')->name('US_Stocks_test');


    Route::get('/market','ForexController@market')->name('market');
    Route::get('/market_test','ForexController@market_test')->name('market_test');

    Route::get('/Commodities','ForexController@Commodities')->name('Commodities');
    Route::get('/Commodities_test','ForexController@Commodities_test')->name('Commodities_test');

    Route::get('/Crypto','ForexController@Crypto')->name('Crypto');
    Route::get('/Crypto_test','ForexController@Crypto_test')->name('Crypto_test');

    Route::get('/commodities_dashboard','ForexController@commodities_dashboard')->name('commodities_dashboard');
    Route::get('/commodities_dashboard_test','ForexController@commodities_dashboard_test')->name('commodities_dashboard_test');

    Route::get('/stocks_dashboard','ForexController@stocks_dashboard')->name('stocks_dashboard');
    Route::get('/stocks_dashboard_test','ForexController@stocks_dashboard_test')->name('stocks_dashboard_test');

    Route::get('/crypto_dashboard','ForexController@crypto_dashboard')->name('crypto_dashboard');
    Route::get('/crypto_dashboard_test','ForexController@crypto_dashboard_test')->name('crypto_dashboard_test');

    Route::get('/USStocks_dashboard','ForexController@USStocks_dashboard')->name('USStocks_dashboard');
    Route::get('/USStocks_dashboard_test','ForexController@USStocks_dashboard_test')->name('USStocks_dashboard_test');


    Route::get('/daily_market','ForexController@daily_market')->name('daily_market');
    Route::get('/market_stop','ForexController@market_stop')->name('market_stop');
});
