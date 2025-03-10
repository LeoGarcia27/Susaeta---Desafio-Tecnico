<?php
include 'db.php';

$total_query = "SELECT COUNT(*) as total FROM libros";
$total_result = $conn->query($total_query);
$total_books = $total_result->fetch_assoc()['total'];

$random_offset = rand(0, max(0, $total_books - 4));
$query = "SELECT * FROM libros LIMIT 4 OFFSET $random_offset"; 
$result = $conn->query($query);
?>

<div class="container mx-auto py-20">
    <h2 class="text-2xl font-bold text-center">Nuestros Productos</h2>
    <div class="flex flex-wrap justify-center mt-6">
        <?php while ($product = $result->fetch_assoc()): ?>
            <div class="product p-4">
                <a href="book-detail.php?title=<?php echo urlencode($product['titulo']); ?>">
                    <div class="bg-white shadow rounded-lg overflow-hidden">
                        <img src="<?php echo $product['portada']; ?>" alt="<?php echo $product['titulo']; ?>" class="w-full h-72 object-cover">
                        <div class="p-4">
                            <h3 class="font-bold text-lg truncate"><?php echo $product['titulo']; ?></h3>
                            <p class="text-gray-600"><?php echo $product['autor']; ?></p>
                        </div>
                    </div>
                </a>
            </div>
        <?php endwhile; ?>
    </div>
</div>