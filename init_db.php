<?php

/*
 * SETTINGS!
 */
$databaseName = 'php_horror_trumps';
$databaseUser = 'admin';
$databasePassword = 'admin';

/*
 * CREATE THE DATABASE
 */
$pdoDatabase = new PDO('mysql:host=localhost', $databaseUser, $databasePassword);
$pdoDatabase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdoDatabase->exec('CREATE DATABASE IF NOT EXISTS php_horror_trumps');

/*
 * CREATE THE TABLE
 */
$pdo = new PDO('mysql:host=localhost;dbname='.$databaseName, $databaseUser, $databasePassword);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// initialize the table
$pdo->exec('DROP TABLE IF EXISTS monster;');

$pdo->exec('CREATE TABLE `monster` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar (255) COLLATE utf8mb4_unicode_ci NOT NULL,
 `physical_strength` int(4) COLLATE utf8mb4_unicode_ci NOT NULL,
 `fear_factor` int(4) NOT NULL,
 `killing_power` int(4) NOT NULL,
 `horror_rating` int(4) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci');

/*
 * INSERT SOME DATA!
 */
$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Wolfman", 78, 68, 73, 70)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("The Beast", 87, 77, 82, 98)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Colossus", 90, 80, 87, 71)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Thor", 100, 90, 97, 68)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("The Slime Creature", 71, 61, 68, 86)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("The Living Skull", 68, 58, 63, 89)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Mistress Vampire", 70, 60, 65, 87)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Frankenstein", 85, 75, 82, 75)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Alien Creature", 68, 58, 65, 97)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Fire Demon", 71, 61, 66, 77)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Creature from the Black Lagoon", 76, 66, 73, 79)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Cyclops", 84, 74, 79, 74)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Zetan Priest", 94, 84, 91, 95)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Death", 99, 89, 95, 100)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("The Jailer", 69, 59, 66, 69)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Devil Priest", 92, 82, 89, 92)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Killer Rat", 70, 60, 67, 79)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Zoltan", 82, 72, 77, 84)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Lizard Man", 83, 73, 80, 81)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Martian Warrior", 80, 70, 75, 72)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Terror of the Deep", 77, 67, 72, 72)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Venusian Death Cell", 79, 69, 74, 98)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("The Mummy", 86, 76, 81, 80)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("The Fiend", 81, 71, 78, 80)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Talon", 72, 62, 67, 76)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Dr. Syn", 73, 63, 68, 73)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("The Livingg Gargoyle", 72, 62, 69, 85)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("The Sorcerer", 75, 65, 72, 83)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Diablo", 74, 64, 69, 78)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Hunchback of Notre Dame", 75, 65, 72, 68)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("High Priestess of Zoltan", 69, 59, 66, 82)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Creature from Outer Space", 79, 69, 76, 78)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("King Kong", 100, 90, 97, 70)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Lord of Death", 89, 79, 86, 83)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Phantom of the Opera", 77, 67, 74, 87)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("The Thing", 91, 81, 88, 85)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("The Risen Dead", 93, 83, 88, 93)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("The Freak", 94, 84, 91, 95)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Ape Man", 81, 71, 76, 69)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("The Sorceress", 66, 56, 61, 91)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Vampire Bat", 45, 80, 60, 84)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Incredible Melting Man", 80, 70, 77, 88)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Circus of Death", 95, 85, 90, 67)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Godzilla", 98, 88, 95, 77)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Zetan Warlord", 98, 88, 95, 92)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("The Maggot", 76, 66, 71, 86)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Dracula", 91, 81, 86, 100)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("The Mad Magician", 73, 63, 68, 65)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("The Mad Axeman", 89, 79, 84, 75)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Granite Man", 92, 82, 89, 71)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Cannibal", 93, 83, 88, 93)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Madman", 74, 64, 69, 73)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Werewolf", 88, 78, 85, 76)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("The Hangman", 83, 73, 78, 88)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("The Prince of Darkness", 97, 87, 94, 96)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Headhunter", 88, 78, 85, 91)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("The Ghoul", 78, 68, 73, 82)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Two-Headed Monster", 91, 81, 88, 89)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Skeleton", 65, 55, 62, 90)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("The Gorgon", 87, 77, 84, 82)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Gargantua", 99, 89, 94, 66)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Fu Manchu", 84, 74, 79, 90)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("Man-Eating Plant", 96, 86, 93, 94)'
);

$pdo->exec('INSERT INTO monster
    (name, physical_strength, fear_factor, killing_power, horror_rating) VALUES
    ("The Executioner", 82, 72, 77, 74)'
);







echo 'Monsters Loaded!';
