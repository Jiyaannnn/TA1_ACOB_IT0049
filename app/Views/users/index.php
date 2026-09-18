<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<!-- This page receives its records from Users::index() in the controller. -->

<section class="page-heading page-heading-row">
    <div><span class="eyebrow">Access / Staff</span><h1>User accounts</h1><p>Staff profiles and role assignments for the POS team.</p></div>
    <span class="record-count"><?= count($users) ?> accounts</span>
</section>

<section class="table-card">
    <div class="table-wrap">
        <table>
            <thead><tr><th>Username</th><th>Full name</th><th>Assigned role</th></tr></thead>
            <tbody>
            <?php // The loop turns each user record into one visible table row. ?>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td data-label="Username"><code>@<?= esc($user['username']) ?></code></td>
                    <td data-label="Full name"><span class="table-person"><span class="mini-avatar" aria-hidden="true"><?= esc(substr($user['full_name'], 0, 1)) ?></span><strong><?= esc($user['full_name']) ?></strong></span></td>
                    <td data-label="Role"><span class="role-badge"><?= esc($user['role']) ?></span></td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </div>
</section>

<?= $this->endSection() ?>
