<?php 

namespace App\Models;

use App\Core\Database;
use PDO;

class Note
{
    public static function all()
    {
        $db = Database::getInstance();
        return $db->query("SELECT * FROM notes")->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function find($id)
    {
        $db = Database::getInstance();
        $stmt = $db->prepare("SELECT * FROM notes WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function create($data)
    {
        $db = Database::getInstance();
        $stmt = $db->prepare("INSERT INTO notes (user_id, category, access_types, content) VALUES (?, ?, ?, ?)");
        return $stmt->execute([
            $data['user_id'],
            $data['category'],
            $data['access_types'],
            $data['content']
        ]);
    }
}
