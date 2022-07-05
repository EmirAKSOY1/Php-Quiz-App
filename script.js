const startingMinutes = 10;
let time = startingMinutes * 60;

const countdownEl = document.querySelector("#countdown");




setInterval(updateCountdown, 1000);



function updateCountdown() {
  const minutes = Math.floor(time / 60);
  let seconds = time % 60;

  seconds = seconds < 10 ? "0" + seconds : seconds;

  countdownEl.innerHTML = `${minutes}:${seconds}`;
    
    function map_range(value, low1, high1, low2, high2) {
        return parseInt(low2 + (high2 - low2) * (value - low1) / (high1 - low1));
    }
   
   document.getElementById("prog").style.width =`${map_range(time,0,600,0,100).toString()}%` ;
    if(time>0)
    {
        console.log(time );
    time--;
}
    else{
        console.log("Süre Bitti");
        input_2.click();
    }
   
   
  
}