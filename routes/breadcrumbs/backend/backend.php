<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

Breadcrumbs::for('admin.post.index', function ($trail) {
    $trail->push(__('backend.posts'), route('admin.post.index'));
});


Breadcrumbs::for('admin.post.create', function ($trail) {
    $trail->push(__('backend.new'), route('admin.post.create'));
});

Breadcrumbs::for('admin.category.index', function ($trail) {
    $trail->push(__('backend.categories'), route('admin.category.index'));
});



Breadcrumbs::for('admin.tag.index', function ($trail) {
    $trail->push(__('backend.tags'), route('admin.tag.index'));
});

Breadcrumbs::for('admin.category.create', function ($trail) {
    $trail->push(__('backend.new'), route('admin.category.create'));
});

Breadcrumbs::for('admin.tag.create', function ($trail) {
    $trail->push(__('backend.new'), route('admin.tag.create'));
});

Breadcrumbs::for('admin.category.edit', function ($trail) {
    $trail->push(__('backend.edit'), route('admin.category.edit'));
});



Breadcrumbs::for('admin.static.index', function ($trail) {
    $trail->push(__('backend.edit'), route('admin.static.index'));
});







require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
