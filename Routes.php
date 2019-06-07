<?php

	Route::set('index.php', function(){
		//echo "about-us";
		Index::CreateView('Index');
	});

	Route::set('about-us', function(){
		//echo "about-us";
		AboutUs::CreateView('AboutUs');
		//AboutUs::test();
	});
	
	Route::set('contact-us', function(){
		ContactUs::CreateView('ContactUs');
	});
?>