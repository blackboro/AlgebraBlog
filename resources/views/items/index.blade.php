<!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AlgebraBlog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
     
	  
    </head>
    <body>
	
		
		@foreach ($items as $item)
	<h2> 
	<a href="{{ $item->id }}">{{ $item->title }}</a> </h2>
	
	<div>{{ $item->content }} </div>
	

    @endforeach
	
       
    </body>
</html>
