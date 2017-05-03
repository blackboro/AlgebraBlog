<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LARAVEL PROJEKT</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
     
	  
    </head>
    <body>
	
	
	<h2>Dobrodošli</h2>
     @foreach ($items as $item)
	 <table border="1" cellspacing="5" >
	 <tr>
	 <td>
	<div style="font-family: Ariel, Sans-serif;font-size:20px; font-weight: 800; background-color: grey; "> <a  font-color="white" href="/item/{{ $item->id }}">
	 {{ $item->title }}
	 </a></div>
	 
	 
	 </td>
	
	 </tr></table>
	 @endforeach
       
    </body>
</html>
