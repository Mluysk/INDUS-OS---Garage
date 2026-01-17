<?php
$title = 'Dashboard | Indus-OS Garage';
ob_start();
?>
<div class="row g-3">
    <div class="col-12 col-md-6 col-xl-3">
        <div class="card app-card shadow-sm">
            <div class="card-body">
                <h3 class="h6">OS Abertas</h3>
                <p class="fs-4 mb-0">0</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-xl-3">
        <div class="card app-card shadow-sm">
            <div class="card-body">
                <h3 class="h6">Faturamento do mês</h3>
                <p class="fs-4 mb-0">R$ 0,00</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-xl-3">
        <div class="card app-card shadow-sm">
            <div class="card-body">
                <h3 class="h6">Ticket médio</h3>
                <p class="fs-4 mb-0">R$ 0,00</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-xl-3">
        <div class="card app-card shadow-sm">
            <div class="card-body">
                <h3 class="h6">OS Finalizadas</h3>
                <p class="fs-4 mb-0">0</p>
            </div>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
require __DIR__ . '/../layouts/main.php';
