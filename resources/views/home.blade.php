<html>

    <head>

        <style>
            .slideshow {
                list-style-type: none;
            }

            /* SLIDESHOW */
            .slideshow,
            .slideshow:after {
                top: -16px;
                position: fixed;
                width: 100%;
                height: 100%;
                left: 0px;
                z-index: -1;
            }

            .slideshow li span {
                position: absolute;
                width: 100%;
                height: 60%;
                top: 22%;
                left: 0px;
                color: transparent;
                background-size: cover;
                background-position: 50% 50%;
                background-repeat: no-repeat;
                opacity: 0;
                z-index: 0;
                animation: imageAnimation 30s linear infinite 0s;
            }

            .slideshow li:nth-child(1) span {
                background-image: url("/images/car1.jpg");
            }

            .slideshow li:nth-child(2) span {
                background-image: url("/images/car2.jpg");
                animation-delay: 6s;
            }

            .slideshow li:nth-child(3) span {
                background-image: url("/images/car3.jpg");
                animation-delay: 12s;
            }

            .slideshow li:nth-child(4) span {
                background-image: url("/images/car4.jpg");
                animation-delay: 18s;
            }

            .slideshow li:nth-child(5) span {
                background-image: url("/images/car5.jpg");
                animation-delay: 24s;
            }


            @keyframes imageAnimation {
                0% {
                    opacity: 0;
                    animation-timing-function: ease-in;
                }

                8% {
                    opacity: 1;
                    animation-timing-function: ease-out;
                }

                17% {
                    opacity: 1
                }

                25% {
                    opacity: 0
                }

                100% {
                    opacity: 0
                }
            }


            @keyframes titleAnimation {
                0% {
                    opacity: 0
                }

                8% {
                    opacity: 1
                }

                17% {
                    opacity: 1
                }

                19% {
                    opacity: 1
                }

                100% {
                    opacity: 0
                }
            }
            .no-cssanimations .cb-slideshow li span {
                opacity: 1;
            }

        </style>
    </head>

    <body>

        @extends('layouts.app')

@section('content')
        <!-- Background slideshow -->
        <div class="container"><ul class="slideshow">
            <li><span>1</span></li>
            <li><span>2</span></li>
            <li><span>3</span></li>
            <li><span>4</span></li>
            <li><span>5</span></li>
        </ul> </div>
    
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">

            </div>
        </div>
    </div>

@endsection
</body>

</html>
