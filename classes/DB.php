<?php

class DB
{

    function execute($query): array|null
    {
        $db = new SQLite3('./data/data.db');
        $result = $db->query($query);

        if ($result) {
            $all = [];
            while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
                $all[] = $row;
            }
            $db->close();
            return $all;
        }

        $db->close();
        return null;
    }

}
