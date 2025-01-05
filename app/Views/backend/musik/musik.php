<?= $this->extend('backend/layout/pages-layout') ?>
<?= $this->section('content') ?>

<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>Musik</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Musik
                    </li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6 col-sm-12 text-right">
            <div class="dropdown">
                <a class="btn btn-primary " href="<?= route_to('playlist.create') ?>" role="button">
                    Add Musik
                </a>
            </div>
        </div>
    </div>
</div>


<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-200px">
        <!-- Simple Datatable start -->
        <div class="pb-20">
            <table class="data-table table stripe hover nowrap">
                <thead>
                    <tr>
                        <th>name</th>
                        <th>artist</th>
                        <th>album</th>
                        <th>duration</th>
                        <th>playlist</th>
                        <th class="datatable-nosort">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($musik)): ?>
                        <?php foreach ($musik as $item): ?>
                            <tr>
                                <td><?= esc($item['title']); ?></td>
                                <td><?= esc($item['artist']); ?></td>
                                <td><?= esc($item['album']); ?></td>
                                <td><?= esc($item['duration']); ?></td>
                                <td>
                                    <?= !empty($item['playlist_name']) ? esc($item['playlist_name']) : 'No Playlist'; ?>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-link" href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                            <a class="dropdown-item" href="<?= route_to('musik.edit', $item['id']) ?>"><i class="dw dw-edit2"></i> Edit</a>
                                            <form action="<?= route_to('musik.delete', $item['id']) ?>" method="POST">
                                                <?= csrf_field(); ?>
                                                <button class="dropdown-item" type="submit">
                                                    <i class="dw dw-delete-3"></i> Delete
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6">No musik found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>


            </table>
        </div>
    </div>
    <!-- Simple Datatable End -->
</div>

<?php $this->endSection() ?>