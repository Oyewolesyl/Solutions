<?php
// Connect to the database
try {
    if (!file_exists('spotify.sqlite')) {
        die('Database file not found');
    }
    $pdo = new PDO('sqlite:spotify.sqlite');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}

// Part 1: Get all artists ordered A-Z
$artists = [];
$stmt = $pdo->query('SELECT Name FROM artists ORDER BY Name ASC');
$artists = $stmt->fetchAll(PDO::FETCH_COLUMN);

// Part 2: Get columns of customers table
$customerColumns = [];
$columnStmt = $pdo->query("PRAGMA table_info(customers)");
$customerColumns = $columnStmt->fetchAll(PDO::FETCH_ASSOC);

// Part 3: Get all tables for dropdown
$tables = [];
$tableStmt = $pdo->query("SELECT name FROM sqlite_master WHERE type='table'");
$tables = $tableStmt->fetchAll(PDO::FETCH_COLUMN);

// Handle table search
$searchTable = $_GET['table'] ?? null;
$searchResult = [];
$error = '';

if ($searchTable) {
    if (in_array($searchTable, $tables)) {
        // Preventing SQL injection by sanitizing table name
        $searchStmt = $pdo->query("PRAGMA table_info(" . $pdo->quote($searchTable) . ")");
        $searchResult = $searchStmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
        $error = 'No results found.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Database Exercise</title>
</head>
<body>

<h2>List the columns of a specific table</h2>
<form method="GET" action="">
    <select name="table">
        <option value="">Select a table</option>
        <?php foreach ($tables as $table): ?>
            <option value="<?= htmlspecialchars($table) ?>" <?= ($table === $searchTable) ? 'selected' : '' ?>>
                <?= htmlspecialchars($table) ?>
            </option>
        <?php endforeach; ?>
    </select>
    <button type="submit">Search</button>
</form>

<?php if ($searchTable): ?>
    <h3>Result:</h3>
    <?php if ($error): ?>
        <p><?= htmlspecialchars($error) ?></p>
    <?php else: ?>
        <ul>
            <?php foreach ($searchResult as $col): ?>
                <li><?= htmlspecialchars($col['name']) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
<?php endif; ?>

<h2>All Artists (A-Z)</h2>
<ul>
    <?php foreach ($artists as $artist): ?>
        <li><?= htmlspecialchars($artist) ?></li>
    <?php endforeach; ?>
</ul>

<h2>Customer Table Columns</h2>
<ul>
    <?php foreach ($customerColumns as $col): ?>
        <li><?= htmlspecialchars($col['name']) ?></li>
    <?php endforeach; ?>
</ul>

</body>
</html>
