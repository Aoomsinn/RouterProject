<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Router Project</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="/css/app.css" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style lang="scss">
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .center {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links{
                display: inline-flex;
                font-weight: 500;
                font-size: 1.5em;
                letter-spacing: .1rem;
            }
            .list-group-item {
                border: none;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            .view{
                margin-top: 2em;
            }
        </style>
    </head>
    <body>
        <div id="app">
            <div class="flex-center position-ref full-height">
                <div class="container center">
                    <div class="title m-b-md">
                        Router project
                    </div>
                    <div class="links">
                        <router-link to="/hello" class="list-group-item ">Hello World</router-link>
                        <router-link to="/number" class="list-group-item ">Number</router-link>
                        <router-link to="/card" class="list-group-item ">Card</router-link>
                    </div>
                    <router-view class="view"></router-view>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="/js/app.js"></script>
    </body>
</html>
