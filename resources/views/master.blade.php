<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOM-SHOPING</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- old  -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
    <!--option jquery cdn-->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
    {{View::make('header')}}
    
    @yield('content')

    {{View::make('footer')}}
</body>
    <style>
        img.slider-img{
            height:400px !important;
        }   

        .custom-product{
            height:800px;
        }
        .slider-text{
            background-color : #35443585 !important;
        }
        .trending-wrapper{
            margin:15px;
            padding:10px;
            height:600px;
        }
         .trending-item{
            float:left;
            width:16.5%;
            text-align:center;
        }
        .trending-image{
            height:150px;
        } 
        .trending-name{
            text-align:center;
        }
        .detail-img{
            height:350px;  
        }
        .search-box{
            width:500px;
        }
        .detail-wrapper{
            height:700px;
        }
        .cartlist-page{
            height: 2000px;;
            

        }
        .cartlist-wrapper{
            float:left;  
        }
        .cartlist-item{
            height:200px;
            text-align:center;
        }
        .cart-list-divider{
            border-bottom:1px solid #ccc;
            margin-bottom :20px;
            padding-bottom :20px;
        }
    </style>
</html>
<!-- <script>
    $(document).ready(function()
    {
        $("button").click(function()
        {
            alert("all set");
        })
    })
    </script> -->
