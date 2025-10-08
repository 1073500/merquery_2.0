---------------------+
Dag 1: 08-10-25
    |
-----
    |
    |
    |
---------------------+
Opdracht - User Stories
------------------------------->
User Story:
Als astronomie fanaat, wil ik een moderne webapplicatie waar ik de data van sterren en planeten op nationaal niveau kan opzoeken en delen, zodat ik meer te weten kom over wat er in mijn land te zien is aan sterren en planeten.
------------------------------------------------------------------------+
Stakeholders

Directe Stakeholders:
Astronomie fanaten

Indirecte Stakeholders:
Onderzoekers
Astronomen
-------------------------------------------------------------------------------+
Taken:
- User story M
- ERD M
- Wireframes (homepage, detailpagina, login, account) C
- Routes M
- Models M
- Controllers M
- Views M
- Migrations M
- Eloquent M
- Database opzetten M
- CRUD M
- Register M
- Login M
- Admin M
- Validatie M
- Search M
- Filter M
- Beveiliging M
- Schakelen van status met button in lijst (kijk in pdf) M
- Diepere validatie (kijk in pdf) M
- Styling S
- Data ophalen van API (astronomie data) S
    Astronomie API's:
    - https://api.le-systeme-solaire.net/en/
    - https://api.nasa.gov/
    Geolocatie API:
    Overige API's:
  
Taken rank:
*Must have!
*Should have
*Could have, maybe
*Won't have this time, maybe later
-------------------------------------------------------------------------------+
Oprdracht - ERD
 Link Miro: https://miro.com/welcomeonboard/ait1M3JYY09OSXRlamJVUjRmWnphUUs2ZVQ4N3FWRndLWFhqbENySld0blFpbm9iRE5SNzZDSzkzSVIvWFlWd3FscFA0Vm1qa2JxTUl6WDdOZ0EyNXhHM3MwSUIrb3NKazJjUzZSZkVjU1p0anlybWRCanduTmkwc3o2Q2ZHcUtBS2NFMDFkcUNFSnM0d3FEN050ekl3PT0hdjE=?share_link_id=199881130666
-------------------------------------------------------------------------------+
*
ctrl c: stop dev process
ctrl c ^: start dev process
{{}} <- html entity
-------------------------------------------------------------------------------+
Tussenopdracht - les 3 > route en view

voorbeeld route en view:

//get haalt de pagina op

Route::get('/about-us', function() {
return 'This page is about us';
});

//maak een view aan
//geet text mee door een variabele te maken
//zet de variabele in een array

Route::get('/contactpagina', function() {
$contact = 'Dit is de contactpagina, bereik ons op: xxx';
return view('contactpagina', ['contact' => $contact]);
});

voorbeeld controller: 

//controller aanmaken
php artisan make:controller DeNaam (UpperCamelCase)

//route naar controller (vb)
Route::get('blogs', [\App\Http\Controllers\BlogController::class, 'index']);

//function in controller (string meegeven)
class BlogController extends Controller
{
public function index()
{
return 'My blogs';
}
}
