
//challen id = client_id=
var httpRequest = new XMLHttpRequest();
var channelName=localStorage.getItem("channelName");
var link=localStorage.getItem("link");
var game = localStorage.getItem("game");
httpRequest.addEventListener('load', clipsLoaded);
httpRequest.open('GET', 'https://api.twitch.tv/kraken/streams/?limit=6');

/*httpRequest.open('GET', 'https://api.twitch.tv/kraken/search/channels/?query=starcraft&limit=2');*/

httpRequest.setRequestHeader('Client-ID', 'rznqr4yntdrax4it3k23uyzmaaflpa');
httpRequest.setRequestHeader('Accept', 'application/vnd.twitchtv.v5+json');
httpRequest.send();
/*--------------------------------------*/
var trendgame = new XMLHttpRequest();
trendgame.addEventListener('load', loadname);
trendgame.open('GET', 'https://api.twitch.tv/kraken/search/channels?query='+channelName+'&limit=1');

/*httpRequest.open('GET', 'https://api.twitch.tv/kraken/search/channels/?query=starcraft&limit=2');*/
trendgame.setRequestHeader('Client-ID', 'rznqr4yntdrax4it3k23uyzmaaflpa');
trendgame.setRequestHeader('Accept', 'application/vnd.twitchtv.v5+json');
trendgame.send();

function loadname(){
    console.log(channelName);

    var gameparse=JSON.parse(trendgame.responseText);

    gameparse.channels.forEach(function(stream) {

        document.getElementById("gameTitle").innerHTML =stream.game
    });

}


function clipsLoaded() {
    var controlDisplay = document.getElementById('control'),
        controlList = JSON.parse(httpRequest.responseText);
    /*   controlDisplay.innerHTML = JSON.stringify(controlList);*/

    document.getElementById("test").innerHTML = link;
    document.getElementById("name").innerHTML = channelName;
    document.getElementById("gameTitle").innerHTML = game;


    document.getElementById("videoplayersrc").src = "http://player.twitch.tv/?channel="+channelName;
    document.getElementById("chatplayersrc").src = "https://www.twitch.tv/embed/"+channelName+"/chat?popout=";
    i=1;
    controlList.streams.forEach(function(stream) {
        /*controlDisplay.innerHTML = stream.preview.medium;*/
        var full=" <div id=\"\"class=\"col-xl-4 col-lg-4 col-md-6 col-xs-12\">\n" +
            "\n" +
            "                    <div   class=\"card mb-4 h-60\">\n" +
            "                          <a href=\"player.php\"> <p class=\"card-text-center\" id=\"link"+ i+"\" style=\"padding: 1em;\" onclick=\"onClick("+ i+")\" >Title 1</p></a>\n" +
            "                          <a href=\"#\" id=\"vid"+i+"\" ><img  class=\"img-fluid\" src=\"\" alt=\"\"></a>\n" +
            "                          <p class=\"card-text-center\" id=\"channel"+i+ "\"style=\"padding: 1em;\">Title 1</p>\n" +
            "                      </div>\n" +
            "                  </div>";
        $( "#livestreams" ).append(full);
        var img = document.createElement("img");
// hij pakt hier het specefieke json variable van medium
        img.src = stream.preview.medium;
        img.width=270;
        img.height=180;

        var src = document.getElementById("vid"+i);
        src.appendChild(img);

        var titel= stream.channel.status;
        var titellink= titel.link(stream.channel.url);
        document.getElementById("link"+i).innerHTML = titel;



        var streamName= stream.channel.name;

        /*var streamlink= titel.link(stream.channel.name);*/
        document.getElementById("channel"+i).innerHTML = streamName ;



        i++;

        /*$("#control").prepend(str);*/


    });

}
function onClick(channelID){


    var name = document.getElementById("channel"+channelID).innerHTML;
    localStorage.setItem("channelName", name);
    var link = document.getElementById("link"+channelID).innerHTML;
    localStorage.setItem("link", link);



}


