<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            background-color: #cacdd2;
            font-size: 16px;
            color: #444;
        }

        ul.tabs {
            width: 600px;
            height: 72px;
            margin: 0 auto;
            list-style: none;
            overflow: hidden;
            padding: 0
        }

        ul.tabs li {
            float: left;
            width: 100px
        }

        ul.tabs li a {
            position: relative;
            display: block;
            height: 27px;
            margin-top: 40px;
            padding: 10px 0 0 0;
            font-family: 'Open Sans', sans-serif;
            font-size: 14px;
            text-align: center;
            text-decoration: none;
            color: #ffffff;
            background: #1abc9c;
            -webkit-box-shadow: 8px 12px 25px 2px rgba(0, 0, 0, 0.4);
            -moz-box-shadow: 8px 12px 25px 2px rgba(0, 0, 0, 0.4);
            box-shadow: 8px 12px 25px 2px rgba(0, 0, 0, 0.4);
            border: 0 solid #000000;
            -webkit-transition: padding 0.2s ease, margin 0.2s ease;
            -moz-transition: padding 0.2s ease, margin 0.2s ease;
            -o-transition: padding 0.2s ease, margin 0.2s ease;
            -ms-transition: padding 0.2s ease, margin 0.2s ease;
            transition: padding 0.2s ease, margin 0.2s ease
        }

        .tabs li:first-child a {
            z-index: 3;
            -webkit-border-top-left-radius: 8px;
            -moz-border-radius-topleft: 8px;
            border-top-left-radius: 8px
        }

        .tabs li:nth-child(2) a {
            z-index: 2
        }

        .tabs li:last-child a {
            z-index: 1;
            -webkit-box-shadow: 2px 8px 25px -2px rgba(0, 0, 0, 0.3);
            -moz-box-shadow: 2px 8px 25px -2px rgba(0, 0, 0, 0.3);
            box-shadow: 2px 8px 25px -2px rgba(0, 0, 0, 0.3);
            -webkit-border-top-right-radius: 8px;
            -moz-border-radius-topright: 8px;
            border-top-right-radius: 8px
        }

        ul.tabs li a:hover {
            margin: 35px 0 0 0;
            padding: 10px 0 5px 0
        }

        ul.tabs li a.active {
            margin: 30px 0 0 0;
            padding: 10px 0 10px 0;
            background: #2c3e50;
            color: #D3FEF5; /*color:#ff6831;*/
            z-index: 4;
            outline: none
        }

        .group:before, .group:after {
            content: " ";
            display: table
        }

        .group:after {
            clear: both
        }

        #panels {
            width: 600px;
            height: 300px;
            margin: 0 auto;
            background: #2c3e50;
            -webkit-box-shadow: 2px 8px 25px -2px rgba(0, 0, 0, 0.3);
            -moz-box-shadow: 2px 8px 25px -2px rgba(0, 0, 0, 0.3);
            box-shadow: 2px 8px 25px -2px rgba(0, 0, 0, 0.3);
            -webkit-border-bottom-right-radius: 8px;
            -webkit-border-bottom-left-radius: 8px;
            -moz-border-radius-bottomright: 8px;
            -moz-border-radius-bottomleft: 8px;
            border-bottom-right-radius: 8px;
            border-bottom-left-radius: 8px
        }

        #panels p {
            font-family: 'Open Sans', sans-serif;
            padding: 15px;
            color: #ffffff;
            line-height: 18px;
            font-size: 15px;
            margin: 0
        }
        #div_two,
        #div_three,
        #div_four,
        #div_five,
        #div_six
        {
            display: none;
        }
    </style>
</head>
<body>
<div class='post-body'>
    <ul class="tabs group">
        <li><a class="active one" id="one">one</a></li>
        <li><a id="two">two</a></li>
        <li><a id="three">three</a></li>
        <li><a id="four">four</a></li>
        <li><a id="five">five</a></li>
        <li><a id="six">six</a></li>
    </ul>
    <div id="panels">
        <p id="div_one">
            one.
        </p>
        <p id="div_two">
            two
        </p>
        <p id="div_three">
             three
        </p>
        <p id="div_four">
             four
        </p>
        <p id="div_five">
            five
        </p>
        <p id="div_six">
            six
        </p>
        </p>
    </div>

    <script
        type="text/javascript"> //<![CDATA[ (function($) { var tabs = $(".tabs li a"); tabs.click(function() { var panels = this.hash.replace('/',''); tabs.removeClass("active"); $(this).addClass("active"); $("#panels").find('p').hide(); $(panels).fadeIn(200); }); })(jQuery); //]]> </script>


    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js' type='text/javascript'></script>
    <script>
       $(document).ready(function() {

           $('.tabs li a').click(function() {

               var tab_id = this.getAttribute('id');

                $('.tabs li a').removeClass('active');
                $(this).addClass('active');

                $('#panels p').hide();
                $('#panels #div_'+tab_id).fadeIn(200);

           });



       });
    </script>
</div>
</body>
</html>
