
<?php $__env->startSection('body'); ?>
<main class="app-main">
    <div class="app-content-top-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6"><div>App Content Top Area</div></div>
                <div class="col-md-6 text-end">
                    <button type="submit" class="btn btn-primary" name="save" value="create">
                        Create Admin
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8"><h3 class="mb-0">Layout Custom Area</h3></div>
                <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Fixed Layout</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="app-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Title</h3>
                            <div class="card-tools">
                                <button
                                    type="button"
                                    class="btn btn-tool"
                                    data-lte-toggle="card-collapse"
                                    title="Collapse"
                                >
                                    <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                                    <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                                </button>
                                <button
                                    type="button"
                                    class="btn btn-tool"
                                    data-lte-toggle="card-remove"
                                    title="Remove"
                                >
                                    <i class="bi bi-x-lg"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">Start creating your amazing application!</div>
                        <div class="card-footer">Footer</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="app-content-bottom-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6"><div>App Content Bottom Area</div></div>
                <div class="col-md-6 text-end">
                    <button type="submit" class="btn btn-secondary" name="save" value="create">
                        Refresh
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\html6up\proje\resources\views/layout/layout-custom-area.blade.php ENDPATH**/ ?>