<?php
include 'db.php';

$title = $_GET['title'] ?? '';
$query = $conn->prepare("SELECT * FROM libros WHERE titulo = ?");
$query->bind_param("s", $title);
$query->execute();
$result = $query->get_result();
$book = $result->fetch_assoc();

if (!$book) {
    echo "Libro no encontrado.";
    exit;
}

$related_query = $conn->prepare("SELECT * FROM libros WHERE titulo != ? ORDER BY RAND() LIMIT 4");
$related_query->bind_param("s", $title);
$related_query->execute();
$related_books = $related_query->get_result();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $book['titulo']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <div class="container mx-auto py-20 text-center">
        <h1 class="text-4xl font-bold"><?php echo $book['titulo']; ?></h1>
        <img src="<?php echo $book['portada']; ?>" alt="<?php echo $book['titulo']; ?>" class="w-48 h-72 object-cover mx-auto mt-4">
        <p class="mt-4"><strong>Autor:</strong> <?php echo $book['autor']; ?></p>
        <p><strong>Categoría:</strong> <?php echo $book['categoria']; ?></p>
        <p><strong>Número de minutos leído:</strong> <?php echo $book['minutos_leido']; ?></p>
        <p><strong>Veces canjeado:</strong> <?php echo $book['veces_canjeado']; ?></p>
        <p class="mt-4">Descripción del libro aquí.</p>
        <a href="index.php" class="mt-4 inline-block bg-blue-500 text-white p-2 rounded">Volver</a>
    </div>

    <div class="container mx-auto py-20">
    <h2 class="text-2xl font-bold text-center">Libros Recomendados</h2>
    <div class="flex flex-wrap justify-center mt-6">
        <?php while ($related_book = $related_books->fetch_assoc()): ?>
            <div class="product p-4">
                <a href="book-detail.php?title=<?php echo urlencode($related_book['titulo']); ?>">
                    <div class="bg-white shadow rounded-lg overflow-hidden">
                        <img src="<?php echo $related_book['portada']; ?>" alt="<?php echo $related_book['titulo']; ?>" class="w-full h-72 object-cover">
                        <div class="p-4">
                            <h3 class="font-bold text-lg truncate"><?php echo $related_book['titulo']; ?></h3>
                            <p class="text-gray-600"><?php echo $related_book['autor']; ?></p>
                            <p class="text-gray-500"><?php echo $related_book['categoria']; ?></p>
                            <p class="text-gray-500">Veces canjeado: <?php echo $related_book['veces_canjeado']; ?></p>
                        </div>
                    </div>
                </a>
            </div>
        <?php endwhile; ?>
    </div>
</div>

</body>
</html>