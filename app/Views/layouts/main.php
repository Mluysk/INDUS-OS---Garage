<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title ?? 'Indus-OS Garage') ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body { background-color: #f5f7fb; }
        .app-header { background: #0b2545; color: #fff; }
        .app-card { border: none; border-radius: 12px; }
    </style>
</head>
<body>
<header class="app-header py-3 mb-4">
    <div class="container d-flex justify-content-between align-items-center">
        <h1 class="h4 mb-0">Indus-OS Garage</h1>
        <span class="text-light small">ERP de Oficina</span>
    </div>
</header>
<main class="container pb-5">
    <?= $content ?? '' ?>
</main>
</body>
</html>
