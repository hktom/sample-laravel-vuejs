<template>
  <div>
      <div class="w80 mauto">
  <b-navbar toggleable="lg" type="light">
    <b-navbar-brand class="fs2 bold">
        <router-link class="brand-title" to="/">
        <logo color="black"/>
        </router-link>
    </b-navbar-brand>

        <b-button v-b-toggle.sidebar-1 class="d-md-none" variant="light">
        <font-awesome-icon icon="bars" />
        </b-button>



    <b-sidebar id="sidebar-1" title="Plan Biodiversité" shadow class="d-md-none" bg-variant="info" text-variant="light">
      <div class="px-3 py-2">
          <ul class="list-none">
              <li>
                  <router-link class="side-header-link" to="/">Actions</router-link>
              </li>

              <li>
                  <router-link class="side-header-link" to="/projects">Champs d'application</router-link>
              </li>

              <li>
                  <router-link class="side-header-link" to="/contact">Contact</router-link>
              </li>

          </ul>
      </div>
    </b-sidebar>

    <b-collapse id="nav-collapse" is-nav>
      <b-navbar-nav class="ml-auto">

          <b-nav-item>
              <router-link class="header-link" to="/">Actions</router-link>
          </b-nav-item>

           <b-nav-item>
              <router-link class="header-link" to="/projects">Champs d'application</router-link>
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
import logo from './logo';
export default {
      name: 'HeaderPage',
      components:{
          logo,
      },
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
.side-header-link{
    color:white;
    text-decoration: none;
    font-weight: 400;
    text-transform: uppercase;
    font-size: 14px;
    width: 100%;
    display: block;
    padding: 1em 0px;
    transition: 0.3s;
}

.side-header-link:hover{
    text-decoration: none;
    color:#F8D289;
    /* background-color: white; */
}
.header-link{color:black;text-decoration: none;font-weight: 400;text-transform: uppercase;font-size: 14px}
.header-link:hover{text-decoration: none; color:#17A2B8}
.brand-title{color: black;text-decoration: none}
.brand-title:hover{color: black;text-decoration: none}
</style>
