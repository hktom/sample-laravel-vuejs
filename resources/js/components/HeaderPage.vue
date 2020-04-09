<template>
  <div>
      <div class="w80 mauto">
  <b-navbar toggleable="lg" type="light">
    <b-navbar-brand class="fs2 lighter">Plan Biodiversité</b-navbar-brand>

    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

    <b-collapse id="nav-collapse" is-nav>
      <b-navbar-nav class="ml-auto">
          <b-nav-item>
              <router-link class="header-link" to="/project">Champ d'application</router-link>
          </b-nav-item>

          <b-nav-item>
              <router-link class="header-link" to="/action">Actions</router-link>
          </b-nav-item>

          <b-nav-item>
              <router-link class="header-link" to="/contact">Contact</router-link>
          </b-nav-item>

      </b-navbar-nav>
    </b-collapse>
  </b-navbar>
</div>
  </div>
</template>

<script>
export default {
      name: 'HeaderPage',
      data (){
          return {
              //menuVisible: false
          }
      },
      methods: {
      }
  }
</script>

<style>
.header-link{color:black;text-decoration: none;font-weight: 400;}
.header-link:hover{text-decoration: none; color:#4B96F3}
</style>
