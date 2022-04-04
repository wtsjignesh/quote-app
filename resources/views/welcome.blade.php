<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Scripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .quote {
                margin: 0;
                background: #eee;
                padding: 1em;
                border-radius: 1em;
            }
            .quote blockquote {
                margin: 1em;
            }
            .btn-refresh {
                background-color: #4CAF50;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
        <button class="btn-refresh">REFRESH</button>
            <div class="content quote">
            @foreach ($randomQuotes as $quote)
            <blockquote>
                <p>{{ $quote }}</p>
            </blockquote>
            @endforeach                
            </div>
        </div>
    </body>
    <script type="text/javascript">
    
        $(".btn-refresh").click(function(e){
            $.ajax({
                type:'GET',
                url:"fetch-data",
                success:function(data){
                    $(".quote").empty();
                    var quote = data;
                    for(var i=0; i<quote.length; i++){
                        var blockquote = "<blockquote>" + quote[i] + "<blockquote>";
                        $(".position-ref .quote").append(blockquote);
                    }
                }
            })
        });
    </script>
</html>
