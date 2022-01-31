const search = document.querySelector('input[class="location-input"]');
const gamesContainer = document.querySelector(".games-near-you");

search.addEventListener("keyup", function (event) {
    if (event.key === "Enter") {
        event.preventDefault();

        const data = {search: this.value};

        fetch("/search", {
            method: "POST",
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        }).then(function (response) {
            return response.json();
        }).then(function (matches) {
            gamesContainer.innerHTML = "";
            loadMatches(matches);
        });
    }
});

function loadMatches(matches){
    matches.forEach(match =>{
        console.log(match);
        createMatch(match);
    });
}

function createMatch(match){
    const template = document.querySelector("#match-template");
    const clone = template.cloneNode(true);

    const location = clone.querySelector(".getLocation");
    location.innerHTML = "Lokacja";
    const teamA = clone.querySelector(".getTeamA");
    teamA.innerHTML = match.team_one;
    const teamB = clone.querySelector(".getTeamB");
    teamB.innerHTML = match.team_two;
    const date = clone.querySelector(".getData");
    date.innerHTML = match.date;

    gamesContainer.appendChild(clone);

}
