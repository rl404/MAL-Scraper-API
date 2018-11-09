<?php

// Return json file
header('Content-type:application/json;charset=utf-8');

ini_set('max_execution_time', 0);

// Use the Mal-Scraper library
require "vendor/autoload.php";
use MalScraper\MalScraper;

$myMalScraper = new MalScraper([
    'enable_cache' => true,
    'cache_time' => 3600,
    'to_api' => true
]);

// Get the parameter
$method = isset($_GET['m']) ? $_GET['m'] : '';

$type = isset($_GET['t']) ? $_GET['t'] : '';
$id = isset($_GET['id']) ? $_GET['id'] : '';

$page = isset($_GET['p']) ? $_GET['p'] : 1;

$query = isset($_GET['q']) ? $_GET['q'] : '';

$year = isset($_GET['y']) ? $_GET['y'] : date('Y');
$season = isset($_GET['s']) ? $_GET['s'] : getCurrentSeason();

$user = isset($_GET['u']) ? $_GET['u'] : '';
$status = isset($_GET['st']) ? $_GET['st'] : 7;

// Call the requested method
switch ($method) {

// General Method ----------
	case 'info':
		if ($type && $id) {
			$result = $myMalScraper->getInfo($type,$id);
			print_r($result);
		} else {
			print_r(paramError());
		}
		break;
	case 'character':
		if ($id) {
			$result = $myMalScraper->getCharacter($id);
			print_r($result);
		} else {
			print_r(paramError());
		}
		break;
	case 'people':
		if ($id) {
			$result = $myMalScraper->getPeople($id);
			print_r($result);
		} else {
			print_r(paramError());
		}
		break;
	case 'studio-producer':
	case 'studioproducer':
		if ($id) {
			$result = $myMalScraper->getStudioProducer($id,$page);
			print_r($result);
		} else {
			print_r(paramError());
		}
		break;
	case 'magazine':
		if ($id) {
			$result = $myMalScraper->getMagazine($id,$page);
			print_r($result);
		} else {
			print_r(paramError());
		}
		break;
	case 'genre':
		if ($type && $id) {
			$result = $myMalScraper->getGenre($type,$id,$page);
			print_r($result);
		} else {
			print_r(paramError());
		}
		break;

// Additional Method ----------
	case 'character-staff':
	case 'characterstaff':
		if ($type && $id) {
			$result = $myMalScraper->getCharacterStaff($type,$id);
			print_r($result);
		} else {
			print_r(paramError());
		}
		break;
	case 'stat':
		if ($type && $id) {
			$result = $myMalScraper->getStat($type,$id);
			print_r($result);
		} else {
			print_r(paramError());
		}
		break;
	case 'picture':
		if ($type && $id) {
			$result = $myMalScraper->getPicture($type,$id);
			print_r($result);
		} else {
			print_r(paramError());
		}
		break;
	case 'character-picture':
	case 'characterpicture':
		if ($id) {
			$result = $myMalScraper->getCharacterPicture($id);
			print_r($result);
		} else {
			print_r(paramError());
		}
		break;
	case 'people-picture':
	case 'peoplepicture':
		if ($id) {
			$result = $myMalScraper->getPeoplePicture($id);
			print_r($result);
		} else {
			print_r(paramError());
		}
		break;

// List ----------
	case 'all-anime-genre':
	case 'allanimegenre':
		$result = $myMalScraper->getAllAnimeGenre();
		print_r($result);
		break;
	case 'all-manga-genre':
	case 'allmangagenre':
		$result = $myMalScraper->getAllMangaGenre();
		print_r($result);
		break;
	case 'all-studio-producer':
	case 'allstudioproducer':
		$result = $myMalScraper->getAllStudioProducer();
		print_r($result);
		break;
	case 'all-magazine':
	case 'allmagazine':
		$result = $myMalScraper->getAllMagazine();
		print_r($result);
		break;

// Search ----------
	case 'search-anime':
	case 'searchanime':
		if ($query) {
			$result = $myMalScraper->searchAnime($query,$page);
			print_r($result);
		} else {
			print_r(paramError());
		}
		break;
	case 'search-manga':
	case 'searchmanga':
		if ($query) {
			$result = $myMalScraper->searchManga($query,$page);
			print_r($result);
		} else {
			print_r(paramError());
		}
		break;
	case 'search-character':
	case 'searchcharacter':
		if ($query) {
			$result = $myMalScraper->searchCharacter($query,$page);
			print_r($result);
		} else {
			print_r(paramError());
		}
		break;
	case 'search-people':
	case 'searchpeople':
		if ($query) {
			$result = $myMalScraper->searchPeople($query,$page);
			print_r($result);
		} else {
			print_r(paramError());
		}
		break;
	case 'search-user':
	case 'searchuser':
		if ($query) {
			$result = $myMalScraper->searchUser($query,$page);
			print_r($result);
		} else {
			print_r(paramError());
		}
		break;

// Seasonal ----------
	case 'season':
		$result = $myMalScraper->getSeason($year,$season);
		print_r($result);
		break;

// Top List ----------
	case 'top-anime':
	case 'topanime':
		$type = $type ? $type : 0;
		$result = $myMalScraper->getTopAnime($type, $page);
		print_r($result);
		break;
	case 'top-manga':
	case 'topmanga':
		$type = $type ? $type : 0;
		$result = $myMalScraper->getTopManga($type, $page);
		print_r($result);
		break;

// User ----------
	case 'user':
		if ($user) {
			$result = $myMalScraper->getUser($user);
			print_r($result);
		} else {
			print_r(paramError());
		}
		break;
	case 'user-friend':
	case 'userfriend':
		if ($user) {
			$result = $myMalScraper->getUserFriend($user);
			print_r($result);
		} else {
			print_r(paramError());
		}
		break;
	case 'user-history':
	case 'userhistory':
		if ($user) {
			$result = $myMalScraper->getUserHistory($user,$type);
			print_r($result);
		} else {
			print_r(paramError());
		}
		break;
	case 'user-list':
	case 'userlist':
		if ($user) {
			$type = $type ? $type : 'anime';
			$result = $myMalScraper->getUserList($user,$type,$status);
			print_r($result);
		} else {
			print_r(paramError());
		}
		break;
	case 'user-cover':
	case 'usercover':
		if ($user) {
			header("Content-Type: text/css");

			$type = $type ? $type : 'anime';
			$query = $query ? $query : false;

			$result = $myMalScraper->getUserCover($user,$type,$query);
			$result = json_decode($result, true);
			$result = $result['data'];

			print_r($result);
		} else {
			print_r(paramError());
		}
		break;

// Secret ----------
	case 'auto-cover':
		header("Content-Type: text/css");

		$user_url = $_SERVER['HTTP_REFERER'];
		$user_url = str_replace('https://myanimelist.net', '', $user_url);

		preg_match("/\/.+(list)\//", $user_url, $user_type);
		$type = str_replace(['/','list'], '', $user_type[0]);

		$user_url = str_replace(['/animelist/','/mangalist/'], '', $user_url);
		$user_url = preg_replace('/\?+.+/', '', $user_url);

		$user = $user_url;
		$type = $type ? $type : 'anime';
		$query = $query ? $query : false;

		$result = $myMalScraper->getUserCover($user,$type,$query);
		$result = json_decode($result, true);
		$result = $result['data'];

		print_r($result);
		break;
	default:
		print_r(paramError(true));
		break;
}

// Return error parameter
function paramError($a=false)
{
	if ($a) {
		header("HTTP/1.1 404");
		$result['status'] = 404;
		$result['status_message'] = 'Method not found';
		$result['data'] = [];
	} else {
		header("HTTP/1.1 400");
		$result['status'] = 400;
		$result['status_message'] = 'Bad Request';
		$result['data'] = [];
	}

	return json_encode($result, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

}

// Get current season (spring,summer,fall,winter)
function getCurrentSeason()
{
	$day = new DateTime();

	//  Days of spring
	$spring_starts = new DateTime("April 1");
	$spring_ends   = new DateTime("June 30");

   	//  Days of summer
	$summer_starts = new DateTime("July 1");
	$summer_ends   = new DateTime("September 30");

   	//  Days of autumn
	$autumn_starts = new DateTime("October 1");
	$autumn_ends   = new DateTime("December 31");

   	//  If $day is between the days of spring, summer, autumn, and winter
	if( $day >= $spring_starts && $day <= $spring_ends ) :
		$season = "spring";
	elseif( $day >= $summer_starts && $day <= $summer_ends ) :
		$season = "summer";
	elseif( $day >= $autumn_starts && $day <= $autumn_ends ) :
		$season = "fall";
	else :
		$season = "winter";
	endif;

	return $season;
}
?>