<?php
use Tabuna\Breadcrumbs\Breadcrumbs;
use Tabuna\Breadcrumbs\Trail;
// Dashboard
Breadcrumbs::for('dashboard', fn (Trail $trail) =>
    $trail->push('Dashboard', route('dashboard'))
);

// Categories
Breadcrumbs::for('categories.index', fn (Trail $trail) =>
    $trail
    ->parent('dashboard', route('dashboard'))
    ->push('Categorías', route('categories.index'))
);
// New Categories
Breadcrumbs::for('categories.create', fn (Trail $trail) => $trail
    ->parent('categories.index', route('categories.index'))
    ->push('Nueva Categoría', route('dashboard'))
);
// Show Categories
Breadcrumbs::for('categories.show', fn (Trail $trail) => $trail
    ->parent('categories.index', route('categories.index'))
    ->push('Categoría', route('dashboard'))
);