<? 
namespace App\Database\Models;

use PDO;
use Throwable;

class Product {
    public function getProduct(PDO $connection){
        try {
           
        } catch ( Throwable $e) {
           var_dump($e->getMessage());
        }
    }

    public function searchProducts(){}
}