<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript">!function(s){var i,o,e,r,n,d,t=s.navigator.userAgent;s.navigator.appVersion;platform=s.navigator.platform,/MSIE/.test(t)?(i="Internet Explorer",/IEMobile/.test(t)&&(e=1),o=/MSIE \d+[.]\d+/.exec(t)[0].split(" ")[1]):/Chrome/.test(t)?(/CrOS/.test(t)&&(platform="CrOS"),i="Chrome",o=/Chrome\/[\d\.]+/.exec(t)[0].split("/")[1]):/Opera/.test(t)?(i="Opera",(/mini/.test(t)||/Mobile/.test(t))&&(e=1)):/Android/.test(t)?(i="Android Webkit Browser",e=1,r=/Android\s[\.\d]+/.exec(t)[0]):/Firefox/.test(t)?(i="Firefox",/Fennec/.test(t)&&(e=1),o=/Firefox\/[\.\d]+/.exec(t)[0].split("/")[1]):/Safari/.test(t)&&(i="Safari",(/iPhone/.test(t)||/iPad/.test(t)||/iPod/.test(t))&&(r="iOS",e=1)),o||(o=/Version\/[\.\d]+/.exec(t),o=o?o[0].split("/")[1]:/Opera\/[\.\d]+/.exec(t)[0].split("/")[1]),"MacIntel"===platform||"MacPPC"===platform?(r="Mac OS X",n=/10[\.\_\d]+/.exec(t)[0],/[\_]/.test(n)&&(n=n.split("_").join("."))):"CrOS"===platform?r="ChromeOS":"Win32"===platform||"Win64"==platform?(r="Windows",d=platform.replace(/[^0-9]+/,"")):!r&&/Android/.test(t)?r="Android":!r&&/Linux/.test(platform)?r="Linux":!r&&/Windows/.test(t)&&(r="Windows");var a=[{s:"Windows 10",r:/(Windows 10.0|Windows NT 10.0)/},{s:"Windows 8.1",r:/(Windows 8.1|Windows NT 6.3)/},{s:"Windows 8",r:/(Windows 8|Windows NT 6.2)/},{s:"Windows 7",r:/(Windows 7|Windows NT 6.1)/},{s:"Windows Vista",r:/Windows NT 6.0/},{s:"Windows Server 2003",r:/Windows NT 5.2/},{s:"Windows XP",r:/(Windows NT 5.1|Windows XP)/},{s:"Windows 2000",r:/(Windows NT 5.0|Windows 2000)/},{s:"Windows ME",r:/(Win 9x 4.90|Windows ME)/},{s:"Windows 98",r:/(Windows 98|Win98)/},{s:"Windows 95",r:/(Windows 95|Win95|Windows_95)/},{s:"Windows NT 4.0",r:/(Windows NT 4.0|WinNT4.0|WinNT|Windows NT)/},{s:"Windows CE",r:/Windows CE/},{s:"Windows 3.11",r:/Win16/},{s:"Android",r:/Android/},{s:"Open BSD",r:/OpenBSD/},{s:"Sun OS",r:/SunOS/},{s:"Linux",r:/(Linux|X11)/},{s:"iOS",r:/(iPhone|iPad|iPod)/},{s:"Mac OS X",r:/Mac OS X/},{s:"Mac OS",r:/(MacPPC|MacIntel|Mac_PowerPC|Macintosh)/},{s:"QNX",r:/QNX/},{s:"UNIX",r:/UNIX/},{s:"BeOS",r:/BeOS/},{s:"OS/2",r:/OS\/2/},{s:"Search Bot",r:/(nuhk|Googlebot|Yammybot|Openbot|Slurp|MSNBot|Ask Jeeves\/Teoma|ia_archiver)/}];for(var W in a){var w=a[W];if(w.r.test(t)){r=w.s;break}}switch(/Windows/.test(r)&&(n=/Windows (.*)/.exec(r)[1],r="Windows"),r){case"Mac OS X":n=/Mac OS X (10[\.\_\d]+)/.exec(t)[1];break;case"Android":osVersion=/Android ([\.\_\d]+)/.exec(t)[1];break;case"iOS":n=/OS (\d+)_(\d+)_?(\d+)?/.exec(nVer),n=n[1]+"."+n[2]+"."+(0|n[3])}s.ui={browser:i,version:o,mobile:e,os:r,osversion:n,bit:d}}(this);</script>
        <script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/aes.js"></script>
        <title>ASK</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
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
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    ASK!
                </div>

                <div class="links">
                    <a href="times">Time Table</a>
                    <a href="secret">Anonymous Question</a>
                    <a href="http://nsbm.lk">Home</a>
                    <a href="mailto:ayesh.j@nsbm.lk?subject=Feedback for ASK!">Feedback</a>
                    <a href="http://10.10.10.20/ayesh.html">Dev Page</a>

                </div>
                <div class="alert alert-info">
                    <strong>Hey!</strong> Don't want to reveal your identity? Use "Anonymous" option above.. No login requrired!
                </div>
        </div> 
    </body>

</html>

