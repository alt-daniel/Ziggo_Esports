# Ziggo E-sports

Your central platform to catch up with gaming streams and matches!

## Getting Started

These instructions will get you a copy of the project up and running on your local machine. Whenever you need to edit or insert a piece of code, you can do this inside the arrows <>.

### Prerequisites

What things you need to install the software and how to install them

```
-MySQL database
-A server
-A Twitch client key
-A PandaScore API key

```

### Database

Use your database of choice. And note down this info:

```
-Server name(URL or "localhost")
-Database username
-Database password
-Database name
```

Replace this info in dbh.inc.php, on these lines:
```
$dbServername = "<>";
$dbUsername = "<>";
$dbPassword = "<>";
$dbName = "<>";
```

For the Database structure, you can use [this](https://drive.google.com/open?id=1k-GtRMfeZj_ELCUndOH_kI170qZ9Wqv1)

## Keys

* [Twitch](https://dev.twitch.tv/docs/v5/#getting-a-client-id) - Twitch client key

Edit the key onto this line:
```
httpRequest.setRequestHeader('Client-ID', '<>');
```
In these files:
```
-csgo.js
-dota2.js
-league.js
-overwatch.js
-fifa.js
-hearthstone.js
-live.js
-index-bekeken.js
```

* [PandaScore](https://pandascore.co/users/sign_up) - PandaScore API key

Edit the key onto this line:
```
var requestString = ('https://api.pandascore.co/' + modifier + '?token=<>' + ';page[size]=' + amount);
var requestString = ('https://api.pandascore.co/' + modifier + '?token=<>');
```
In these files:
```
-events.js
-match_details.js
```

## Server

For running it locally, we recommend [XAMPP](https://www.apachefriends.org/index.html). 

Install XAMPP in your preferred location. In your IDE, select the PHP interpreter in your XAMPP folder. Start the Apache server.

## Final

If everything went well, you should now have the project running without a hitch. If not, retrace your steps.

## Built With

* [Bootstrap 4](https://getbootstrap.com/docs/4.0/getting-started/introduction/) - Web framework
* [Font Awesome](https://fontawesome.com/) - Icons
* [Twitch API](https://dev.twitch.tv/docs/v5/#introduction) - Getting livestreams
* [PandaScore API](https://pandascore.co/) - Getting E-sports events
* [Popper](https://popper.js.org/) - Tooltips
* [Holder](http://holderjs.com/) - Image placeholders 
* [jQuery](https://jquery.com/) - Javascript library

## Authors

* **Michael Verdegaal**
* **Sofyan Bouda**
* **Daniel Altorf**


