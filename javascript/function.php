<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Javascript Functions </title>
    <style>
      .msgBox {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        width: 242px;
        background: #eee;
      }

      .msgBox p {
        line-height: 1.5;
        padding: 10px 20px;
        color: #333;
        padding-left: 82px;
        background-position: 25px center;
        background-repeat: no-repeat;
      }

      .msgBox button {
        background: none;
        border: none;
        position: absolute;
        top: 0;
        right: 0;
        font-size: 1.1rem;
        color: #aaa;
      }

    </style>
</head>
<body>
<h1>Building your own function</h1>
<h3>The basic function</h3>
<button>Display message box</button>

<script>




  function displayMessage(msgText, msgType){
 
    const body = document.body;

    const panel = document.createElement('div');
    panel.setAttribute('class','msgBox');
    body.appendChild(panel);

    const msg = document.createElement('p');
    msg.textContent = msgText;
    panel.appendChild(msg);

    const closeBtn = document.createElement('button');
    closeBtn.textContent = 'x';
    panel.appendChild(closeBtn);

    closeBtn.addEventListener('click', () => 
    panel.parentNode.removeChild(panel));

    if (msgType === 'warning') {
  msg.style.backgroundImage = 'url(warning.png)';
  panel.style.backgroundColor = 'red';
} else if (msgType === 'chat') {
  msg.style.backgroundImage = 'url(chat.png)';
  panel.style.backgroundColor = 'aqua';
} else {
  msg.style.paddingLeft = '20px';
}
  }
  const btn = document.querySelector('button');
  btn.addEventListener('click', () => 
  displayMessage('Wow, this is a diffrent message!', 'chat'));
</script>
</body>
</html>