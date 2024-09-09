<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NusantaKuNews</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .header {
            background-color: #088F8F;
            color: white;
            padding: 10px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            position: relative;
            height: 20px; 
        }
        .header img {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            height: 40px;
        }
        .header-icons {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            align-items: center;
        }
        .menu-icon {
            cursor: pointer;
            margin-right: 20px; 
        }
        .menu-icon div {
            width: 25px;
            height: 3px;
            background-color: white;
            margin: 4px 0;
        }
        .search-icon {
            width: 24px; 
            height: 24px;
            cursor: pointer;
            fill: #fff;
        }
        .search-icon:hover {
            fill: #f0f0f0;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="./media/nusantaku.png" alt="NusantaKu Logo">
        <div class="header-icons">
            <div class="menu-icon">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <circle cx="11" cy="11" r="8" stroke="#fff" stroke-width="2" fill="none" />
                <line x1="16" y1="16" x2="22" y2="22" stroke="#fff" stroke-width="2" />
            </svg>
        </div>
    </div>
</body>
</html>