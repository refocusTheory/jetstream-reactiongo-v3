<?php

  Route::get('file-manager', [ \Modules\Jetstream\Http\Controllers\FilemanagerController::class, 'index' ])->name('app-file-manager');

// Route::group(['prefix' => 'dashboard','middleware' =>['auth','web']], function ()
// {

//   Route::get('/', [BlueprintController::class, 'index'])->name('main-profile');

//   //   Route::get('/test-blueprint-api', [BlueprintController::class, 'testBlueprint']);
//   //   Route::get('/test-fusion-api',    [BlueprintController::class, 'testFusion']);
//   //   Route::get('/test-socialite-api', [BlueprintController::class, 'testSocialite']);
//   //   Route::get('/test-wpxpress-api',  [WpXpressController::class, 'Jetstream_WpXpress_ListLanders']);
//   //   Route::get('/test-adman-api',     [BlueprintController::class, 'testAdman']);
//   //   Route::get('/test-rets-api',      [BlueprintController::class, 'testRETS']);
//   //   Route::get('/test-connect-api',   [ConnectController::class, 'testConnectApi']);
//   //   Route::get('/test-wpxpress-api',  [JetstreamWpXpressController::class, 'JetstreamWpXpressCreatePostType']);

// });
// Route::group(['prefix' => 'dashboard/channels','middleware' =>['auth','web']], function ()
// {
//     // Show all User Channels
//     Route::get('/', [ChannelController::class,'index'])->name('channels-overview');

//     // Show Channel Post Types
//     Route::get('/{channelid}/content/types', [ChannelController::class,'channelDetail'])->name('channel-detail');

//     // Show list of supplied post type ( posts, pages, media...)
//     Route::get('/{channelid}/content/{type}', [ChannelController::class,'channelPosts'])->name('channel-content-list');
    
//     // Show detail of selected postid
//     Route::get('/{channelid}/content/{type}/show/{postid}',  [ChannelController::class, 'channelGetPost'])->name('channel-content-show');

//     // Show update form of selected postid
//     Route::get('/{channelid}/content/{type}/update/{postid}',  [ChannelController::class, 'channelUpdatePostForm'])->name('channel-content-show-update');
    
//     // send post request to AWS
//     Route::post('/{channelid}/content/{type}/update/{postid}',  [JetstreamWpXpressController::class, 'jetstreamWpXpressShowPostType'])->name('channel-content-do-update');

//     // Route::get('/{id}/settings/', [ChannelController::class,'channelSettings'])->name('channel-settings');



// });
// Route::group(['prefix' => 'dashboard/marketing','middleware' =>['auth','web']], function ()
// {
//   Route::get('/', [MarketingController::class,'index'])->name('marketing-overview');
//   Route::get('/file-manager',          [BlueprintController::class,'fileManager']);
// });
// Route::group(['prefix' => 'dashboard/settings','middleware' =>['auth','web']], function ()
// {
//   Route::get('/', [BlueprintController::class,'settings'])->name('settings-overview');
// });
// Route::group(['prefix' => 'dashboard/cloud','middleware' =>['auth','web']], function ()
// {
//   Route::get('file-manager', [BlueprintController::class, 'cloud'])->name('app-file-manager');
//   Route::get('/', [BlueprintController::class,'cloud'])->name('cloud-overview');
// });
