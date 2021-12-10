function NotReady() {
    alert("Coming soon");
}

function SubmitQuest() {
    alert("Your question has been submitted");
}

function TypeScore() {
    alert("Score has been submitted to the leaderboard");
}

function validation() {
    var id = f1.user.value;
    var ps = f1.pass.value;
    if (id.length == "" && ps.length == "") {
        alert("Username and password are empty");
        return false;
    } else {
        if (id.length == "") {
            alert("Username is empty");
            return false;
        }
        if (ps.length == "") {
            alert("Password is empty");
            return false;
        }
    }
}