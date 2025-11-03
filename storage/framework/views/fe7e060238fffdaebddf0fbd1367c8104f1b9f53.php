
<?php $__env->startSection('body'); ?>
<main class="app-main">
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6"><h3 class="mb-0">FAQ</h3></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Docs</a></li>
                        <li class="breadcrumb-item active" aria-current="page">FAQ</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="app-content">
        <div class="container-fluid">
            <h4 id="can-adminlte-be-used-with-wordpress">Can AdminLTE be used with WordPress?</h4>
            <p>
                AdminLTE is an HTML template that can be used for any purpose. However, it is not made
                to be easily installed on WordPress. It will require some effort and enough knowledge
                of the WordPress script to do so.
            </p>
            <h4 id="is-there-an-integration-guide-for-php-frameworks-such-as-yii-or-symfony">
                Is there an integration guide for PHP frameworks such as Yii or Symfony?
            </h4>
            <p>
                Short answer, no. However, there are forks and tutorials around the web that provide
                info on how to integrate with many different frameworks. There are even versions of
                AdminLTE that are integrated with jQuery ajax, AngularJS and/or MVC5 ASP .NET.
            </p>
            <h4 id="how-do-i-get-notified-of-new-adminlte-versions">
                How do I get notified of new AdminLTE versions?
            </h4>
            <p>
                You may watch the
                <a href="https://github.com/ColorlibHQ/AdminLTE">releases on GitHub</a>.
            </p>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\html6up\proje\resources\views/docs/faq.blade.php ENDPATH**/ ?>