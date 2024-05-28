<?php
include 'db.php';

// Get the search query from the URL
$search_query = trim($_GET['q']);

// Prepare the search results
$results = [];

if (!empty($search_query)) {
    try {
        $stmt = $pdo->prepare("SELECT title, description FROM content WHERE title LIKE ? OR description LIKE ?");
        $search_term = '%' . $search_query . '%';
        $stmt->execute([$search_term, $search_term]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "<div style='color: red;'>Search failed: " . $e->getMessage() . "</div>";
        exit;
    }
}
?>

<?php if (empty($results)) : ?>
    <p>No results found for "<?php echo htmlspecialchars($search_query); ?>"</p>
<?php else : ?>
    <ul>
        <?php foreach ($results as $result) : ?>
            <li>
                <h3><?php echo htmlspecialchars($result['title']); ?></h3>
                <p><?php echo htmlspecialchars($result['description']); ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
