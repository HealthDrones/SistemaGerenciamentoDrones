//Variável global destinada a
var Grade = {};
var config = null;

//var teste = null;
/*

*/
var Config = function(width, height){
    this.width = width;
    this.height = height;
}

var Automato = function(idCel, line, coll, state, disLin, disCol){
  this.idCel = idCel;
  this.line = line;
  this.coll = coll;
  this.state = state;
  this.valueUlam = null;
  this.disLin = disLin;
  this.disCol = disCol;
  //console.log("Célula Criada... id="+this.idCel+" - line="+this.line+" - coll="+this.coll+" - state="+this.state);
}

function montaGrid(width, height){
  var count = 0;
  var html = '<table border="1" width="800" height="600"><tbody>';
  for (var i = 0; i < height; i++) {
    html += '<tr id="tr_'+i+'">';
    for (var j = 0; j < width; j++) {
      html +='<td class="morta" id="'+count+'"></td>';
      var celula = new Automato(count, i, j, "morta",(Math.min(((height-1)-(i)),(i))),(Math.min(((width-1)-(j)),(j))));
      Grade[count] = celula;
      count++;
    }
    html += '</tr>';
  }
  html += '</tbody></table>';
  //teste = new Spiral(0,width);
  document.getElementById("grid").innerHTML = html;
  eventos();
  config = new Config(width, height);
  // var sp = spiralT(5, 3);
  // console.log(sp);
}

function eventos(){
  $('tbody td')
  .mouseover(function(){
    if(!$(this).hasClass("ativa")){
      $(this).removeClass('morta');
      $(this).addClass('over');
    }
  })
  .mouseout(function(){
    if(!$(this).hasClass("ativa")){
      $(this).removeClass('over');
      $(this).addClass('morta');
    }
  })
  .click(function(){
    if(!$(this).hasClass("ativa") && !$(this).hasClass("ocupada")){
      $(this).removeClass('morta');
      $(this).removeClass('over');
      $(this).addClass('ativa');
      //console.log($(this).hasClass("celular"));
      var idCelula = $(this).attr('id');
      var estado = $(this).attr('class');
      Grade[idCelula].state = estado;
      montaEspiral(Grade[idCelula]);
      console.log("Célula: id: "+Grade[idCelula].idCel+" - state: "+Grade[idCelula].state+" - linha: "+Grade[idCelula].line+" - coluna: "+Grade[idCelula].coll);
    }else if($(this).hasClass("ativa")){
      $(this).removeClass('ativa');
      $(this).addClass('ocupada');
      //
      var idCelula = $(this).attr('id');
      var estado = $(this).attr('class');
      Grade[idCelula].state = estado;
      montaEspiral(Grade[idCelula]);
      console.log("Célula: id: "+Grade[idCelula].idCel+" - state: "+Grade[idCelula].state+" - linha: "+Grade[idCelula].line+" - coluna: "+Grade[idCelula].coll);
    }else{
      $(this).removeClass('ocupada');
      $(this).addClass('over');
      //
      var idCelula = $(this).attr('id');
      var estado = $(this).attr('class');
      Grade[idCelula].state = estado;
      montaEspiral(Grade[idCelula]);
      console.log("Célula: id: "+Grade[idCelula].idCel+" - state: "+Grade[idCelula].state+" - linha: "+Grade[idCelula].line+" - coluna: "+Grade[idCelula].coll);
    }

  });
}

function isPrime(number) {
        var start = 2;
        while (start <= Math.sqrt(number)) {
            if (number % start++ < 1) return false;
        }
        return number > 1;
    }

function isPrime2(n){
  if (n % 2 == 0 && n != 2){
    return false
  }

	var sqrt = ((Math.pow(n, 0.5))+1);
	var i = 3
	while(i<sqrt){
    if (n%i == 0){
      return false
    }
		i+=2
  }
	return true
}

function isValido(indice){
  if(Grade[indice].valueUlam==null){
    return true;
  }else{
    return false;
  }
}

function montaSpiral(){
  var count = 0;
  var html = '<table border="1" width="800" height="600"><tbody>';
  for (var i = 0; i < config.height; i++) {
    html += '<tr id="tr_'+i+'">';
    for (var j = 0; j < config.width; j++) {
      if(isValido(count)){
        if(isPrime(Grade[count].valueUlam)){
          html +='<td class="ativa" id="'+count+'"></td>';

        }else{
          html +='<td class="morta" id="'+count+'"></td>';
        }
      }else{
        html +='<td class="morta" id="'+count+'"></td>';
      }
      count++;
    }
    html += '</tr>';
  }
  html += '</tbody></table>';
  document.getElementById("grid").innerHTML = html;
  eventos();
}

function montaEspiral(celulaInicio){
  var raio = Math.min(celulaInicio.disLin, celulaInicio.disCol);
  //console.log("Distancia da Linha: "+celulaInicio.disLin+" - Distancia da Coluna: "+celulaInicio.disCol);
  var pos = spiralT(raio,raio);
  //console.log("Linha: "+pos[0]+" - Coluna:"+pos[1] + " ====== r: " + pos[2])
  // for (var i = 1; i <= 150; i++) {
  //
  // }
}

function spiralT(x, y) {
  var iy = ix = 0
    , hr = (x - 1) / 2
    , vr = (y - 1) / 2
    , tt = x * y
    , matrix = []
    , step = 1
    , dx = 1
    , dy = 0;

  while(matrix.length < tt) {
    //var idc = idCelula;
    if((ix <= hr && ix >= (hr * -1)) && (iy <= vr && (iy >= (vr * -1)))) {
      console.log(ix, iy);
      matrix.push([ix, iy]);
      //Grade[idc].valueUlam = control;
      //control +=1;
      //document.getElementById(idc).className = 'ativa';
      //console.log("Celula: "+Grade[idc].idCel+" - controle: "+Grade[idc].valueUlam);

    }
    ix += dx;
    iy += dy;
    // check direction
    if(dx !== 0) {
      // increase step
      if(ix === step && iy === (step * -1)) step++;
      // horizontal range reached
      if(ix === step || (ix === step * -1)) {
        dy = (ix === iy)? (dx * -1) : dx;
        dx = 0;
      }
    } else {
      // vertical range reached
      if(iy === step || (iy === step * -1)) {
        dx = (ix === iy)? (dy * -1) : dy;
        dy = 0;
      }
    }
  }
  //montaSpiral();
  return matrix;
}



function Ulam(){
   if ((-width/2 < x && x <= width/2)  && (-height/2 < y && y <= height/2)) {
       console.log("[ " + x + " , " +  y + " ]" + " - Counter: "+ counter);
       if(isPrime(counter)){
          ctx.shadowOffsetX = 5;
          ctx.shadowOffsetY = 5;
          ctx.fillStyle = 'rgba(255, 0, 0, 0.5)';
          ctx.fillRect(width/2 + x, height/2 - y,10,10);
       }
      if(counter==1){
        ctx.fillStyle = 'rgba(0, 0, 255, 0.5)';
        ctx.fillRect(width/2 + x, height/2 - y,10,10);
      }
   }

   if( dx > 0 ){//Dir right
       if(x > x_limit){
           dx = 0;
           dy = 10;
       }
   }
   else if( dy > 0 ){ //Dir up
       if(y > y_limit){
           dx = -10;
           dy = 0;
       }
   }
   else if(dx < 0){ //Dir left
       if(x < (-1 * x_limit)){
           dx = 0;
           dy = -10;
       }
   }
   else if(dy < 0) { //Dir down
       if(y < (-1 * y_limit)){
           dx = 10;
           dy = 0;
           x_limit += 10;
           y_limit += 10;
       }
   }
   counter += 1;
   //alert (counter);
   x += dx;
   y += dy;
}
var info;
function PasseioAleatorio(numSteps){
  //shuffle(posicao);
  if(counter<=numSteps){
    passo = Math.floor((Math.random() * 4) + 1);

     if( passo == 1 ){ //Dir up
      if ((((-width/2)+10) < (x-10) && (x-10) < ((width/2)-20)) && (((-height/2)+20) < y && y < ((height/2)-10))) {
        dx = -10;
        dy = 0;
      }else{
        dx = 0;
        dy = 0;
      }
     }

     if( passo == 2 ){//Dir right
      if ((((-width/2)+10) < x && x < ((width/2)-20)) && (((-height/2)+20) < (y+10) && (y+10) < ((height/2)-10))) {
        dx = 0;
        dy = 10;
      }else{
        dx = 0;
        dy = 0;
      }
     }
     
     if( passo == 3 ) { //Dir down
      if ((((-width/2)+10) < (x+10) && (x+10) < ((width/2)-20)) && (((-height/2)+20) < y && y < ((height/2)-10))) {
        dx = 10;
        dy = 0;
      }else{
        dx = 0;
        dy = 0;
      }
     }

     if( passo == 4 ){ //Dir left
      if ((((-width/2)+10) < x && x < ((width/2)-20)) && (((-height/2)+20) < (y-10) && (y-10) < ((height/2)-10))) {
        dx = 0;
        dy = -10;
      }else{
        dx = 0;
        dy = 0;
      }
     }
     
     if ((((-width/2)+10) < x && x < ((width/2)-20)) && (((-height/2)+20) < y && y < ((height/2)-10))) {

      // if ((width/2 + x)<=limitX && (width/2 + x)>=(limitX*(-1)) && (height/2 - y)<=limitY && (height/2 - y)>=(limitY*(-1))) {
        //console.log("[ " + x + " , " +  y + " ]" + " - Counter: "+ counter + " - Passo: "+ passo);
        if(counter!=document.getElementById("inputSteps3").value){
          ctx.fillStyle = 'rgba('+document.getElementById("inputR").value+', '+document.getElementById("inputG").value+', '+document.getElementById("inputB").value+', 0.2)';
          ctx.fillRect(width/2 + x, height/2 - y,10,10);
          AtualizaInfo(1);
        }else{
          ctx.fillStyle = 'rgba(255, 255, 0, 1)';
          ctx.fillRect(width/2 + x, height/2 - y,10,10);

          ctx.fillStyle = 'rgba(0, 0, 0, 1)';
          ctx.fillRect(width/2 + iniX, height/2 - iniY,10,10);
          AtualizaInfo(2);
        }
        if(counter==1){
          ctx.fillStyle = 'rgba(0, 0, 0, 1)';
          ctx.fillRect(width/2 + x, height/2 - y,10,10);
          AtualizaInfo(1);
        }
        rota.push(passo);
        counter += 1;
        tempoDeVoo = (counter/60).toFixed(2);
     }else{
      console.log("Iteração: "+counter+"; Passo a ser executado:"+passo);
     }
     x += dx;
     y += dy;
  }
}

function AtualizaInfo(valor){
  if(valor==1){
    info = "<p>";
    info += "  Limites: <b>[W: "+(limitX*(-1))+"|--|"+limitX+", H:"+(limitY*(-1))+"|--|"+limitY+"]</b><br />";
    info += "  Dimensões atuais: <b>[W: "+width+", H:"+height+"]</b><br />";
    info += "  Valores iniciais: <b>[x:"+iniX+",y:"+iniY+"]</b><br />";
    info += "  Tempo de voo: aproximadamente <b>"+tempoDeVoo+" minutos</b><br />";
    info += "  Passo atual: <b>"+counter+"</b><br />";
    info += "  Deslocamento: <b>[x:"+x+", y:"+y+"]</b><br />";
    info += "  Intervalo de iteração: <b>"+document.getElementById("inputTime3").value+"</b><br />";
    info += "  Quantidade de passos: <b>"+document.getElementById("inputSteps3").value+"</b> <br />";
    info += "</p>"
    document.getElementById("console").innerHTML = info;
  }else{
    info = "<p>";
    info += "  <b>Estado Final da Simulação: "+controleAnimation+"</b> <br />";
    info += "  Valor de cada passo: <b>10</b><br />";
    info += "  Passo atual: <b>"+counter+"</b><br />";
    info += "  Tempo de voo: aproximadamente <b>"+tempoDeVoo+" minutos</b><br />";
    info += "  Deslocamento: <b>[x:"+x+", y:"+y+"]</b><br />";
    info += "  Intervalo de iteração: <b>"+document.getElementById("inputTime3").value+"</b><br />";
    info += "  Quantidade de passos: <b>"+document.getElementById("inputSteps3").value+"</b> <br />";
    info += "</p>"
    document.getElementById("console").innerHTML = info;
    console.log(rota);
  }
}

function shuffle(array) {
  var currentIndex = array.length, temporaryValue, randomIndex;

  while (0 !== currentIndex) {

    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex -= 1;

    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;
  }
  console.log(array);
  return array;
}
