<?php
$articles = [
    [
        'title' => 'Eight Internet Giants Demand Restrictions on NSA Spying',
        'date' => 'December 9, 2013',
        'content' => "Eight major technology companies, such as Google, Apple, and Facebook, have demanded changes in the way the government spies in an open letter to US President Barack Obama. They want to restore public trust in the internet.",
        'image' => 'img/article-image-1.jpg',
        'imageDescription' => 'Mark Zuckerberg next to the Facebook logo',
    ],
    [
        'title' => 'Wild Benefactor Puts Money in Mailboxes',
        'date' => 'December 9, 2013',
        'content' => "Residents of two apartment blocks in Koksijde were surprised to find anonymous envelopes with cash in their mailboxes. The generous act baffled and delighted many.",
        'image' => 'img/Article-image-2.jpg',
        'imageDescription' => 'The residence in Koksijde where the benefactor was working.',
    ],
    [
        'title' => 'Original Hergé Pieces Auctioned for Hundreds of Thousands of Euros',
        'date' => 'December 9, 2013',
        'content' => "Two original pieces by Hergé were auctioned on Sunday for extraordinary amounts, confirming the lasting value and cultural relevance of Tintin art in Europe.",
        'image' => 'img/Article-image-3.jpg',
        'imageDescription' => 'Tintin and Snowy',
    ]
];

$searchResults = $articles;
$search = $_GET['search'] ?? null;
$id = $_GET['id'] ?? null;

if ($search) {
    $searchResults = array_filter($articles, function ($article) use ($search) {
        return stripos($article['content'], $search) !== false
            || stripos($article['title'], $search) !== false
            || stripos($article['date'], $search) !== false;
    });
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $id !== null && isset($articles[$id]) ? $articles[$id]['title'] : "Today's Newspaper" ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fdfdfd ;
            margin: 0;
            padding: 40px;
        }
        .container {
            max-width: 900px;
            margin: auto;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        .search-form {
            text-align: center;
            margin-bottom: 40px;
        }
        .search-form input[type="text"] {
            width: 60%;
            padding: 10px;
            font-size: 16px;
        }
        .search-form button {
            padding: 10px 16px;
            font-size: 16px;
            cursor: pointer;
        }
        .card {
            background-color: #eeeeee;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
        }
        .card img {
            width: 100%;
            height: auto;
            border-radius: 6px;
            margin-top: 10px;
        }
        .card h2 {
            margin-top: 0;
        }
        .date {
            font-size: 0.9em;
            color: #777;
            margin-bottom: 12px;
        }
        .content-preview {
            margin-bottom: 10px;
        }
        .not-found {
            text-align: center;
            font-style: italic;
            color: #aa0000;
        }
        a {
            color: #0044cc;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Today's Newspaper</h1>

    <form class="search-form" method="get">
        <input type="text" name="search" placeholder="Search..." value="<?= htmlspecialchars($search ?? '') ?>">
        <button type="submit">Search</button>
    </form>

    <?php if ($id !== null): ?>
        <?php if (isset($articles[$id])): ?>
            <?php $article = $articles[$id]; ?>
            <div class="card">
                <h2><?= $article['title'] ?></h2>
                <p class="date"><?= $article['date'] ?></p>
                <img src="<?= $article['image'] ?>" alt="<?= $article['imageDescription'] ?>">
                <p><?= $article['content'] ?></p>
            </div>
        <?php else: ?>
            <p class="not-found">This article does not exist.</p>
        <?php endif; ?>
    <?php else: ?>
        <?php if ($search && count($searchResults) === 0): ?>
            <p class="not-found">The search term '<?= htmlspecialchars($search) ?>' does not appear in our newspaper.</p>
        <?php endif; ?>
        <?php foreach ($searchResults as $index => $article): ?>
            <div class="card">
                <h2><?= $article['title'] ?></h2>
                <p class="date"><?= $article['date'] ?></p>
                <img src="<?= $article['image'] ?>" alt="<?= $article['imageDescription'] ?>">
                <p class="content-preview"><?= substr($article['content'], 0, 60) ?>...</p>
                <a href="index.php?id=<?= $index ?>">Read more</a>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
</body>
</html>
