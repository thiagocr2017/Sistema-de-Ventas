<?php
// Dashboard
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Dashboard', route('dashboard'));
});

// Dashboard > Categorías
Breadcrumbs::for('categories.index', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Categorías', route('categories.index'));
});

// Dashboard > Categorías > Upload Categoría
Breadcrumbs::for('categories.create', function ($trail) {
    $trail->parent('categories.index');
    $trail->push('Nueva Categoría', route('categories.create'));
});

// Dashboard > Categorías > [Category]
Breadcrumbs::for('categories.show', function ($trail, $category) {
    $trail->parent('categories.index', $category);
    $trail->push($category->name, route('categories.show', $category->id));
});

// Dashboard > Categorías > [Category] > Edit Photo
Breadcrumbs::for('categories.edit', function ($trail, $category) {
    $trail->parent('categories.index', $category);
    $trail->push($category->name, route('categories.edit', $category->id));
});

// Dashboard > Proveedor
Breadcrumbs::for('providers.index', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Proveedor', route('providers.index'));
});

// Dashboard > Proveedor > Upload Proveedor
Breadcrumbs::for('providers.create', function ($trail) {
    $trail->parent('providers.index');
    $trail->push('Nueva Proveedor', route('providers.create'));
});

// Dashboard > Proveedor > [Provider]
Breadcrumbs::for('providers.show', function ($trail, $provider) {
    $trail->parent('providers.index', $provider);
    $trail->push($provider->name, route('providers.show', $provider->id));
});

// Dashboard > Proveedor > [Provider] > Edit Photo
Breadcrumbs::for('providers.edit', function ($trail, $provider) {
    $trail->parent('providers.index', $provider);
    $trail->push($provider->name, route('providers.edit', $provider->id));
});