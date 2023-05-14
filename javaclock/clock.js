/* Class, id and data
console.log();
#MyclockDisplay 
    .clock
    onload
    showTime()
     */

function showTime() {
    const date = new Date();
    let h = date.getHours();
    console.log(h);
    let m = date.getMinutes();
    let s = date.getSeconds();
    let session = "AM";
    console.log(session);

    if(h == 0) {
        h = 12;
        session = "AM";
    }

    if(h > 12 ){
        h = h - 12;
        session = "PM";
    }

    h = (h < 10 ) ? "0" + h : h;
    m = (m < 10 ) ? "0" + m : m;
    s = (s < 10 ) ? "0" + s : s;

    var time = h + ":" + m + ":" + s + " " + session;
    console.log(time);
    document.getElementById("MyclockDisplay").innerText = time;

    setTimeout(showTime, 1000);

}

showTime()