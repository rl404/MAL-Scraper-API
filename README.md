# MAL-Scraper-API

_Mal-Scraper-API_ is a very easy and simple REST API setup to get [MyAnimeList.net](https://myanimelist.net/) data by using my [Mal-Scraper](https://github.com/rl404/MAL-Scraper/) as data parser.

### Features 
- Get general information of anime, manga, charater (from anime and manga), or people (voice actor, author, staff, etc)
- Get additional information of anime or manga character and staff, statistic and score, or picture
- Get list of anime or manga of selected studio/producer, magazine, or genre
- Get list of all anime or manga genre, anime studio/producer or manga magazine
- Get list of character and staff involved in an anime or manga
- Get result of searching, anime, manga, character, people or user (pagination supported)
- Get seasonal anime
- Get list of top anime from various categories (all, airing, upcoming, etc) (pagination supported)
- Get list of top manga from various categories (all, manga, novel, etc) (pagination supported)
- Get information of user profile, friends, history, and anime/manga list
- Caching (using [Simple-PHP-Cache library](https://github.com/cosenary/Simple-PHP-Cache)) (data cached for 1 day as default)
- Return with HTTP response
- (Bonus) Get all anime/manga cover from user list
- (Another bonus) htaccess included for easier call

_More will be coming soon..._

## Installation
1. `git clone https://github.com/rl404/MAL-Scraper-API.git` in your local computer
2. Go inside and `composer install`
3. Find PHP web host somewhere.
4. Upload everything inside `MAL-Scraper-API` folder to your host. 
5. That's it.

#### Dependencies
- PHP 5.4+

## Usage
`HOST` is your hostname.
### General Methods
#### Info
Get anime or manga general info.

Parameter | Description
:---: | ---
t | Info type. Either `anime` or `manga`
id | Anime or manga ID

Example: `HOST/info?t=anime&id=1`

#### Character
Get anime or manga character.

Parameter | Description
:---: | ---
id | Anime or manga character ID

Example: `HOST/character?id=1`

If you want to try, use `mal-scraper.000webhostapp.com` as the host.


## Disclamer
All data (including anime, manga, people, etc) and MyAnimeList logos belong to their respective copyrights owners. Mal-Scraper does not have any affliation with content providers.

## License
MIT License

Copyright (c) rl404
