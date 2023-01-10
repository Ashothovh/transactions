<?php

interface UpdateDatabaseDataInterface{
    public function updateDatabaseData(string $db_name, $dataToSave);
}