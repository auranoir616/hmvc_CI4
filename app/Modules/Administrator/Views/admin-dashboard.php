<?= $this->extend('App\Modules\Dashboard\Views\template') ?>

<?= $this->section('title') ?>
Login
<?= $this->endSection() ?>
<?= $this->section('content') ?>


<h1>admin dashboard</h1>
<?= $islogin; ?>
<?php
$user = userdata();
print_r($data_group);
echo $user->username
?>
<a href="<?= site_url('logout') ?>">Logout</a>

<a data-bs-href="<?php echo base_url('modal/admin/admin-modal') ?>" data-bs-title="modal" data-bs-remote="false" data-bs-toggle="modal" data-bs-target="#dinamicModal" data-bs-backdrop="static" data-bs-keyboard="false" title="UPDATE MEMBER" class="btn btn-sm btn-primary text-white mb-1" style="min-width: 75px;">
     Modal admin
</a>
<a data-bs-href="<?php echo base_url('modal/member/member-modal') ?>" data-bs-title="modal" data-bs-remote="false" data-bs-toggle="modal" data-bs-target="#dinamicModal" data-bs-backdrop="static" data-bs-keyboard="false" title="UPDATE MEMBER" class="btn btn-sm btn-primary text-white mb-1" style="min-width: 75px;">
     Modal member
</a>

<?= $this->endSection() ?>