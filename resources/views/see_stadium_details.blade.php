<x-app-layout>
   
    <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Iconic Moments</title>
         <link href="/bootstrap-5.0.2-dist/css/bootstrap.css" rel="stylesheet">
         <style>
             
             
 
             /* Margin adjustment for content to not overlap the fixed sidebar */
             .content-area {
                 margin-left: 4px;
                 
                 text-anchor: end
             }
 
             
             .card-custom {
                 background-color: rgb(16, 7, 95);
                 color: white; 
                 font-family: fantasy;
                 border: none;
                 
                 padding: 20px;
                 margin-bottom: 20px;
                 border-radius: 10px;
                 box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
             }
             .img_container{


                
                 color: white; 
                 font-family: 'Times New Roman', Times, serif;
                 border: none;
                 padding: 10px;
                 margin-bottom: 20px;
                 border-radius: 10px;
                 box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);


                 
             }

             .card-custom2 {
                 background-color: rgb(0, 98, 217);
                 color: white; 
                 font-family: 'Times New Roman', Times, serif;
                 border: none;
                 padding: 20px;
                 margin-bottom: 20px;
                 border-radius: 10px;
                 box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
             }


         </style>
     </head>
     <body>
                 <div class="col py-3 content-area">
                     <div class="container text-start">
 
                         <h1>Stadiums</h1>
 
                         @foreach ($stad_data as $data)
                         <div class="card card-custom">

                            <div class='card img_container'>
                            @if ($data->picture)
                            <img src='images/stadiums/{{$data->picture}}' alt='{{ $data->picture}}' class="img-fluid">
                        @endif
                    </div>
                             <h2>{{ $data->stadium_name }}</h2>
                             <p>Location: {{ $data->location }}</p>
                             <p>Capacity: {{ $data->capacity }}</p>
                             <p>Establishment Date: {{$data->establishment}}</p>
                             <div class = "card card-custom2">
                                <P>History</P>
                             <h4>{{$data->history}}</h4>
                            </div>

                            <p>Posted on: {{$data->created_at}} by the admin</p>

                             
                         </div>
                     @endforeach
                     </div>
                
                 </div>
             </div>
         </div>
 
         <script src="/bootstrap-5.0.2-dist/js/bootstrap.bundle.js"></script>
     </body>
 
    </x-app-layout>
 
 