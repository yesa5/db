<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hotel Booking</title>
    <link href={{asset("css/bootstrap.min.css")}} rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href={{asset("css/style.css")}}>
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond" rel="stylesheet">

</head>
<body style="background-color: #fcf4e3;">

<div class="container">
    <style>
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }
    </style>

    <div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto; width: 1140px; height: 442px; overflow: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="{{asset('img/static-svg/spin.svg')}}"/>
        </div>

        <!-- Slides Container -->
        <div data-u="slides" style="position: absolute; left: 0px; top: 0px; width: 1140px; height: 442px;
            overflow: hidden;">
            <div>
                <img data-u="image" src="{{asset('img/gallery/980x380/1.jpg')}}" style="object-fit: cover;"/>
            </div>
            <div>
                <img data-u="image" src="{{asset('img/gallery/980x380/2.jpg')}}" style="object-fit: cover;"/>
            </div>
            <div>
                <img data-u="image" src="{{asset('img/gallery/980x380/3.jpg')}}" style="object-fit: cover;"/>
            </div>
            <div>
                <img data-u="image" src="{{asset('img/gallery/980x380/4.jpg')}}" style="object-fit: cover;"/>
            </div>
        </div>

        <!--#region Bullet Navigator Skin Begin -->
        <!-- Help: https://www.jssor.com/development/slider-with-bullet-navigator.html -->
        <style>
            .jssorb031 {position:absolute;}
            .jssorb031 .i {position:absolute;cursor:pointer;}
            .jssorb031 .i .b {fill:#000;fill-opacity:0.5;stroke:#fff;stroke-width:1200;stroke-miterlimit:10;stroke-opacity:0.3;}
            .jssorb031 .i:hover .b {fill:#fff;fill-opacity:.7;stroke:#000;stroke-opacity:.5;}
            .jssorb031 .iav .b {fill:#fff;stroke:#000;fill-opacity:1;}
            .jssorb031 .i.idn {opacity:.3;}
        </style>
        <div data-u="navigator" class="jssorb031" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!--#endregion Bullet Navigator Skin End -->

        <!--#region Arrow Navigator Skin Begin -->
        <!-- Help: https://www.jssor.com/development/slider-with-arrow-navigator.html -->
        <style>
            .jssora051 {display:block;position:absolute;cursor:pointer;}
            .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
            .jssora051:hover {opacity:.8;}
            .jssora051.jssora051dn {opacity:.5;}
            .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
        </style>
        <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
        <!--#endregion Arrow Navigator Skin End -->
    </div>

    <div class="select-container">

        <h1> Adessio Hotel Booking</h1>
        <p>Choose your desired room</p>

        <form action="{{route('list')}}" method="post">
            {{ csrf_field() }}
            <div class = "section">

                <select name="type" id="type" onchange="sType()">
                    <option disabled selected>Select room's type</option>
                    <option value="econom">Econom</option>
                    <option value="business">Business</option>
                    <option value="junior suit">Junior Suit</option>
                    <option value="suit">Suit</option>
                </select>

                <select name="rooms" id="rooms" onchange="sRoom()">
                    <option disabled selected>Select rooms' number</option>
                    <option value="12">1-2</option>
                    <option value="23">2-3</option>
                    <option value="34">3-4</option>
                    <option value="45">4-5</option>
                </select>

                <select name="beds" id="beds">
                    <option disabled selected>Select beds' number</option>
                    <option value = "23">2-3</option>
                    <option value = "46">4-6</option>
                    <option value = "78">7-8</option>
                </select>
            </div>

            <button type="submit">Search for room</button>

        </form>

    </div>
    <!-- Jssor Slider End -->
</div>

<script src={{asset("js/jquery-1.9.1.min.js")}}></script>
<script src={{asset("js/bootstrap.min.js")}}></script>
<script src={{asset("js/docs.min.js")}}></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src={{asset("js/ie10-viewport-bug-workaround.js")}}></script>

<!-- jssor slider scripts-->
<script type="text/javascript" src="../js/jssor.slider.min.js"></script>
<script>

    jQuery(document).ready(function ($) {
        var options = {
            $AutoPlay: 1,                                       //[Optional] Auto play or not, to enable slideshow, this option must be set to greater than 0. Default value is 0. 0: no auto play, 1: continuously, 2: stop at last slide, 4: stop on click, 8: stop on user navigation (by arrow/bullet/thumbnail/drag/arrow key navigation)
            $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
            $Idle: 2000,                                        //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
            $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

            $ArrowKeyNavigation: 1,   			                //[Optional] Steps to go for each navigation request by pressing arrow key, default value is 1.
            $SlideEasing: $Jease$.$OutQuint,                    //[Optional] Specifies easing for right to left animation, default value is $Jease$.$OutQuad
            $SlideDuration: 800,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
            $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide, default value is 20
            //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
            //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
            $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
            $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
            $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
            $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $Cols is greater than 1, or parking position is not 0)

            $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
            },

            $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                $SpacingX: 12,                                  //[Optional] Horizontal space between each item in pixel, default value is 0
                $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
            }
        };

        var jssor_slider1 = new $JssorSlider$("slider1_container", options);

        //responsive code begin
        //you can remove responsive code if you don't want the slider scales while window resizing
        function ScaleSlider() {
            var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
            if (parentWidth) {
                jssor_slider1.$ScaleWidth(parentWidth - 30);
            }
            else
                window.setTimeout(ScaleSlider, 30);
        }
        ScaleSlider();

        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);
        //responsive code end
    });

        $('#type').on('change',function (e) {
            console.log(e);
            var type = e.target.value;


            $.get('/ajax-subcat?type='+type,function (data) {
               $.each(data,function (index,subcatObj) {
                   $('#rooms').append('<option value="'+subcatObj.id+'">'+subcatObj.name+'</option>');
               });
            });
        })

        $('#rooms').on('change',function (e) {
            console.log(e);
            var rooms = e.target.value;
            $.get('/ajax-subcat?type='+rooms,function (data) {
                $.each(data,function (index,subcatObj) {
                    $('#rooms').append('<option value="'+subcatObj.id+'">'+subcatObj.name+'</option>');
                });
            });
        })
        $('#beds').on('change',function (e) {
            console.log(e);
            var beds = e.target.value;
            $.get('/ajax-subcat?type='+beds,function (data) {
                $.each(data,function (index,subcatObj) {
                    $('#beds').append('<option value="'+subcatObj.id+'">'+subcatObj.name+'</option>');
                });
            });
        })

        document.getElementById("rooms").disabled = true;
        document.getElementById("beds").disabled = true;

        var type = document.getElementById("type");

        function sType() {
            document.getElementById("rooms").disabled = false;
        }
        function sRoom() {
            document.getElementById("beds").disabled = false;
        }

</script>
</body>
</html>