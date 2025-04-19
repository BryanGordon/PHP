<?php 
  $name = 'Bryan';
  $output = "Hola $name";

  define('Global_Constant', 'Constante global');

  const APELLIDO =  'Gordon (Constante local)';

  $age = 56;
  $isDev = true;
  $isOld = $age > 40;
/*
  if ($isOld) {
    echo "<h2>Estas viejo </h2>";
  } else if ($isDev) {
    echo "<h2>Eres dev</h2>";
   } else {
    echo "<h2>Eres joven </h2>";
  }
*/

/*
$outputAge = $isOld 
  ? "Eres viejo"
  : "Eres joven" ;
*/

$outputAge = match(true) {
  $age < 10 => "Eres un niño",
  $age < 18 => "Eres un adolescente",
  $age === 18 => "Eres mayor de edad",
  $age < 40 => "Eres un adulto joven",
  default => "Te vas a jubilar pronto"
};

$bestLanguages = ["PHP", "JavaScript", "Python", 1];
$bestLanguages[] = "Java"; // Agrega un elemento al array
$bestLanguages[3] = "TypeScript"; // Reemplaza un elemento del array

// Forma de crear un array con diferente index
$person = [
  "name" => "Bryan",
  "age" => 26,
  "isDev" => true,
  "languages" => ["PHP", "JavaScript", "TypeScript"]
];

$person["languages"][] = "Java";

?>

<?php if ($isOld) : ?> 
  <h2>Esta viejo</h2>
<?php elseif ($isDev) : ?> 
  <h2>Eres dev</h2>
<?php else : ?> 
  <h2>Eres joven</h2>
<?php endif ;?> 

<h1>
  <?= $output ?>
</h1>
<h2><?= APELLIDO ?></h2>
<span><?= Global_Constant ?></span>
<h2><?= $outputAge ?></h2>

<ul>
  <?php foreach($bestLanguages as $key => $languages) : ?>
    <li>El mejor lenguaje es: <?= $key . "  " . $languages ?></li>
  <?php endforeach; ?>
</ul>

<style>
  :root {
    color-scheme: light dark;
  }

  body {
    display: grid;
    place-content: center;
  }
</style>