var httpRequest = new XMLHttpRequest();
var taal=localStorage.getItem("taal");

httpRequest.addEventListener('load', clipsLoaded);
httpRequest.open('GET', 'https://api.twitch.tv/kraken/streams/?game=Counter-Strike: Global Offensive&limit=24'+taal);

/*httpRequest.open('GET', 'https://api.twitch.tv/kraken/search/channels/?query=starcraft&limit=2');*/

httpRequest.setRequestHeader('Client-ID', 'rznqr4yntdrax4it3k23uyzmaaflpa');
httpRequest.setRequestHeader('Accept', 'application/vnd.twitchtv.v5+json');
httpRequest.send();

function clipsLoaded() {
    var controlDisplay = document.getElementById('p'),
        //Parses the JSon file and stopt hem in controlList
        controlList = JSON.parse(httpRequest.responseText);

    localStorage.setItem("game", "Counter-Strike: Global Offensive");
    /*    controlDisplay.innerHTML = JSON.stringify(controlList);*/
    i=1;
    //hij gaat rond de json file met een for each loop en check wat er in de tab streams zit
    controlList.streams.forEach(function(stream) {
        /*controlDisplay.innerHTML = stream.preview.medium;*/
        var full=" <div id=\"\"class=\"col-xl-3 col-lg-4 col-md-6 col-xs-12\">\n" +
            "\n" +
            "                    <div   class=\"card mb-4 h-60\">\n" +
            "                          <a href=\"player.php\"> <p class=\"card-text-center\" id=\"link"+ i+"\" style=\"padding: 1em;\" onclick=\"onClick("+ i+")\" >Title 1</p></a>\n" +
            "                          <a href=\"player.php\" id=\"vid"+i+"\" ><img  class=\"img-fluid\" src=\"\" alt=\"\"></a>\n" +
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
        document.getElementById("channel"+i).innerHTML = streamName;



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
function taalNL(){
    localStorage.setItem("taal", "&broadcaster_language=nl");
    location.reload()
}
function taalEN(){
    localStorage.setItem("taal", "&broadcaster_language=en");
    location.reload()
}