<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP-DISCHI-JSON</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    </head>
    <body>
        <div id="app">
            <header style="background-color:black; height:86px;">
                <div class="container">
                    <img style="width: 120px;" src="https://i0.wp.com/www.dafontfree.co/wp-content/uploads/2022/03/Spotify-Logo-Font-1.jpg?fit=1600%2C1066&ssl=1" alt="spotify-image-logo">
                </div>
            </header>
            <article class="p-4" style="background-color: rgba(29,45,60,255);">
                <div class="container">
                    <div class="row">
                        <div class="col-4" v-for="(disc, index) in discList" :key="index">
                            <div style="background-color: rgba(17,32,48,255); color:#fff; height:600px;" 
                                class="card py-4 px-5 my-5">
                                <img :src="disc.poster" class="card-img-top" alt="disc-image">
                                <div class="card-body text-center">
                                    <h5 class="card-title fw-bolder fs-2">
                                        {{disc.title}}
                                    </h5>
                                    <p class="autor">
                                        {{disc.author}}
                                    </p>
                                    <p class="year fw-bolder fs-2">
                                        {{disc.year}}
                                    </p>
                                    <p class="genere">
                                        {{disc.genere}}    
                                    </p>                                   
                                </div>
                            </div>
                        </div>          
                    </div>
                </div>
            </article>
            
        </div>

        <script src="./script/main.js"></script>
    </body>
</html>
