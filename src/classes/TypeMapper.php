<?php

class TypeMapper extends Mapper
{
    public function getTypes() {
        $sql = "SELECT id, type
            from types";
        $stmt = $this->db->query($sql);

        $results = [];
        while($row = $stmt->fetch()) {
            $results[] = new SingleTypeData($row);
        }
        return $results;
    }

    public function getTypeById($id) {
        $sql = "SELECT id, type
            from types where id = :type_id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(["type_id" => $id]);

        return new SingleTypeData($stmt->fetch());
    }
}

