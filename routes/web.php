<?php

use Illuminate\Support\Facades\Route;
 
 
Route::get("/",function(){
    return view('welcome');
})->name('index');
 
Route::get('/about',function(){
        return view('about');
})->name('about');

Route::get('/post',function(){
        return view('post');
})->name('post');
   
  
Route::get('/test',function(){
        return view('test');
});

























// this is starting of routes details ---------------------------------------------------------------->>>
// Route::get('/', function () {
//     return view('welcome');
// })->name('home');   // this is name route


//  // fallback function ---------------------------------------------------->>>
// // this fallback function hide default 404 laravel page and show our page when user acces undefined page or route or view
// Route::fallback(function(){
//     return "<h1>Page not found you can access another routes....</h1>";
// });




// Routes group -------------------------------------------------------->>
// creating many sub route of one route using route group 
 

// Route::prefix('page')->group(function(){
//     Route::get('/post/1',function(){
//         return "<h1>This is post/1 sub route</h1>";
//     });
    
//     Route::get('/about',function(){
//         return "<h1>This is about sub route</h1>";
//     });
    
//     Route::get('++/gallery',function(){
//         return "<h1>This is gallery sub route</h1>";
//     });
// });



// without routes groups 
// Route::get('/page/post/1',function(){
//     return "<h1>This is post/1 sub route</h1>";
// });

// Route::get('/page/about',function(){
//     return "<h1>This is about sub route</h1>";
// });

// Route::get('/page/gallery',function(){
//     return "<h1>This is gallery sub route</h1>";
// });









// name routs ------------------------------------------------>>

// Route::get('/post-us',function(){
//     return view('post');
// })->name('post');   // this is named route , it use to give the name for route for anchore tag

// Route::get('/test',function(){
//     return view('about');
// });


// page redirection and their code ------------------------------------------>>
//Route::redirect('/about','/test',301); // it  basically use to bookmark if we change our route path we redirect always old routs
   //  these all are use to page redirations  it helpfull for SEO 
   //   301 use for permanent  ,  GET/POST may change 
   //   302   temporary ,   GET/POST may change
   //  303     Temporary ,    always GET
  //  307     Temporary ,    may not change
  //  308     Temporary ,    may not change


  // useing routs constarint ----------------------------------------------------------->>
// use where and wherAlpha , more whereNumber , whereAlphaNumeric , whereIn('id') 
// Route::get('/post/{id}/comment/{commentid}',function(string $id,string $comment){
//  return "<h1>Your id is : ".$id." & comment is : ".$comment."</h1>";
//  })->where('id',"[0-9]+")->whereAlpha('commentid');
    

// this is for predefined value user only send this data
// Route::get('/post/{id}',function(string $id){
//     return "<h1>Your id is : ".$id."</h1>";
// })->whereIn('id',['movie','song','car']);




// sen multiple data ------------------------------------------------------------------>>>
// this is use to send multipke value throught routh and we can aslo send single value
// Route::get('/post/{id?}/comment/{commentid?}',function(string $id= null , string $comment= null ){
//     if($id){
//         return "<h1>Post id is : ". $id ." </h1><h2>".$comment."</h2>";
//     }else{
//         return "<h1>No id found </h1>";
//     }
//    // return view('post');
// });


// create sub route ------------------------------------------------------------>>
// Route::get('/post/firstpost',function(){
//     return view('firstpost');
// });




// type of using Route 
//    1 ----------------------------------->>
// Route::get('/post',function(){
//     //return view('post');
// });

//    2 ----------------------------------->>
// Route::get('/post',function(){
//     return "<h1>POST page through route file</h1> ";
// });


//    3 ------------------------------------>>
//Route::view('/post','post');     first param: route name and second is view name 
