<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
        .ust-serit{
            height:80px;
            background: linear-gradient(90deg, rgba(56,55,55,1) 0%, rgba(129,134,140,1) 63%);
            color:white;
            display:flex;
            align-items:center;
            justify-content:space-between;
            padding:0 20 px;
            z-index:100;
            position:fixed;
            top:0;
            width:100%;
        
        }
        .content {
            margin-top:20px;
            margin-left: 250px;
            padding: 20px;
        }
        .cikis-butonu {
            cursor: pointer;
            color: white;
            border: 1px solid white;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .cikis-butonu:hover {
            background-color: red;
            color:white;
        }
        .logo {
            max-width : 100%;
            height : auto;
            width : 50px;

        }

        .sidebar{
            height: 1000px;
            width:200px;
            position:fixed;
            top:80px;
            left: 0;
            padding: 20px;
            background-color: #d3d9e0;
            z-index: 100;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar ul li {
            margin-bottom: 10px;
        }

        .sidebar ul li div {
            border: 1px solid #ccc;
            padding: 10px;
            background-color: #f8f9fa;
            border-radius: 10px; /* Köşe yuvarlatma */
            transition: background-color 0.3s;
            
        }
        .sidebar ul li div:hover {
            background: #a6acb4; 
        }

        .sidebar a {
            text-decoration: none;
            color: #333;
            transition: color 0.3s;
        }
        .sidebar a:hover {
            color: #fff;

        }




        </style>
    </head>
    <body>
        <div class="ust-serit">
                <div class = "logo">
                </div>
            <div class="hoşgeldiniz">
                <span class="kullanici-ad">Hoş geldiniz, <?php echo $username; ?></span>
                <a class="cikis-butonu" href="../temp/logout.php">Çıkış Yap</a>
            </div>   
        </div>

        <div class = "sidebar">
            <ul>
                <li>
                <a href="../home"><div>Anasayfa</div></a>
                </li>
                <li>
                <a href="../contact"><div>İletişim</div></a>
                </li>
            </ul>
        </div>

<div class="content">

</div>

    </body>
</html>