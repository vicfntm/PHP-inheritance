<?php
require 'Cat.php';

$cat = new Cat('garfield');

echo "getName implementation: " . $cat->getName();
echo '<br>';

echo 'meow implementaion: ' . $cat->meow();
