function startTimer() {
    let shc = new Date();
    var h = shc.getHours();
    var m = shc.getMinutes();
    var s = shc.getSeconds();
    var datestr =shc.toDateString();
   

    var d=shc.getDay();
    var mn=shc.getMonth();
    var y=shc.getFullYear();

    h=addZero(h);
    m=addZero(m);
    s=addZero(s);

    document.getElementById("tmr").innerHTML = datestr +' '+ h+ ":" + m + ":" + s;
    t = setTimeout('startTimer()', 500);
  }
  function addZero(z) {
    if(z<10){
        z="0"+z;
    }
    return z;
}