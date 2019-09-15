//Creates a http request, this time requesting a match with a certain id
function createRequest(modifier) {
    var httpRequest = new XMLHttpRequest();

    httpRequest.addEventListener('load', loadMatches);
    var requestString = ('https://api.pandascore.co/' + modifier + '?token=IKywEyon-TM91r3YFdYd_FW8ZQjZQHZk4iWavhnG7whKK0X2NXk');
    httpRequest.open('GET', requestString);
    httpRequest.send();

    function loadMatches() {
        var json = JSON.parse(httpRequest.responseText);

        //maakt een div aan voor het resultaat
        var match_container = document.createElement("div");
        match_container.style.borderRadius = "7px";
        match_container.style.backgroundColor = "rgba(217, 217, 217, 0.3)";
        match_container.style.margin = "3px";
        match_container.id = ('detail_container');

        //Which game the match is from
        var gameslug = json.videogame.slug;
        //set color and classname dependant on game
        switch (gameslug) {
            case "ow":
                match_container.style.backgroundColor = 'rgb(247, 223, 173)';
                match_container.className = "ow";
                document.getElementById("titel").innerText = "Overwatch";
                document.getElementById("back_button").style.backgroundColor = 'rgb(255, 210, 117)';
                break;
            case "league-of-legends":
                match_container.style.backgroundColor = 'rgb(206, 230, 237)';
                match_container.className = "lol";
                document.getElementById("titel").innerText = "League of Legends";
                document.getElementById("back_button").style.backgroundColor = 'rgb(133, 217, 242)';
                break;
            case "dota-2":
                match_container.style.backgroundColor = 'rgb(239, 182, 195)';
                match_container.className = "dota2";
                document.getElementById("titel").innerText = "Dota 2";
                document.getElementById("back_button").style.backgroundColor = 'rgb(224, 123, 146)';
                break;
            default:
                return;
        }

        document.getElementById("match_id").appendChild(match_container);

        //team namen, en plaatjes source laden
        var match_teams = document.createElement('h2');
        var match_imagea = document.createElement('img');
        var match_imageb = document.createElement('img');
        var team_name = [];
        var team_image_source = [];
        var team_slug = [];
        var j = 0;
        //iterate voor namen en image links
        json.opponents.forEach(function (v) {
            team_name[j] = v.opponent.name;
            team_image_source[j] = v.opponent.image_url;
            team_slug = v.opponent.acronym;
            //broken image source link check
            if (team_image_source[j] == null) {
                team_image_source[j] = 'https://i.imgur.com/ZVm5wx8.png';
            }
            j++;
        })

        //voeg team namen toe
        match_teams.innerHTML = (team_name[0] + ' VS ' + team_name[1]);
        match_teams.style.padding = "5px";
        match_teams.className = 'match_titel';
        document.getElementById('detail_container').appendChild(match_teams);

        //welk tournament in gespeeld wordt
        var tourname = document.createElement('h4');
        tourname.innerHTML = (json.league.name + ' ' + json.serie.full_name);
        var a = document.createElement('a');
        a.appendChild(tourname);

        if (json.league.url != null) {
            var url = json.league.url;
            a.href = url;
            a.onclick = function () {
                window.location(url);
            };
            a.className = ("tournament_titel");
        }

        document.getElementById('detail_container').appendChild(a);

        //plaatjes stylen en toevoegen
        match_imagea.src = team_image_source[0];
        match_imageb.src = team_image_source[1];
        match_imagea.id = "image_a";
        match_imageb.id = "image_b";
        match_imagea.class = 'img-fluid rounded float-left';
        match_imageb.class = 'img-fluid rounded float-right';
        match_imagea.style.maxHeight = '200px';
        match_imageb.style.maxHeight = '200px';
        match_imageb.style.marginLeft = '20px';
        document.getElementById('detail_container').appendChild(match_imagea);
        document.getElementById('detail_container').appendChild(match_imageb);


        //wanneer match over is
        var eindtijd = document.createElement('h6');
        var date = new Date(json.updated_at);
        eindtijd.innerHTML = ('Laatst geupdate op ' + date.toLocaleString());
        eindtijd.style.fontStyle = 'italic';
        eindtijd.style.marginTop = '10px';
        eindtijd.style.marginBottom = '-5px';
        document.getElementById('detail_container').appendChild(eindtijd);

        //eindscores
        var match_score = document.createElement('h2');
        match_score.id = "match_score";
        var scores = [];
        var h = 0;
        //iterate voor namen en image links
        json.results.forEach(function (v) {
            scores[h] = v.score;
            h++;
        })

        if (scores[1] === 0 && scores[0] === 0) {
            return;
        } else {


            //voeg scores toe
            match_score.innerHTML = scores[0] + ' - ' + scores[1];
            match_score.style.wordSpacing = '110px';
            match_score.style.paddingTop = '15px';
            document.getElementById('detail_container').appendChild(match_score);

            //voeg kroontje toe, om winnaar te verduidelijken
            if (scores[0] < scores[1]) {
                var winner = document.createElement('img');
                winner.src = 'img/crown.png';
                winner.style.marginLeft = '270px';
                winner.id = 'crown_right';
                document.getElementById('detail_container').appendChild(winner);
            }
            else if (scores[1] < scores[0]) {
                var winner = document.createElement('img');
                winner.src = 'img/crown.png';
                winner.style.marginRight = '270px';
                winner.id = 'crown_left';
                document.getElementById('detail_container').appendChild(winner);
            }

            document.getElementById('detail_container').appendChild(document.createElement('hr'));

            var youtube_embed = document.createElement('iframe');
            youtube_embed.id = "youtube_embed";
            // youtube_embed.innerHTML = value.ytid;
            var ytid = "IWz5aA7DaiM";
            youtube_embed.width = "800";
            youtube_embed.height = "500";
            youtube_embed.src = "https://www.youtube.com/embed/" + ytid;
            document.getElementById('detail_container').appendChild(youtube_embed);
        }


    }
}


var m_id = localStorage.getItem('m_id');
createRequest('matches/' + m_id);