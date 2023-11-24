<?

require_once __DIR__ . '/../vendor/autoload.php';

use App\Database\DBConnection;
use App\Database\Models\Product;


$db = new DBConnection();
$connection = $db->getConnect();

$product = new Product();
$products = $product->getProduct(DBConnection::getConnect());


isset($_GET['busca']) ? $busca = $_GET['busca'] : $busca = '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Busca comm PHP</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<h1>Sistema de Busca com PHP</h1>

<div class="form">
    <form method="get">
        <div class="form-group">
        <label for="busca">Busca</label>
        <input type="text" class="form-control" id="busca" name="busca" placeholder="Digite o nome do produto">
        </div>
        <button type="submit" class="btn btn-primary">Buscar</button>
    </form>
</div>
</body>
</html>