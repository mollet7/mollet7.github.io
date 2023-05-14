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
          <a href="firebase.php"><button class="button">FIREBASE</button></a>
          
        </div>
      </body>
    </html>
       
</body>
</html>