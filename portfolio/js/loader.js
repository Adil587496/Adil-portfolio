var loadSpace = document.getElementById('loader');
var mainLoop = document.createElement('div');
var shadeDot = document.createElement('div');
var arcaPipe = document.createElement('div');
var loadBars = document.createElement('div');
var loadNumb = document.createElement('div');

mainLoop.className = "dotring";
shadeDot.className = "spheric";
arcaPipe.className = "pipline";
loadBars.className = "loadbar";
loadNumb.className = "numbers";

function setPack(num){
  loadBars.innerHTML = '';
  for (i=0;i<num;i++){
    var loadPack = document.createElement('div');
    loadPack.className = "loadpac";
    loadPack.style.zIndex = 100 - i;
    loadPack.style.backgroundPosition = "0 "+(i*30)+"px";
    loadBars.appendChild(loadPack);
  }
}

mainLoop.appendChild(shadeDot);
mainLoop.appendChild(arcaPipe);
loadSpace.appendChild(mainLoop);
loadSpace.appendChild(loadBars);

var prog = 0;
function loadry(){
  prog ++;
  if(prog <= 100){
    boxn = Math.floor(prog/5.5);
    setPack(boxn);
    loadNumb.innerHTML = prog;
    loadSpace.appendChild(loadNumb);
  } else if (prog == 120){
    loadSpace.style.opacity = 0;
  } else if (prog >= 130){
    loadSpace.style.opacity = 1;
    prog = 0;
    window.location.href = "../portfolio/home.php";

  };
  setTimeout(loadry,(Math.random()*20)+10);
}
loadry();