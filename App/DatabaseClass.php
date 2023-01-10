<?php

class DatabaseClass implements GetDatabaseDataInterface, AddToDatabaseDataInterface, UpdateDatabaseDataInterface{

    /**
     * Getting data from the specific JSON file
     */
    public function getDatabaseData(string $db_name){
        $dbData = file_get_contents($db_name);
        $dbDataArray = json_decode($dbData, true);
        return $dbDataArray;
    }

    /**
     * Adding data to the specific JSON file
     */
    public function addToDatabaseData(string $db_name, $data){
        file_put_contents($db_name, json_encode($data));
        return;
    }

    /**
     * Updating data in the specific JSON file
     */
    public function updateDatabaseData(string $db_name, $data){
        file_put_contents($db_name, json_encode($data));
        return;
    }
}