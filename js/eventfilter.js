var lollist = document.getElementsByClassName('col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 lol');
var dotalist = document.getElementsByClassName('col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 dota2');
var owlist = document.getElementsByClassName('col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 ow');

function showAll() {
    for (i = 0; i < dotalist.length; i++) {
        document.getElementById(dotalist[i].id).style.display = '';
    }
    for (i = 0; i < owlist.length; i++) {
        document.getElementById(owlist[i].id).style.display = '';

    }
    for (i = 0; i < lollist.length; i++) {
        document.getElementById(lollist[i].id).style.display = '';

    }
}

function showLol() {
    for (i = 0; i < dotalist.length; i++) {
        document.getElementById(dotalist[i].id).style.display = 'none';
    }
    for (i = 0; i < owlist.length; i++) {
        document.getElementById(owlist[i].id).style.display = 'none';

    }
    for (i = 0; i < lollist.length; i++) {
        document.getElementById(lollist[i].id).style.display = '';

    }
}

function showOw() {
    for (i = 0; i < dotalist.length; i++) {
        document.getElementById(dotalist[i].id).style.display = 'none';
    }
    for (i = 0; i < owlist.length; i++) {
        document.getElementById(owlist[i].id).style.display = '';

    }
    for (i = 0; i < lollist.length; i++) {
        document.getElementById(lollist[i].id).style.display = 'none';

    }
}

function showDota2() {
    for (i = 0; i < dotalist.length; i++) {
        document.getElementById(dotalist[i].id).style.display = '';
    }
    for (i = 0; i < owlist.length; i++) {
        document.getElementById(owlist[i].id).style.display = 'none';

    }
    for (i = 0; i < lollist.length; i++) {
        document.getElementById(lollist[i].id).style.display = 'none';

    }
}