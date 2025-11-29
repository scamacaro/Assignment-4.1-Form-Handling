// this JavaScript variable is going to use the time that we set in our PHP code
// and then convert it to seconds so it is easier to do the time comparison
let countdownTimer = new Date(countdownDateTime).getTime();

// setInterval repeats code at the specified interval; it also returns the current id
// of the interval so we can stop setInterval from running
let invtervalId = setInterval(function(){
    // this variable will grab the current time
    let currentTime = new Date().getTime();

    console.log("countdownTimer=" + countdownTimer);
    console.log("currentTime" + currentTime);

    // const - the value of this variable will not change- use UPPERCASE for constant variable names
    // the number of milliseconds in a second
    const MS_IN_A_SECOND = 1000;
    // the number of milliseconds in a minute
    const MS_IN_A_MINUTE = MS_IN_A_SECOND * 60;
    // the number of milliseconds in an hour
    const MS_IN_AN_HOUR = MS_IN_A_MINUTE * 60;
    // the number of milliseconds in a day
    const MS_IN_A_DAY = MS_IN_AN_HOUR * 24;

    // get the difference in milliseconds between current time and launch time
    let timeDiff = countdownTimer - currentTime;

    // countdown calculations 
    // find out how many days are left before the launch
    let days = Math.floor(timeDiff / MS_IN_A_DAY);
    // find out how many hours are left before launch
    let hours = Math.floor((timeDiff % MS_IN_A_DAY) / MS_IN_AN_HOUR);
    // find out how many minutes are left before launch
    let minutes = Math.floor((timeDiff % MS_IN_AN_HOUR) / MS_IN_A_MINUTE);
    // find out how many seconds are left before launch
    let seconds = Math.floor((timeDiff % MS_IN_A_MINUTE) / MS_IN_A_SECOND); 

    // shortcut / pointer to the div
    let divCountdown = document.getElementById("divCountdown");

    // display the time left before launch in the div
    divCountdown.textContent = days + " Days : " + hours + " Hours : " + minutes + " Minutes : " + seconds + " Seconds";

    // shortcut / pointer to the div 
    let divCountdownMessage = document.getElementById("divCountdownMessage");

    // if/else to present the user with some context as to when the launch is happening
    if (timeDiff < 0){
        clearInterval(invtervalId);
        // missed the launch!
        divCountdown.textContent ="";
        divCountdownMessage.textContent = "You missed the launch!";
    }
    else if (days <7){
        // launch is getting closer
        divCountdownMessage.textContent = "Less than a week until launch! Pack your bags! Adventure awaits on Outer Space!";
    }
    else{
        divCountdownMessage.textContent = "Launch will be happening soon!";
    }

}, 1000); // 1000 is the time in milliseconds = 1 second 
