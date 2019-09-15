//Creates a http request, with added modifiers (for example matches, teams, etc)
function createRequest(modifier, amount) {
    var httpRequest = new XMLHttpRequest();

    httpRequest.addEventListener('load', loadMatches);
    amount = amount || 48;
    var requestString = ('https://api.pandascore.co/' + modifier + '?token=IKywEyon-TM91r3YFdYd_FW8ZQjZQHZk4iWavhnG7whKK0X2NXk' + ';page[size]=' + amount);
    httpRequest.open('GET', requestString);
    httpRequest.send();

    function loadMatches() {
        var i = 1;
        var json = JSON.parse(httpRequest.responseText);

        if (json && json.constructor === Array && json.length === 0) {
            document.getElementById("alert-template").style.display = "";

        } else {

            json.forEach(function (value) {
                //maakt een div aan voor elk resultaat dat je terugkrijgt
                var match_container = document.createElement("div");
                match_container.style.borderRadius = "7px";
                match_container.style.backgroundColor = "rgba(217, 217, 217, 0.3)";
                match_container.style.margin = "3px";
                match_container.id = ('match' + i);
                match_container.style.transition = 'all 0.15s ease-in';

                //hover effects
                match_container.onmouseover = function () {
                    match_container.style.opacity = '0.7';
                    match_container.style.transform = 'scale(0.98)';
                    match_container.style.cursor = "pointer";
                }
                match_container.onmouseleave = function () {
                    match_container.style.opacity = '1';
                    match_container.style.transform = 'scale(1)';
                    match_container.style.cursor = "default";
                }

                //Welk spel de match van is
                var gameslug = value.videogame.slug;
                //set color and classname dependant on game
                switch (gameslug) {
                    case "ow":
                        match_container.style.backgroundColor = 'rgb(252, 174, 60)';
                        match_container.className = "col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 ow";
                        break;
                    case "league-of-legends":
                        match_container.style.backgroundColor = 'rgb(206, 230, 237)';
                        match_container.className = "col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 lol";
                        break;
                    case "dota-2":
                        match_container.style.backgroundColor = 'rgb(239, 182, 195)';
                        match_container.className = "col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 dota2";
                        break;
                    default:
                        return;
                }


                document.getElementById("matches").appendChild(match_container);

                //team namen, en plaatjes source laden
                var match_teams = document.createElement('h4');
                var match_imagea = document.createElement('img');
                var match_imageb = document.createElement('img');
                var team_name = [];
                var team_image_source = [];
                var j = 0;
                //iterate voor namen en image links
                value.opponents.forEach(function (v) {
                    team_name[j] = v.opponent.name;
                    team_image_source[j] = v.opponent.image_url;
                    //broken image source link check
                    if (team_image_source[j] == null) {
                        team_image_source[j] = 'https://i.imgur.com/ZVm5wx8.png';
                    }
                    j++;
                })

                //match detail link
                document.getElementById("match" + i).href = "match_detail.php";
                document.getElementById("match" + i).onclick = function () {
                    var match_id = value.id;
                    localStorage.setItem("m_id", match_id);
                    window.location = ("match_detail.php");
                };

                //voeg team namen toe
                match_teams.innerHTML = (team_name[0] + ' VS ' + team_name[1]);
                match_teams.className = "match_titel";
                document.getElementById('match' + i).appendChild(match_teams);

                //league waarin de match gespeeld wordt
                var match_league = document.createElement('p');
                match_league.id = ("league" + 1);
                match_league.innerHTML = value.league.name;
                document.getElementById('match' + i).appendChild(match_league);

                //datum wanneer match begint
                var match_begindate = document.createElement('p');
                match_begindate.id = ("begindate" + i);
                var date = new Date(value.begin_at);
                match_begindate.innerHTML = (date.toLocaleString());
                document.getElementById('match' + i).appendChild(match_begindate);

                //plaatjes stylen en toevoegen
                match_imagea.src = team_image_source[0];
                match_imageb.src = team_image_source[1];
                match_imagea.class = 'img-fluid rounded float-left';
                match_imageb.class = 'img-fluid rounded float-right';
                match_imagea.style.maxHeight = '100px';
                match_imageb.style.maxHeight = '100px';
                match_imageb.style.marginLeft = '20px';
                match_imagea.style.maxWidth = '100px';
                match_imageb.style.maxWidth = '100px';
                document.getElementById('match' + i).appendChild(match_imagea);
                document.getElementById('match' + i).appendChild(match_imageb);


                //filter TBD matches
                if (team_name[0] == null || team_name[1] == null) {
                    var element = document.getElementById("match" + i);
                    element.outerHTML = "";
                    delete element;
                }

                i++;


            });
        }
    }
}


