<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/bootstrap.min.css">

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"> </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <title>Home</title>

    <style>
        body,html{
            height:100%;
            margin:0;
        }
        #body{
            background-color:black;
        }
        @font-face {
            font-family: Garamond;
            src: url(<?php echo base_url()?>asset/Garamond.ttf);
        }
        @font-face {
            font-family: Montserrat;
            src: url(<?php echo base_url()?>asset/Montserrat.ttf);
        }
        body{
            font-family: Montserrat;
        }
        .body2{
            font-family: Montserrat;
            background-color:#14274A;
            color:white;
        }
        a:hover{
            font-weight:bold;
        }
        button:hover{
            font-weight:bold;
        }
        .custom-toggler .navbar-toggler-icon {
         background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,255,255)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        }

        .custom-toggler.navbar-toggler {
            outline:none;
            border:none;
            box-shadow:none;
        } 

        /* For desktop: */
        .col-1 {width: 8.33%;}
        .col-2 {width: 16.66%;}
        .col-3 {width: 25%;}
        .col-4 {width: 33.33%;}
        .col-5 {width: 41.66%;}
        .col-6 {width: 50%;}
        .col-7 {width: 58.33%;}
        .col-8 {width: 66.66%;}
        .col-9 {width: 75%;}
        .col-10 {width: 83.33%;}
        .col-11 {width: 91.66%;}
        .col-12 {width: 100%;}

        .font{
            font-size:1vw; 
        }

        .font2{
            font-size:3vw; 
        }

        @media only screen and (max-width: 768px) {
        /* For mobile phones: */
            [class*="col-"] {
                width: 100%;
            }

            .responsive {
                width: 100%;
                max-width: 350px;
                height: auto;
            }

            .font{
                font-size:2vw;
            }

            .kecil{
                font-size:1.95vw;
            }

            .font2{
                font-size:4vw;
            }

        }

        .responsive {
            width: 100%;
            max-width: 350px;
            height: auto;
        }

    </style>
</head>