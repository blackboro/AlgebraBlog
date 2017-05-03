<!DOCTYPE html>

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
	
<form method="post" action="">
	{{ csrf_field() }}

     Naslov:</br>
     <input type="text" name="title" />
	 </br>
	 Sadržaj:</br>
	 <textarea name="content"> </textarea>
     </br>
     <input type="submit" value="Spremi" />
	 
</form>
	
	
    </body>
</html>
