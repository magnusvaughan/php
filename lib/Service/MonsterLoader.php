<?php

class MonsterLoader
{
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    /**
     * @return Ship[]
     */
    public function getMonsters() {


        $monstersData = $this->queryForMonsters();

        $monsters = array();

        foreach ($monstersData as $monsterData) {

            $monsters[] = $this->createMonsterFromData($monsterData);
        }

        return $monsters;

    }

    /**
     * @param $id
     * @return null|Monster
     */
    public function findOneById($id) {
        $pdo = $this->getPDO();
        $statement = $pdo->prepare('SELECT * FROM monster WHERE id = :id');
        $statement->execute(array('id' => $id));
        $monsterArray = $statement->fetch(PDO::FETCH_ASSOC);

        if(! $monsterArray) {
            return null;
        }

        return $this->createMonsterFromData($monsterArray);
    }

    private function createMonsterFromData(array $monsterData) {
        $monster = new Monster($monsterData['name']);
        $monster->setId($monsterData['id']);
        $monster->setPhysicalStrength($monsterData['physical_strength']);
        $monster->setFearFactor($monsterData['fear_factor']);
        $monster->setKillingPower($monsterData['killing_power']);
        $monster->setKillingPower($monsterData['horror_rating']);

        return $monster;
    }

    private function queryForMonsters() {
        $pdo = $this->getPDO();
        $statement = $pdo->prepare('SELECT * FROM monster');
        $statement->execute();
        $monstersArray = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $monstersArray;
    }

    /**
     * @return PDO
     */

    private function getPDO() {
        return $this->pdo;
    }
}