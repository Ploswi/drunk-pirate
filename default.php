<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <title>Uni Drunk</title>
    <link rel="icon" type="image/x-icon" href="/img/favicon.png">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="cards.js"></script>
  </head>
  <body>
    <header>
      <div class="header">
        <ion-icon name="settings-outline" style="font-size: 220%" onclick="visible(document.getElementsByClassName('config')[0])"></ion-icon>
        <div class="noSelect"><h1 class="round customFont">Rodada: <span class="round customFont">0</span></h1></div>
        <div><ion-icon name="menu-outline" style="font-size: 220%"></ion-icon></div>
      </div>
    </header>
  <div class="config" style="display: none">
    <div class="config center">
      <div>
        <button onclick="rotatePage()">Rotate</button>
        <div id="input-list">
          <div class="input-group">
            <input type="text" name="input-1" placeholder="Jogador 1">
          </div>
        </div>
        <button id="add-input">Adicionar jogador</button>
      </div>
    </div>
  </div>
	<div class="card-body">
		<div class="card-center">
			<h2 class="card-title customFont noSelect">Uni Drunk</h2>
			<p class="card-description customFont noSelect">Descrição.</p>
      <div style="align-self: end">
        <div class="shots">
          <div><ion-icon name="beer-outline"></ion-icon></div>
          <div class="shotsQuant">3</div>
        </div>
      </div>
		</div>
	</div>
  <div class="button-container">
      <button class="Custom done noSelect" onclick="displayRandomText()">Fazer</button>
      <button class="Custom not-done noSelect" onclick="displayRandomText()">Correr</button>
    </div>
  </body>
  <style>
    .header{
      display: flex;
      width: 100%;
      max-height: 5vh;
      justify-content: space-between;
      align-items: center;
      background-color: rgb(255, 255, 255, 0.5);
      border-bottom: 1px solid #eaeaea;
    }
    header ion-icon{
      margin: 15px;
    }
    header h1 {
      font-size: 220%;
      font-weight: bold;
      text-align: center;
    }
		body, html{
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 1600 800'%3E%3Cg stroke='%23000' stroke-width='66.7' stroke-opacity='0.05' %3E%3Ccircle fill='%23ff9d00' cx='0' cy='0' r='1800'/%3E%3Ccircle fill='%23fb8d17' cx='0' cy='0' r='1700'/%3E%3Ccircle fill='%23f47d24' cx='0' cy='0' r='1600'/%3E%3Ccircle fill='%23ed6e2d' cx='0' cy='0' r='1500'/%3E%3Ccircle fill='%23e35f34' cx='0' cy='0' r='1400'/%3E%3Ccircle fill='%23d85239' cx='0' cy='0' r='1300'/%3E%3Ccircle fill='%23cc453e' cx='0' cy='0' r='1200'/%3E%3Ccircle fill='%23be3941' cx='0' cy='0' r='1100'/%3E%3Ccircle fill='%23b02f43' cx='0' cy='0' r='1000'/%3E%3Ccircle fill='%23a02644' cx='0' cy='0' r='900'/%3E%3Ccircle fill='%23901e44' cx='0' cy='0' r='800'/%3E%3Ccircle fill='%23801843' cx='0' cy='0' r='700'/%3E%3Ccircle fill='%236f1341' cx='0' cy='0' r='600'/%3E%3Ccircle fill='%235e0f3d' cx='0' cy='0' r='500'/%3E%3Ccircle fill='%234e0c38' cx='0' cy='0' r='400'/%3E%3Ccircle fill='%233e0933' cx='0' cy='0' r='300'/%3E%3Ccircle fill='%232e062c' cx='0' cy='0' r='200'/%3E%3Ccircle fill='%23210024' cx='0' cy='0' r='100'/%3E%3C/g%3E%3C/svg%3E");
      background-attachment: fixed;
      background-size: cover;
      margin: 0;
      padding: 0;
    }
    .shots{
      display: flex;
      font-size: 250%;
    }
		.card-body{
      margin-top: 10vh;
      display: flex;
      align-items: center;
      justify-content: center;
		}
    .card-center {
      background-color: #fff;
      background-image:
        linear-gradient(90deg, transparent 79px, #abced4 79px, #abced4 81px, transparent 81px),
        linear-gradient(#eee .1em, transparent .1em);
      background-size: 100% 1.2em;
      width: 80vw;
      height: 50vh;
      padding-left: 90px;
      border-radius: 22px 22px 22px 22px;
      -moz-border-radius: 22px 22px 22px 22px;
      -webkit-border-radius: 22px 22px 22px 22px;
      border: 5px solid #000000;
      -webkit-box-shadow: 0px 0px 33px -1px rgba(0,0,0,1);
      -moz-box-shadow: 0px 0px 33px -1px rgba(0,0,0,1);
      box-shadow: 0px 0px 33px -1px rgba(0,0,0,1);
      transform-style: preserve-3d;
      transition: transform 1s;
    }
    .customFont{
      font-family: 'Righteous', cursive;
      font-size: 35px;
      color: rgb(0, 0, 0);
    }
    .noSelect{
      user-select: none;
      -webkit-user-select: none;
    }
    .card-title {
      font-size: 400%;
      text-align: center;
    }
    .card-description {
      font-size: 400%;
    }
    .button-container {
      justify-content: center;
      display: flex;
    }
    .button-container button{
      margin: 100px 10px;
      padding: 10px;
      font-size: 400%;
      width: 40%;
      height: 20%;
      font-weight: bold;
      border-radius: 5px;
      border: none;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      cursor: pointer;
    }
    .button-container button.done {
      background-color: #5cb85c;
      color: #fff;
    }
    .button-container button.not-done {
      background-color: #d9534f;
      color: #fff;
    }
    .config{
      position: absolute;
      left: 0;
      right: 0;
      top: 0;
      bottom: 0;
      margin: auto;
      z-index: 2;
      width: 90%;
      height: 50%;
    }
    .config .center{
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: pink;
    }
    #input-list {
      display: relative;
      margin-bottom: 20px;
      width: 90%;
      background-color: green;
    }
    .input-group {
      margin-bottom: 10px;
      display: relative;
    }
    input[type="text"] {
      display: block;
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    #add-input {
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>
</html>
