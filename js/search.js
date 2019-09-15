


//Zoekt kanaal op Twitch
function searchOption(e) {
    if (e.keyCode == 13) {
        var x = document.getElementById("myInput").value;
        localStorage.setItem("searchQuery", x);

        window.location.href = "http://localhost:63342/VodafoneZiggo_Esports/search.php?_ijt=nlnh72arjmbtsfl5anan2qdeen";
    }






}
