/* Html & Css */
let circularProgress = document.querySelector(".circular-progress");
let progressValue = document.querySelector(".progress-value");


let progressStartValue = 0;
let progressEndValue = 85;
let speed = 100;


let progress = setInterval(() => {
    progressStartValue++;

    progressValue.textContent = `${progressStartValue}%`
    circularProgress.style.background = `conic-gradient(#000 ${progressStartValue * 3.6}deg, #ededed 0deg)` 

    if(progressStartValue == progressEndValue){
        clearInterval(progress)
    }
}, speed);
/* JavaScript */
let circularProgress2 = document.querySelector(".circular-progress2");
let progressValue2 = document.querySelector(".progress-value2");


let progressStartValue2 = 0;
let progressEndValue2 = 45;
let speed2 = 100;


let progress2 = setInterval(() => {
    progressStartValue2++;

    progressValue2.textContent = `${progressStartValue2}%`
    circularProgress2.style.background = `conic-gradient(#000 ${progressStartValue2 * 3.6}deg, #ededed 0deg)` 

    if(progressStartValue2 == progressEndValue2){
        clearInterval(progress2)
    }
}, speed2);
/* Php */