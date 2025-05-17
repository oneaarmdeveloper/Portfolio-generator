<?php
// Read JSON File
$jsonData = file_get_contents('projects.json');
$projects = json_decode($jsonData, true);

// Get selected category from URL
$selectedCategory = isset($_GET['category']) ? $_GET['category'] : 'All';

// Filter projects
$filterProjects = $projects;
if ($selectedCategory !== 'All') {
    $filterProjects = array_filter($projects, function ($project) use ($selectedCategory) {
        return $project['category'] === $selectedCategory;
    });
}

// Get unique categories for filter dropdown
$categories = array_unique(array_column($projects, 'category'));
sort($categories); // Optional: sort categories alphabetically
array_unshift($categories, 'All');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>My Portfolio</h1>
        <form method="GET" action="index.php">
            <label for="category">Filter By Category:</label>
            <select name="category" id="category" onchange="this.form.submit()">
                <?php foreach ($categories as $category): ?>
                    <option value="<?php echo htmlspecialchars($category); ?>" <?php echo $category === $selectedCategory ? 'selected' : ''; ?>>
                        <?php echo htmlspecialchars($category); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </form>
    </header>

    <main>
        <?php if (empty($filterProjects)): ?>
            <p>No projects in this category</p>
        <?php else: ?>
            <div class="project-grid">
                <?php foreach ($filterProjects as $project): ?>
                    <div class="project-card">
                        <img src="<?php echo htmlspecialchars($project['image']); ?>" alt="<?php echo htmlspecialchars($project['title']); ?>">
                        <h2><?php echo htmlspecialchars($project['title']); ?></h2>
                        <p><?php echo htmlspecialchars($project['description']); ?></p>
                        <span class="category"><?php echo htmlspecialchars($project['category']); ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </main>
</body>
</html>
