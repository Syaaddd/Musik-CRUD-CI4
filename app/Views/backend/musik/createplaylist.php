<?= $this->extend('backend/layout/pages-layout') ?>
<?= $this->section('content') ?>

<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>Create Playlist</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a>Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a>Playlist</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Create
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="tab-content">
    <div class="tab-pane fade show active" id="personal_details" role="tabpanel">
        <div class="pd-20">
            <form action="<?= route_to('store') ?>" method="POST">
                <?= csrf_field() ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Playlist Name</label>
                            <input type="text" name="name" class="form-control"
                                placeholder="Enter your name playlist">
                            <span class="text-danger error-text name_error"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Description</label>
                            <input type="text" name="description" class="form-control"
                                placeholder="Enter your description ">
                            <span class="text-danger error-text username_error"></span>
                        </div>
                    </div>
                </div>
                <!-- <div class="form-group">
                    <label for="">Bio</label>
                    <textarea name="bio" cols="30" rows="10" class="form-control"
                        placeholder="Enter your bio"></textarea>
                    <span class="text-danger error-text bio_error"></span>
                </div> -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?= $this->endSection() ?>