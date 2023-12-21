<?php
require_once __DIR__ . '/../Config/database.php';
require_once __DIR__ . '/../Model/Product.php';

class ProductController
{
    public static function getAllProducts(): array
    {
        $conn = openDatabaseConnection();
        $result = $conn->query("SELECT * FROM Products");
        $productsReq = $result->fetch_all(MYSQLI_ASSOC);
        $conn->close();
        $products = array();

        foreach ($productsReq as $currProduct) {
            $newProduct = new Product($currProduct['product_id'], $currProduct['name'], $currProduct['description'],  $currProduct['link_to_origin'], $currProduct['price'], $currProduct['image_url']);
            $products[] = $newProduct;
        }

        return $products;
    }

    public static function createProduct(): void {
        try{
            $name = $_POST["create-product-name"];
            $desc = $_POST["create-product-description"];
            $link = $_POST["create-product-link"];
            $price = $_POST["create-product-price"];
            $img = $_POST["create-product-image-url"];

            $newProduct = new Product(0, $name, $desc, $link, $price, $img);

            $conn = openDatabaseConnection();
            $result = $conn->prepare("INSERT INTO `Products` (name, description, link_to_origin, price, image_url) VALUES (?, ?, ?, ?, ?)");
            $result->execute(array($name, $desc, $link, $price, $img));
            $conn->close();
            header('location: ../public/index.php');
        }
        catch (Exception $err) {
            var_dump($err);
            die();
        }

    }

    public static function deleteProduct($productId)
    {
        try {
            $conn = openDatabaseConnection();

            $stmt = $conn->prepare("DELETE FROM Products WHERE product_id = ?");
            $stmt->bind_param("i", $productId);

            if ($stmt->execute()) {
                // Suppression réussie
                $stmt->close();
                $conn->close();
            } else {
                // Erreur lors de la suppression
                echo "Erreur lors de la suppression du produit.";
            }
        } catch (Exception $err) {
            // Gérer les erreurs de base de données
            echo "Erreur lors de la suppression du produit : " . $err->getMessage();
        }
    }


    public static function getFeaturedProducts()
    {
        $conn = openDatabaseConnection();
        $result = $conn->query("SELECT * FROM Products WHERE is_featured = 1");
        $featuredProducts = $result->fetch_all(MYSQLI_ASSOC);
        $conn->close();
        return $featuredProducts;
    }

    public static function getProductById($productId)
    {
        $conn = openDatabaseConnection();
        $stmt = $conn->prepare("SELECT * FROM Products WHERE product_id = ?");
        $stmt->bind_param("i", $productId);
        $stmt->execute();
        $result = $stmt->get_result();
        $product = $result->fetch_assoc();
        $stmt->close();
        $conn->close();
        return $product;
    }
}
