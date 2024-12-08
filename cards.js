let deg = 0;
    let cards = [];
    let round = 0;
    getRandomText()
    function getRandomText() {
    if (cards.length === 0) {
      fetch('./cards.json')
        .then(response => response.json())
        .then(data => {
          cards = data.messages;
          displayRandomText();
        })
        .catch(error => console.error(error));
    } else {
      displayRandomText();
    }
  }

  function displayRandomText() {
    if (cards.length === 0) {
      console.log("Você chegou ao final do drunkPirate, talvez um pouco tonto");
      document.getElementsByClassName('card-description')[0].innerText = "Beba uma dose";
    }
    else{
      const randomIndex = Math.floor(Math.random() * cards.length);
      if(cards[randomIndex].minRound >= round){
        console.log("Carta ainda não disponível");
        displayRandomText();
      }
      else{
        if(cards[randomIndex].buttonType == 1){
          document.getElementsByClassName("not-done")[0].style.display = "none";
        }
        else{
          document.getElementsByClassName("not-done")[0].style.display = "block";
        }
        const point = cards[randomIndex].point;
        const description = cards[randomIndex].description;
        cards.splice(randomIndex, 1);
        round++;
        document.getElementsByClassName('card-center')[0].style.transform = "rotateY("+deg+"deg)";
        document.getElementsByClassName('round')[1].innerText = round; 
        document.getElementsByClassName('shotsQuant')[0].innerText = point;
        document.getElementsByClassName('card-description')[0].innerText = description;
      }
    }
    deg += 360;
  }

  function rotatePage(){
    document.body.style.transform = "rotate(90deg)";
  }

  function visible(div)
  {
      if(div.style.display == "none")
      {
          div.style.display = "block";
          return;
      }
      else
      {
          div.style.display = "none";
          return;
      }
  }

  /*const addButton = document.getElementById('add-input');
  const inputList = document.getElementById('input-list');
  let inputCount = 1;

  addButton.addEventListener('click', () => {
    inputCount++;
    const newInput = document.createElement('div');
    newInput.classList.add('input-group');
    newInput.innerHTML = `
      <input type="text" name="input-${inputCount}" placeholder="Jogador ${inputCount}">
    `;
    inputList.appendChild(newInput);
  });*/

  function showCards(){
    let text;
    let pos = 1;
    for(i=0;i<cards.length;i++){
    text = text + "\n" + pos + " - " + cards[i].description + "\n";
    pos++;
    }
    console.log(text);
  }