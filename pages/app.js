const logout = document.querySelector(".logout");
logout.addEventListener("click", function () {
    console.log("logout");
    location.replace("../logout.php")
});

document.getElementById("Sunday").innerHTML = "S";
document.getElementById("Monday").innerHTML = "M";
document.getElementById("Tuesday").innerHTML = "T";
document.getElementById("Wednesday").innerHTML = "W";
document.getElementById("Thursday").innerHTML = "TH";
document.getElementById("Friday").innerHTML = "F";
document.getElementById("Saturday").innerHTML = "S";

function scheduled() {
    location.replace("../scheduled/scheduled.php");
}

function avaliable() {
    location.replace("../avaliable/avaliable.php");
}

function request() {
    location.replace("../request/request.php");
}

function create() {
    location.replace("../create/create.php");
}

function createCalendar() {
    location.replace("../calendar/calendar.php");
}