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

/* Git */
let circularProgress3 = document.querySelector(".circular-progress3");
let progressValue3 = document.querySelector(".progress-value3");


let progressStartValue3 = 0;
let progressEndValue3 = 60;
let speed3 = 100;


let progress3 = setInterval(() => {
    progressStartValue3++;

    progressValue3.textContent = `${progressStartValue3}%`
    circularProgress3.style.background = `conic-gradient(#000 ${progressStartValue3 * 3.6}deg, #ededed 0deg)` 

    if(progressStartValue3 == progressEndValue3){
        clearInterval(progress3)
    }
}, speed3);

/* Boostrap */
let circularProgress4 = document.querySelector(".circular-progress4");
let progressValue4 = document.querySelector(".progress-value4");


let progressStartValue4 = 0;
let progressEndValue4 = 65;
let speed4 = 100;


let progress4 = setInterval(() => {
    progressStartValue4++;

    progressValue4.textContent = `${progressStartValue4}%`
    circularProgress4.style.background = `conic-gradient(#000 ${progressStartValue4 * 3.6}deg, #ededed 0deg)` 

    if(progressStartValue4 == progressEndValue4){
        clearInterval(progress4)
    }
}, speed4);

/* PHP */
let circularProgress5 = document.querySelector(".circular-progress5");
let progressValue5 = document.querySelector(".progress-value5");


let progressStartValue5 = 0;
let progressEndValue5 = 30;
let speed5 = 100;


let progress5 = setInterval(() => {
    progressStartValue5++;

    progressValue5.textContent = `${progressStartValue5}%`
    circularProgress5.style.background = `conic-gradient(#000 ${progressStartValue5 * 3.6}deg, #ededed 0deg)` 

    if(progressStartValue5 == progressEndValue5){
        clearInterval(progress5)
    }
}, speed5);

/* React */
let circularProgress6 = document.querySelector(".circular-progress6");
let progressValue6 = document.querySelector(".progress-value6");


let progressStartValue6 = 0;
let progressEndValue6 = 5;
let speed6 = 100;


let progress6 = setInterval(() => {
    progressStartValue6++;

    progressValue6.textContent = `${progressStartValue6}%`
    circularProgress6.style.background = `conic-gradient(#000 ${progressStartValue6 * 3.6}deg, #ededed 0deg)` 

    if(progressStartValue6 == progressEndValue6){
        clearInterval(progress6)
    }
}, speed6);

/* Symphony */
let circularProgress7 = document.querySelector(".circular-progress7");
let progressValue7 = document.querySelector(".progress-value7");


let progressStartValue7 = 0;
let progressEndValue7 = 3;
let speed7 = 100;


let progress7 = setInterval(() => {
    progressStartValue7++;

    progressValue7.textContent = `${progressStartValue7}%`
    circularProgress7.style.background = `conic-gradient(#000 ${progressStartValue7 * 3.6}deg, #ededed 0deg)` 

    if(progressStartValue7 == progressEndValue7){
        clearInterval(progress7)
    }
}, speed7);