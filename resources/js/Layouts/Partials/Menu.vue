<template>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <Link :href="route('home')" class="brand-link">
            <img
                alt="SchoolIt Logo"
                class="brand-image img-circle elevation-3"
                src="~admin-lte/dist/img/AdminLTELogo.png"
                style="opacity: 0.8"
            />
            <span class="brand-text font-weight-light">SchoolIt</span>
        </Link>

        <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img
                        alt="User Image"
                        class="img-circle elevation-2"
                        src="~admin-lte/dist/img/user2-160x160.jpg"
                    />
                </div>
                <div class="info">
                    <Link :href="route('home')" class="d-block">Francis Numbi</Link>
                </div>
            </div>

            <nav class="mt-2">
                <ul
                    class="nav nav-pills nav-sidebar flex-column"
                    data-accordion="false"
                    data-widget="treeview"
                    role="menu"
                >
                
                    <li class="nav-item">
                        <Link :href="route('niveauscolaire.index')" class="nav-link " :class="{ 'active':$page.component == 'NiveauScolaire/Index' }">
                            <i class="nav-icon fas fa-th"></i>
                            <p>Niveau Scolaire</p>
                        </Link>
                    </li>

                    <li class="nav-item " :class="{ 'menu-open':$page.component.startsWith('Etudiant/')  }">
                        <a class="nav-link " href="#" :class="{ 'active':$page.component.startsWith('Etudiant/')  }">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Etudiant
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <Link class="nav-link " :class="{ 'active':$page.component == 'Etudiant/Index' }" :href="route('etudiant.index')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Tous</p>
                                </Link>
                            </li>
                            <li class="nav-item">
                                <Link class="nav-link " :class="{ 'active':$page.component == 'Etudiant/Create' }" :href="route('etudiant.create')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Nouveau</p>
                                </Link>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
</template>

<script setup>

</script>
