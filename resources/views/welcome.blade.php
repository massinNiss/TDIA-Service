<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Navigation</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-hover {
            transition: transform 0.2s;
        }
        .card-hover:hover {
            transform: scale(1.05);
        }
        * {
        box-sizing: border-box;
        }

        .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0,0,0,0);
        border: 0;
        }

        .hide {
        display: none;
        }
        html,
        body {
        height: 100%;
        }

        body {
        background-color: white;
        margin: 0;
        color: #212121;
        transition: background-color 1s cubic-bezier(0.46, 0.03, 0.52, 0.96);
        transform: perspective(600px);
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        will-change: transform;
        }
        .is-open {
        color: white;
        background-color: #212121;
        .square {
            padding: 0;
        }
        
        
        
        .card:hover {
            mix-blend-mode: normal;
            opacity: 1;
            filter: grayscale(0);
        }
        
        .copy-wrap {
            transform: translate3d(0,-100%,0);
        }

        .title {
            color: white;
            mix-blend-mode: normal;
        }
        
        .btn {
            &:hover {
            background-color: #212121;
            color: white;
            .btn-icon {
                fill: white;
            }  
            }
        }
        }


        .square {
        cursor: pointer;
        border: solid 0px transparent;
        padding: 120px;
        width: 100%; 
        height: 100%;
        transform: translate3d(-50%,-50%,0);
        position: absolute;
        top: 50%;
        left: 50%;
        background: linear-gradient(230deg,#a24bcf,#4b79cf,#4bc5cf);
        background-clip: content-box;
        background-size: 400% 400%;
        border-color: currentColor; 
        animation: partytime 7s cubic-bezier(0.46, 0.03, 0.52, 0.96) infinite;  
        transition: padding 1s cubic-bezier(0.215, 0.61, 0.355, 1);
        will-change: transform;
        }

        @keyframes partytime { 
            0%{background-position:83% 0%}
            50%{background-position:18% 100%}
            100%{background-position:83% 0%}
        }

        .card {
        width: 100%;
        height: 100%;
        background-color: transparent;
        transition: transform 1.25s cubic-bezier(0.215, 0.61, 0.355, 1), box-shadow 1.25s cubic-bezier(0.215, 0.61, 0.355, 1), box-shadow 1.25s cubic-bezier(0.215, 0.61, 0.355, 1),
            filter 1.25s cubic-bezier(0.215, 0.61, 0.355, 1), opacity 1.25s cubic-bezier(0.215, 0.61, 0.355, 1);
        transform: perspective(1600px) translate3d(0, 0, 0) scale(0.5);
        will-change: transform;
        cursor: pointer;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        position: relative;
        z-index: 400;
        &:hover {
            box-shadow: 0 0 75px rgba(0, 0, 0, 0.20), 0 5px 20px rgba(0, 0, 0, 0.2);    
            mix-blend-mode: hard-light;
            filter: grayscale(100%);
            opacity: 0.8;
        }
        }

        .card-title-wrap {
        transform: perspective(1600px) translate3d(0, 0, 100px);
        position: relative;
        z-index: 200;
        transition: transform 0.25s linear;
        }

        .card-img {
        position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-size: cover;
            background-position: 50% 50%;
        background-image: url(https://www.pauldecotiis.com/assets/img/contact/img-1.jpg?ts=1509977393);
            will-change: transform;
        transform: perspective(600px);
        z-index: 100;
        }



        .btn {
        position: absolute;
        top: 65%;
        left: 50%;
        transform: translate3d(-50%,-50%,0);
        transition: all .25s ease-in-out;
        border: 0;
        background-color: black;
        padding: 12px 24px;
        color: white;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 0.2em;
        mix-blend-mode: overlay;
        box-shadow: 0 0 25px rgba(0,0,0,0.8) 0 4px 12px rgba(0,0,0,0.9);
        will-change: transform;
        cursor: pointer;
        z-index: 900;
        margin-top: 60px;
        &:active,
        &:focus {
            outline: none;
        }
        
        &:hover {
            background-color: white;
            mix-blend-mode: normal;
            color: #212121;
            .btn-icon {
            fill: black;
            }
        }
        }

        .btn-icon {
        fill: white;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate3d(-50%,-50%,0);
        transition: all .25s cubic-bezier(0.46, 0.03, 0.52, 0.96);
        }
        .title {
        font-size: 120px;
        letter-spacing: 0.1em;
            text-transform: uppercase;
            margin: 0;
            font-weight: 900;
            overflow: hidden;
        color: black;
        mix-blend-mode: overlay;
        }

        .name,
        .copyright {
            text-transform: uppercase;
            color: currentColor;
            position: absolute;
            left: 50%;
            margin: 0; 
            padding: 0;
            transition: all .5s cubic-bezier(0.46, 0.03, 0.52, 0.96);
            transform: translate3d(-50%,0,0);
            font-weight: 800; 
            overflow: hidden;
            font-size: 16px;
            font-weight: 800;
            letter-spacing: 0.4em;
        }

        .name {
            top: 53px;
        }

        .copy-wrap {
            display: block;
            transition: all 0.7s 0s ease-in-out;
        position: relative;
        }

        .copyright {
        bottom: 20px;
        overflow: hidden;
        height: 72px;
        line-height: 60px;
        position: fixed;
        .copy-wrap {
            &:before {
            content: "";
            width: 15px;
            height: 2px;
            background-color: currentColor;
            position: absolute;
            left: 50%; 
            top: 50%;
            transform: translate3d(-50%,-50%,0);
            }
        }
        
        }
    </style>
</head>
<body>
    <h1 class="name">
        <span class="copy-wrap">
            Welcome to
            </span>
        </h1>

        <div class="square"></div>

        <div class="card">
        <div class="card-title-wrap">
            <h1 class="title">
            <span class="copy-wrap">
                TDIA-SERVICE
            </span>
            </h1> 
            <button class="btn hide">
            View
            </button>
        </div>
        <a href="{{ url('/login') }}" class="btn btn-primary stretched-link">Go to Login</a>
    <script>
        $(function () {
    
            var EASE = Power4.easeOut;
            
            var Engine = {
                ui : {
                initBtn : function() {
                    var card = $('.card, .btn');
                    var body = $('body');
                    var btn = $('.btn');

                    card.on('click', function() {

                    if (body.hasClass('is-open')) {
                        body.removeClass('is-open');
                        btn.html('View');
                    } else {
                        body.addClass('is-open');
                        btn.html('close');
                        TweenMax.set('.card', {clearProps: 'all'});
                    }
                    })     
                },
                initHover : function(e) {
                    $(document).on( "mousemove", ".card", function(e) {
                    if ($('body').hasClass('is-open')) {
                        e.preventDefault();
                    } else {
                        var halfW = (this.clientWidth / 2);
                        var halfH = (this.clientHeight / 2);

                        var coorX = (halfW - (event.pageX - this.offsetLeft));
                        var coorY = (halfH - (event.pageY - this.offsetTop));

                        var degX  = ( ( coorY / halfH ) * 10 ) + 'deg'; // max. degree = 10
                        var degY  = ( ( coorX / halfW ) * -10 ) + 'deg'; // max. degree = 10

                        $(this).css('transform', function() {
                        return 'perspective(1600px) translate3d(0, 0px, 0) scale(0.6) rotateX('+ degX +') rotateY('+ degY +')';
                        }).children('.card-title-wrap').css( 'transform', function() {
                        return 'perspective(1600px) translate3d(0, 0, 200px) rotateX('+ degX +') rotateY('+ degY +')';
                        });
                    }
                    }).on( "mouseout", ".card", function() {
                    $(this).removeAttr('style').children('.card-title-wrap').removeAttr('style');
                    });
                    
                    
                }
                }
            };

            Engine.ui.initBtn();
            Engine.ui.initHover();

            })
    </script>
</body>
</html>
