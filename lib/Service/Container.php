<?php

class Container {

    private $configuration;

    private $pdo;

    private $monsterLoader;


    public function __construct(array $configuration)  {
        $this->configuration = $configuration;
    }

    /**
     * @return PDO
     */

    public function getPDO() {

        if($this->pdo === null) {
            $this->pdo = new PDO(
                $this->configuration['db_dsn'],
                $this->configuration['db_user'],
                $this->configuration['db_pass']
            );
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return $this->pdo;
    }

    /**
     * @return ShipLoader
     */
    public function getMonsterLoader() {
        if($this->monsterLoader === null) {
            $this->monsterLoader = new MonsterLoader($this->getPDO());
        }
        return $this->monsterLoader;
    }



}