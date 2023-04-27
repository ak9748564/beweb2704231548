<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        footer {
            display: flex;
        }

        footer ul,
        footer div {
            width: 25%;
            padding: 5vw;
        }

        footer ul li {
            list-style: none;
            color: #8f8fa4;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 300;
            font-size: 1.35vw;
            line-height: 2.08vw;
        }

        footer ul a {
            text-decoration: none;
        }

        footer ul li:hover {
            text-decoration: underline;
            cursor: pointer;
        }

        footer ul a li span:hover {
            text-decoration: none;
        }
        #contact_section #left p{
            font-size: 1.4vw;
            line-height:2.1vw;
        }
        #contact_section #right p{
            font-size: 2.24vw;
            line-height: 3.2vw;
        }
        #contact_section #right {
            padding:0px;
        }
        @media(max-width:600px){
            footer{
        display: block;
    }
    footer ul,footer #contact_section{
        width:50%;
        margin: auto;
    }

        footer ul li {
            list-style: none;
            color: #8f8fa4;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 300;
            font-size: 15px;
            line-height: 25px;
        }
        #contact_section #left p{
            font-size: 14px;
            line-height:20px;
        }
        #contact_section #right p{
            font-size: 20px;
            line-height: 30px;
            margin: 5px;
        }
        #contact_section #right {
            padding:15px;
        }
        }
    </style>
</head>

<body>
    <footer style="padding: 5vw 0px;">

        <ul>
            <a href="#">
                <li><span style="color: #5774bd; margin-right: 10px;">→</span>Lorem Ipsum</li>
            </a>
            <a href="#">
                <li><span style="color: #5774bd; margin-right: 10px;">→</span>Lorem Ipsum</li>
            </a>
            <a href="#">
                <li><span style="color: #5774bd; margin-right: 10px;">→</span>Lorem Ipsum</li>
            </a>
            <a href="#">
                <li><span style="color: #5774bd; margin-right: 10px;">→</span>Lorem Ipsum</li>
            </a>
            <a href="#">
                <li><span style="color: #5774bd; margin-right: 10px;">→</span>Lorem Ipsum</li>
            </a>
            <a href="#">
                <li><span style="color: #5774bd; margin-right: 10px;">→</span>Lorem Ipsum</li>
            </a>
            <a href="#">
                <li><span style="color: #5774bd; margin-right: 10px;">→</span>Lorem Ipsum</li>
            </a>
        </ul>

        <ul>
            <a href="#">
                <li><span style="color: #5774bd; margin-right: 10px;">→</span>Lorem Ipsum</li>
            </a>
            <a href="#">
                <li><span style="color: #5774bd; margin-right: 10px;">→</span>Lorem Ipsum</li>
            </a>
            <a href="#">
                <li><span style="color: #5774bd; margin-right: 10px;">→</span>Lorem Ipsum</li>
            </a>
            <a href="#">
                <li><span style="color: #5774bd; margin-right: 10px;">→</span>Lorem Ipsum</li>
            </a>
            <a href="#">
                <li><span style="color: #5774bd; margin-right: 10px;">→</span>Lorem Ipsum</li>
            </a>
            <a href="#">
                <li><span style="color: #5774bd; margin-right: 10px;">→</span>Lorem Ipsum</li>
            </a>
            <a href="#">
                <li><span style="color: #5774bd; margin-right: 10px;">→</span>Lorem Ipsum</li>
            </a>
        </ul>

        <ul>
            <a href="#">
                <li><span style="color: #5774bd; margin-right: 10px;">→</span>Lorem Ipsum</li>
            </a>
            <a href="#">
                <li><span style="color: #5774bd; margin-right: 10px;">→</span>Lorem Ipsum</li>
            </a>
            <a href="#">
                <li><span style="color: #5774bd; margin-right: 10px;">→</span>Lorem Ipsum</li>
            </a>
            <a href="#">
                <li><span style="color: #5774bd; margin-right: 10px;">→</span>Lorem Ipsum</li>
            </a>
            <a href="#">
                <li><span style="color: #5774bd; margin-right: 10px;">→</span>Lorem Ipsum</li>
            </a>
        </ul>

        <div id="contact_section" style="padding:5vw 0px;display: flex;">
            <div id="left" style="padding:0px;text-align: left;width: 70%;">
                <p style="font-family:Arial, Helvetica, sans-serif;font-weight:600;color:#52eac8;width:100%;">Contact Us</p>
                <p style="font-family: Arial, Helvetica, sans-serif;font-weight: 300;color:#cccccc;">Level 13, 2 Elizabeth St,
                    Melbourne, Victoria 3000,
                    Australia</p>
                <p style="font-family: Arial, Helvetica, sans-serif;font-weight: 300;color: #53537f;">noreply@envato.com</p>
                <p style="font-family: Arial, Helvetica, sans-serif;font-weight: 300;color:#cccccc;">+61 (0) 3 8376 6284</p>
            </div>
            
            <div id="right" style="">
                <p style="font-size: 2.24vw; line-height: 3.2vw;">
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg></i></a>
                </p>
                <p style="font-size: 2.24vw; line-height: 3.2vw;">
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                            <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                        </svg></a>
                </p>
                <p style="font-size: 2.24vw; line-height: 3.2vw;">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                        </svg>
                        </i>
                    </a>
                </p>
                <p style="font-size: 2.24vw; line-height: 3.2vw;">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pinterest" viewBox="0 0 16 16">
                            <path d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z" />
                        </svg>
                    </a>
                </p>
            </div>
        </div>
    </footer>
</body>

</html>