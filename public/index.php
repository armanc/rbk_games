 <?php 
require '../vendor/autoload.php';

$app = new \Slim\Slim(array(
    'debug' => true,
    'view' => new \Slim\Views\Twig(),
    'templates.path' => '../templates',
));

$view = $app->view();
$view->parserOptions = array(
    'debug' => true,
);
$view->parserExtensions = array(
    new \Slim\Views\TwigExtension(),
);

$app->get('/', function () use ($app) {
    $app->render('index.html.twig');
})->name('home');

$app->get('/game/', function () use ($app) {
    $app->render('clan_wars.html.twig');
})->name('game');

$app->get('/news/', function () use ($app) {
    $app->render('news.html.twig');
})->name('news');

$app->run();