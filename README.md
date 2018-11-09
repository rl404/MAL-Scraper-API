# MAL-Scraper-API
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

If you want to try, use `mal-scraper.000webhostapp.com` as the host.


## Disclamer
All data (including anime, manga, people, etc) and MyAnimeList logos belong to their respective copyrights owners. Mal-Scraper does not have any affliation with content providers.

## License
MIT License

Copyright (c) rl404
