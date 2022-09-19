<template>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <Link class="brand-link" :href="route('home')">
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
          <Link class="d-block" :href="route('home')">Francis Numbi</Link>
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
            <Link class="nav-link" :href="route('home')">
              <i class="nav-icon fas fa-th"></i>
              <p>Home</p>
            </Link>
          </li>
          <li class="nav-item">
            <Link class="nav-link" :href="route('contact')">
              <i class="nav-icon fas fa-th"></i>
              <p>Contact</p>
            </Link>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
</template>

<script setup>
import {Link} from "@inertiajs/inertia-vue3";
</script>
