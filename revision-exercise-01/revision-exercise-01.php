<?php
// Helper function to recursively display all .php files in a directory and its subdirectories
function showList($relativeDirectory, $extension = '.php') {
    // Construct the correct path to the directory
    $dirPath = 'C:/Users/LENOVO/back-end-api-development/' . $relativeDirectory;

    if (is_dir($dirPath)) {
        $files = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($dirPath),
            RecursiveIteratorIterator::LEAVES_ONLY
        );

        foreach ($files as $file) {
            if ($file->isFile() && substr($file->getFilename(), -strlen($extension)) === $extension) {
                $relativePath = str_replace('\\', '/', str_replace(__DIR__ . '/', '', $file->getRealPath()));
                echo "<li><a href='$relativePath'>$relativePath</a></li>";
            }
        }
    } else {
        echo "<p>Directory not found: $dirPath</p>";
    }
}

// Helper function to search for files based on a search term
function searchFiles($relativeDirectory, $searchTerm) {
    $dirPath = 'C:/Users/LENOVO/back-end-api-development/' . $relativeDirectory;

    if (!is_dir($dirPath)) {
        echo "<p>Directory not found: $dirPath</p>";
        return;
    }

    $files = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($dirPath),
        RecursiveIteratorIterator::LEAVES_ONLY
    );

    $found = false;
    foreach ($files as $file) {
        if ($file->isFile() && substr($file->getFilename(), -4) === '.php' && stripos($file->getFilename(), $searchTerm) !== false) {
            $relativePath = str_replace('\\', '/', str_replace(__DIR__ . '/', '', $file->getRealPath()));
            echo "<li><a href='$relativePath'>$relativePath</a></li>";
            $found = true;
        }
    }

    if (!$found) {
        echo "<p>Sorry, no search results found for \"$searchTerm\"</p>";
    }
}

// Fetch URL parameters
$content = $_GET['link'] ?? '';
$searchTerm = $_GET['search'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index Page</title>
</head>
<body>
    <h1>Index Page</h1>

    <nav>
        <ul>
            <li><a href="revision-exercise-01.php?link=course">Course</a></li>
            <li><a href="revision-exercise-01.php?link=examples">Examples</a></li>
            <li><a href="revision-exercise-01.php?link=solutions">Solutions</a></li>
        </ul>
    </nav>

    <form action="revision-exercise-01.php" method="GET">
        <label for="search">Search for: </label>
        <input type="text" id="search" name="search" value="<?= htmlspecialchars($searchTerm) ?>" placeholder="Enter a search term">
        <button type="submit">Search</button>
    </form>

    <div class="container">
        <?php
       if ($content === 'course') {
        echo "<iframe src='../../public/course.pdf' width='1000px' height='750px'></iframe>";
    }
     elseif ($content === 'examples') {
            echo "<h2>Index of Examples</h2><ul>";
            showList('solutions/revision-exercise-01/examples');
            echo "</ul>";
        } elseif ($content === 'solutions') {
            echo "<h2>Index of Solutions</h2><ul>";
            showList('solutions');
            echo "</ul>";
        } elseif ($searchTerm) {
            echo "<h2>Search Results for \"$searchTerm\"</h2><ul>";
            searchFiles('solutions/revision-exercise-01/examples', $searchTerm);
            searchFiles('solutions', $searchTerm);
            echo "</ul>";
        }
        ?>
    </div>
</body>
</html>
