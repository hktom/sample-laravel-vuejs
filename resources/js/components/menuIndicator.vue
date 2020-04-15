<template>

    <div class="w80 mauto mt3 mb3 ">

      <div id="menu-item" class="relative" v-if="menu=='home'">
        <router-link :to="{name: 'home'}"
        class="link-header mx-3 current_link link_action">
        Actions</router-link>

        <router-link :to="{name: 'project'}"
        class="link-header mx-3 ">
            projects
        </router-link>

        <router-link :to="{name: 'contributor'}"
        class="link-header mx-3 ">
        Contributeurs
        </router-link>
      </div>

      <div id="menu-item" class="relative" v-if="menu=='projects'">
        <router-link :to="{name: 'home'}"
        class="link-header mx-3">
        Actions</router-link>

        <router-link :to="{name: 'project'}"
        class="link-header mx-3 current_link link_project">
            projects
        </router-link>

        <router-link :to="{name: 'contributor'}"
        class="link-header mx-3 ">
        Contributeurs
        </router-link>
      </div>

      <div id="menu-item" class="relative" v-if="menu=='actions'">
        <router-link :to="{name: 'home'}"
        class="link-header mx-3">
        Actions</router-link>

        <router-link :to="{name: 'project'}"
        class="link-header mx-3 ">
            projects
        </router-link>

        <router-link :to="{name: 'contributor'}"
        class="link-header mx-3 current_link link_contributor">
        Contributeurs
        </router-link>
      </div>

    </div>

</template>

<script>
export default {
props:['menu'],
name:"menuIndicator"

};
</script>

<style>

.link-header{
text-transform: uppercase;
/* color: #17A2B8; */
color: black;
font-weight: bold;
/* opacity: 0.5; */
}
.current_link{
/* background-color: #17A2B8;  */
/* color: white;  */
/* border-radius: 300px;
padding: 7px 50px; */
}
.link-header:hover{text-decoration: none;color: #64C1CF;}
.current_link:hover{
    color: white;
}
/* #menu-item .link_action::after {
    content: "";
    border-top: 0.5em solid #17A2B8;
    border-left: 0.8em solid transparent;
    border-right: 0.8em solid transparent;
    position: absolute;
    left: calc(50% - 31.5em);
    top: 120%;
}

#menu-item .link_project::after {
    content: "";
    border-top: 0.5em solid #17A2B8;
    border-left: 0.8em solid transparent;
    border-right: 0.8em solid transparent;
    position: absolute;
    left: calc(59% - 31.5em);
    top: 120%;
}

#menu-item .link_contributor::after {
    content: "";
    border-top: 0.5em solid #17A2B8;
    border-left: 0.8em solid transparent;
    border-right: 0.8em solid transparent;
    position: absolute;
    left: calc(50% - 31.5em);
    top: 120%;
} */
</style>
