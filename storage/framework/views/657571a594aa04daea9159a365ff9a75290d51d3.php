
<?php $__env->startSection('body'); ?>
<main class="app-main">
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6"><h3 class="mb-0">Browser Support</h3></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Docs</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Browser Support</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="app-content">
        <div class="container-fluid">
            <p>AdminLTE comes with the same browser support as Bootstrap 5.</p>
            <blockquote>
                <h5 id="excerpt-from-bootstraps-official-documentation">
                    Excerpt from Bootstrap’s official Documentation!
                </h5>
                <p>
                    Bootstrap supports the <strong>latest, stable releases</strong> of all major
                    browsers and platforms.
                </p>
                <p>
                    For more details
                    <a
                        href="https://getbootstrap.com/docs/5.0/getting-started/browsers-devices/#supported-browsers"
                    >look here</a
                    >.
                </p>
            </blockquote>
            <p>
                You can find our supported range of browsers and their versions in
                <a href="https://github.com/ColorlibHQ/AdminLTE/blob/master/.browserslistrc"
                >our .browserslistrc file</a
                >:
            </p>
            <pre
                class="astro-code dark-plus"
                style="background-color: #1e1e1e; color: #d4d4d4; overflow-x: auto"
                tabindex="0"
                data-language="plaintext"
            ><code><span class="line"><span># https://github.com/browserslist/browserslist#readme</span></span>
<span class="line"><span></span></span>
<span class="line"><span>&gt;= 0.5%</span></span>
<span class="line"><span>last 2 major versions</span></span>
<span class="line"><span>not dead</span></span>
<span class="line"><span>Chrome &gt;= 60</span></span>
<span class="line"><span>Firefox &gt;= 60</span></span>
<span class="line"><span>Firefox ESR</span></span>
<span class="line"><span>iOS &gt;= 12</span></span>
<span class="line"><span>Safari &gt;= 12</span></span>
<span class="line"><span>not Explorer &lt;= 11</span></span></code></pre>
        </div>
    </div>
</main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\html6up\proje\resources\views/docs/browser-support.blade.php ENDPATH**/ ?>