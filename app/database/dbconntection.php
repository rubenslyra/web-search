<?

namespace App\Database;

class DBConnection
{
    private static ?PDO $connect = null;

    public function getConnect()
    {
        if(!self::$connect) {
            self::$connect = new PDO('mysql:host=localhost;dbname=busca_db', 'root', '', [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
            ]);
        }

        return self::$connect;
    }
}