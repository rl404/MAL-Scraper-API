# MAL-Scraper-API     <a href="https://php.net/"><img src="https://img.shields.io/badge/php-%3E%3D5.4-8892BF.svg"></a> <a href="https://styleci.io/repos/152761246"><img src="https://styleci.io/repos/152761246/shield?branch=master&style=flat" alt="StyleCI Status"></a> <a href="https://app.codacy.com/app/rl404/MAL-Scraper-API?utm_source=github.com&utm_medium=referral&utm_content=rl404/MAL-Scraper-API&utm_campaign=Badge_Grade_Dashboard"><img src="https://api.codacy.com/project/badge/Grade/0b1813be20634d6f972866f64c079687" alt="Codacy Status"></a> <a href="https://scrutinizer-ci.com/g/rl404/MAL-Scraper-API/?branch=master"><img src="https://scrutinizer-ci.com/g/rl404/MAL-Scraper-API/badges/quality-score.png?b=master" alt="Scrutinizer Score"></a> <a href="https://packagist.org/packages/rl404/mal-scraper-api"><img src="https://poser.pugx.org/rl404/mal-scraper-api/license" alt="License"></a>

> Easy setup, Easy use, Easy life

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
- Get list of most favorited character and people (pagination supported)
- Get information of user profile, friends, history, and anime/manga list
- Caching (using [Simple-PHP-Cache library](https://github.com/cosenary/Simple-PHP-Cache)) (data cached for 1 day as default)
- Return with HTTP response
- (Bonus) Get all anime/manga cover from user list
- (Another bonus) htaccess included for easier call

_More will be coming soon..._

## Installation
1. `git clone https://github.com/rl404/MAL-Scraper-API.git`
2. `composer install`
3. That's it.

#### Dependencies
- PHP 5.4+
- rl404/mal-scraper >= 1.3.0

## Usage
### General Methods
- **Info** - Get anime or manga general information.
  - `HOST/info?t=anime&id=1`
  - `HOST/info?t=manga&id=1`
- **Character** - Get anime or manga character information.
  - `HOST/character?id=1`
- **People** - Get person information.
  - `HOST/people?id=1`
- **Studio/Producer** - Get studio or producer information.
  - `HOST/studio-producer?id=1`
  - `HOST/studioproducer?id=1`
- **Magazine** - Get list of books published by the magazine.
  - `HOST/magazine?id=1`
- **Genre** - Get list of anime or manga that has the genre.
  - `HOST/genre?t=anime&id=1`
  - `HOST/genre?t=manga&id=1`
### Additional Methods
- **Character and Staff** - Get complete list of characters and staffs involved in anime or manga.
  - `HOST/character-staff?t=anime&id=1`
  - `HOST/characterstaff?t=manga&id=1`
- **Statistics** - Get detail statistics information of anime or manga.
  - `HOST/stat?t=anime&id=1`
  - `HOST/stat?t=manga&id=1`
- **Pictures** - Get list of additional anime or manga pictures.
  - `HOST/picture?t=anime&id=1`
  - `HOST/picture?t=manga&id=1`
- **Character Pictures** - Get list of additional character pictures.
  - `HOST/character-picture?id=1`
  - `HOST/characterpicture?id=1`
- **People Pictures** - Get list of additional people pictures.
  - `HOST/people-picture?id=1`
  - `HOST/peoplepicture?id=1`
### List Methods
- **All Anime Genre** - Get list of all anime genre.
  - `HOST/all-anime-genre`
  - `HOST/allanimegenre`
- **All Manga Genre** - Get list of all manga genre.
  - `HOST/all-manga-genre`
  - `HOST/allmangagenre`
- **All Studio and Producer** - Get list of all studio and producer.
  - `HOST/all-studio-producer`
  - `HOST/allstudioproducer`
- **All Magazine** - Get list of all magazine.
  - `HOST/all-magazine`
  - `HOST/allmagazine`
### Search Methods
- **Search Anime** - Get list of anime search result.
  - `HOST/search-anime?q=clannad`
  - `HOST/searchanime?q=clannad`
- **Search Manga** - Get list of manga search result.
  - `HOST/search-manga?q=berserk`
  - `HOST/searchmanga?q=berserk`
- **Search Character** - Get list of character search result.
  - `HOST/search-character?q=luffy`
  - `HOST/searchcharacter?q=luffy`
- **Search People** - Get list of people search result.
  - `HOST/search-people?q=hana`
  - `HOST/searchpeople?q=hana`
- **Search User** - Get list of user search result.
  - `HOST/search-user?q=rl404`
  - `HOST/searchuser?q=rl404`
### Seasonal Methods
- **Season** - Get list of anime of the season.
  - `HOST/season`
  - `HOST/season?y=2018`
  - `HOST/season?s=spring`
  - `HOST/season?s=summer`
  - `HOST/season?s=winter`
  - `HOST/season?s=fall`
  - `HOST/season?s=spring&y=2017`
### Top List Methods
- **Top Anime** - Get list of top anime.
  - `HOST/top-anime`
  - `HOST/topanime`
  - `HOST/topanime?p=2`
  - `HOST/topanime?t=2`
  - `HOST/topanime?t=3&p=4`
- **Top Manga** - Get list of top manga.
  - `HOST/top-manga`
  - `HOST/topmanga`
  - `HOST/topmanga?p=2`
  - `HOST/topmanga?t=2`
  - `HOST/topmanga?t=3&p=4`
- **Top Character** - Get list of most favorited character.
  - `HOST/top-character`
  - `HOST/topcharacter`
  - `HOST/topcharacter?p=2`
- **Top People** - Get list of most favorited people.
  - `HOST/top-people`
  - `HOST/toppeople`
  - `HOST/toppeople?p=2`
### User Methods
- **User** - Get user profile information
  - `HOST/user?u=rl404`
- **User Friends** - Get list of user's friends.
  - `HOST/user-friend?u=r404`
  - `HOST/userfriend?u=rl404`
- **User History** - Get list of user's anime or manga update history.
  - `HOST/user-history?u=rl404`
  - `HOST/userhistory?u=rl404&t=anime`
  - `HOST/userhistory?u=rl404&t=manga`
- **User List** - Get list of user's anime or manga.
  - `HOST/user-list?u=rl404`
  - `HOST/userlist?u=rl404&t=anime`
  - `HOST/userlist?u=rl404&t=manga`
  - `HOST/userlist?u=rl404&st=1`
  - `HOST/userlist?u=rl404&t=manga&st=2`
- **User List Cover** - Get CSS file for anime or manga list cover. Please go [here](https://github.com/rl404/MAL-Scraper/wiki/getUserCover()) for more info. And don't forget to convert your style to url using [this](https://www.url-encode-decode.com/).
  - `HOST/user-cover?u=rl404`
  - `HOST/usercover?u=rl404&t=manga`
  - `HOST/usercover?u=rl404&q=%23more%7Bid%7D+.borderRBL+div%7Bbackground-image%3Aurl%28%7Burl%7D%29%7D`

For more information about the methods, params, and output, you can read the [code](https://github.com/rl404/MAL-Scraper-API/blob/master/index.php) by yourself (it should be easy to read and understand) or you can go to the [wiki](https://github.com/rl404/MAL-Scraper/wiki) library.

## Try it yourself
If you want to try, use `mal-scraper.000webhostapp.com` or `mal-scraper.epizy.com/api` as the host.

## Disclamer
All data (including anime, manga, people, etc) and MyAnimeList logos belong to their respective copyrights owners. Mal-Scraper does not have any affliation with content providers.

## License
MIT License

Copyright (c) rl404
