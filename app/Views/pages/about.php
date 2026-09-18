<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<!-- Values such as $name and $section were prepared by Pages::about(). -->

<section class="page-heading">
    <span class="eyebrow">Project file / TFA1</span>
    <h1>About Acob POS</h1>
    <p>A four-page CodeIgniter application that demonstrates the foundations of routing, controllers, views, and temporary data.</p>
</section>

<section class="about-grid">
    <article class="story-card">
        <span class="card-tag">PROJECT BRIEF</span>
        <h2>Learning MVC by building something useful.</h2>
        <p>Acob POS is the first version of a basic point-of-sale system. Each browser request follows a clear flow: a route selects a controller method, the controller prepares information, and a view presents the page.</p>
        <p>The customer and user records currently use static PHP arrays. These act as a simple temporary data source before a database is introduced.</p>
    </article>
    <aside class="profile-card">
        <div class="avatar" aria-hidden="true">JA</div>
        <span class="eyebrow">Developer profile</span>
        <h2><?= esc($name) ?></h2>
        <dl>
            <div><dt>Section</dt><dd><?= esc($section) ?></dd></div>
            <div><dt>Course</dt><dd><?= esc($course) ?></dd></div>
            <div><dt>Project</dt><dd>Technical Formative Assessment 1</dd></div>
        </dl>
    </aside>
</section>

<?= $this->endSection() ?>
