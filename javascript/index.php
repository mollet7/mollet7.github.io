<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javascript | Main</title>
</head>
        <style>
          body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
          }
    
          .button-container {
            margin: 3%;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            grid-template-rows: repeat(auto-fit, minmax(100px, 1fr));
            grid-gap: 7%;
            justify-items:center;
            align-items: center;
            height: 50vh;
          }
    
          .button {
            background-color: #ddd;
            color: #333;
            border: none;
            font-size: 1.5rem;
            padding: 2rem 3rem;
            transition: background-color 0.3s ease;
            cursor: pointer;
            border-radius: 3%;
          }
    
          .button:hover {
            background-color: #eee;
          }

    /* Mobile responsiveness */
      @media (max-width: 767px) {
        .button-container {
          grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
          grid-template-rows: repeat(auto-fit, minmax(80px, 1fr));
          grid-gap: 5px;
        }
        
        .button {
          font-size: 1.2rem;
          padding: 0.8rem 1.6rem;
        }
      }
        </style>
      </head>
      <body>
      <a href="../../tester/"><button>HOME</button></a>
        <div class="button-container">
          <a href="json.php"><button class="button">JSON HOME</button></a>
          <a href="json1.php"><button class="button">JSON ONE</button></a>
          <a href="json2.php"><button class="button">JSON TWO</button></a>
          <a href="json3.php"><button class="button">JSON THREE</button></a>
          <a href="json-server.php"><button class="button">JSON SERVER</button></a>
          <a href="json-php-database.php"><button class="button">JSON DATABASE </button></a>
          <a href="json.php"><button class="button">JSON PHP</button></a>
          <a href="json_html.php"><button class="button">JSON HTML</button></a>
          <a href="jsonP.html"><button class="button">JSONP </button></a>
          <a href="gauges.html"><button class="button">Gauges</button></a>
          <a href="xmlhttpRequest/index.php"><button class="button">xmlhttpReqeuest</button></a>
          <a href="object.html"><button class="button">JS OBJECT</button></a>
          <a href="function.php"><button class="button">Javascript Func</button></a>
        </div>
      </body>
    </html>
       
</body>
</html>