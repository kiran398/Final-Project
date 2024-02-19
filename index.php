<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Restro POS System</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
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

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;

        }

        .button {
        background-color: #90EE90;
        border-radius: 30px;
        color: white;
        padding: 40px 44px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        
        margin: 5px 3px;
        cursor: pointer;
      }

      .button1 {
        background-color: #90EE90;
        border-radius: 30px;
        color: white;
        padding: 20px 34px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
        margin: 4px 2px;
        cursor: pointer;
      }
      .button2 {
        background-color: #90EE90;
        border-radius: 30px;
        color: white;
        padding: 20px 34px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 20px;
        margin: 4px 2px;
        cursor: pointer;
      }
      
    </style>
</head>

<body>
    
    <div style="background-image: url(Restro/admin/assets/img/theme/image1.jpg); background-size: cover;" class="flex-center position-ref full-height">
        <div class="content">
            <div class="font-weight-bold title m-b-md" style="color: white;">
                Restaurant POS
            </div>

            <div class="links">
			
                <a href="Restro/admin/" class="button">Admin Log In</a>
                <a href="Restro/cashier/" class="button1">Cashier Log In</a>
                <a href="Restro/customer"class="button2">Customer Log In</a>
            </div>
        </div>
    </div>
</body>

</html>