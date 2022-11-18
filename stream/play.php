<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>365-Entertain-videoplay</title>
    <style>
        body,html
        {
            height: 97%;
            width: 100%;
            box-sizing: border-box;
            background-image: url("images/body.gif");
            padding: 0;
            margin: 0;
        }
        .cont
        {
            height: inherit;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .inside
        {
            height: inherit;
            
        }
        button
        {
            margin-top: 7px;
            margin-left: 8px;
          padding: 12px;
          background-color:rgb(24, 124, 158);
          font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
          color: white;
          border-radius: 5px;
          cursor: pointer;
        }
        button:hover
        {
            background-color:  rgb(31, 188, 240);
            scale: 110%;

        }
        @media screen and (max-width:815px)
        {
            body,html
            {
                height: 80%;
                 
            }
            .inside
            {
                box-sizing: border-box;
               overflow-x: hidden;
               padding-left: 10px;
               padding-right: 10px;
            }
        }
    </style>
</head>
<body onload="funcc()">
    
    <a href="index.php"><button>BACK</button></a>
    <div class="cont">
        <video controls class="inside" autoplay set id="vidz">
            <source src="videos/marvel.mp4"type="video/mp4" id="vide">
        </video>
        
    </div>

    <script src="js.js">
    
    </script>
</body>
</html>