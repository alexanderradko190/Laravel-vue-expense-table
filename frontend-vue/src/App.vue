<script setup>
import { RouterLink, RouterView } from 'vue-router'
</script>

<template>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <div class="navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 m-4 grid gap-3">
          <li class="nav-item">
            <RouterLink class="nav-item text-decoration-none" to="/">Список</RouterLink>
          </li>
          <li class="nav-item">
            <RouterLink class="nav-item text-decoration-none" to="/expense/create">Создать</RouterLink>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <RouterView />
</template>
