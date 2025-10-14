Merquery 2.0
=================
Studentnummer: 1073500
----------------------------------------------------------------+
Linkjes:
Link GitHub: https://github.com/1073500/merquery_2.0.git
Link Trello: https://trello.com/b/8u1MDu5d
Link DrawSQL: https://drawsql.app/teams/1073500/diagrams/merquery-2-0
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
User Stories:
*Als astronomie fanaat, *wil ik een moderne webapplicatie waar ik de data van sterren en planeten op nationaal niveau kan opzoeken en delen, *zodat ik meer te weten kom over wat er in mijn land te zien is aan sterren en planeten.
*Als gebruiker wil ik type sterren filteren op zijn eigenschappen, zodat ik snel kan vinden wat ik zoek.
*Als gebruiker wil ik sterren en planeten kunnen zoeken op naam, zodat ik snel kan vinden.
*Als gebruiker wil ik dat al mijn data veilig is, zodat ik me geen zorgen hoef te maken over mijn privacy.
Als gebruiker wil ik met de geolocatie van mijn apparaat sterren en planeten in mijn omgeving kunnen vinden, zodat ik weet wat ik kan zien.
*Als gebruiker wil ik een account kunnen aanmaken, waarbij ik mijn voorkeuren kan opslaan.
------------------------------------------------------------------------+
Stakeholders

Directe Stakeholders:
Astronomie fanaten

Indirecte Stakeholders:
Onderzoekers
Astronomen
-------------------------------------------------------------------------------+
Taken:

- User story M V
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
- Agenda W
- Tags W
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

*in web.php website routes zetten/aanmaken
-------------------------------------------------------------------------------+
Dag 2: 13-10-25 
-------
      |
-------
|
-------
---------------------+-------------------------------------------------------------------------------+
Oprdracht les 3 - ERD
-------------------------------------------------------------------------------+
Dag 3: 14-10-25, les 4
-------
      |
-------
      |
-------
---------------------+-------------------------------------------------------------------------------+
layouts en components maken.
