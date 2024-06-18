        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion fixed-top" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('/'); ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-code"></i>
                </div>
                <div class="sidebar-brand-text mx-3">UAS</div>
            </a>

            <?php if (in_groups('admin')) : ?>
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    User Management
                </div>

                <!-- Nav Item - User List -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin'); ?>">
                        <i class="fas fa-users"></i>
                        <span>User List</span></a>
                </li>
            <?php endif; ?>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                User Profile
            </div>

            <!-- Nav Item - Pages Collapse Menu profil -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsee" aria-expanded="true" aria-controls="collapsee">
                    <i class="fas fa-user"></i>
                    <span>My Profile</span>
                </a>
                <div id="collapsee" class="collapse" aria-labelledby="heading" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Profil Saya :</h6>
                        <a class="collapse-item" href="#"><?= user()->fullname; ?></a>
                        <a class="collapse-item" href="#"><?= user()->nim; ?></a>
                        <a class="collapse-item" href="#"><?= user()->kelas; ?></a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - soal & jawaban -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/soal'); ?>">
                    <i class="fas fa-folder-open"></i>
                    <span>Soal & Jawaban</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Logout -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('logout'); ?>">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>





            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>