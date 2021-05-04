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

// Dashboard > Producto
Breadcrumbs::for('products.index', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Producto', route('products.index'));
});

// Dashboard > Producto > Upload Producto
Breadcrumbs::for('products.create', function ($trail) {
    $trail->parent('products.index');
    $trail->push('Producto', route('products.create'));
});

// Dashboard > Producto > [Producto]
Breadcrumbs::for('products.show', function ($trail, $product) {
    $trail->parent('products.index', $product);
    $trail->push($product->code, route('products.show', $product->id));
});

// Dashboard > Producto > [Producto] > Edit Producto
Breadcrumbs::for('products.edit', function ($trail, $product) {
    $trail->parent('products.index', $product);
    $trail->push($product->code, route('products.edit', $product->id));
});

// Dashboard > Cliente
Breadcrumbs::for('clients.index', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Cliente', route('clients.index'));
});

// Dashboard > Cliente > Upload Cliente
Breadcrumbs::for('clients.create', function ($trail) {
    $trail->parent('clients.index');
    $trail->push('Cliente', route('clients.create'));
});

// Dashboard > Cliente > [Cliente]
Breadcrumbs::for('clients.show', function ($trail, $client) {
    $trail->parent('clients.index', $client);
    $trail->push($client->name, route('clients.show', $client->id));
});

// Dashboard > Cliente > [Cliente] > Edit Cliente
Breadcrumbs::for('clients.edit', function ($trail, $client) {
    $trail->parent('clients.index', $client);
    $trail->push($client->name, route('clients.edit', $client->id));
});