<template>
    <div id="header">

        <!-- side bar menu -->
                <b-sidebar
                    id="sidebar-1"
                    title="PLAN BIODIVERSITÉ 2020-202 DE LA STRATÉGIE BIODIVERSITÉ GENÈVE 2030"
                    shadow
                    class="d-lg-none"
                    text-variant="light"
                >
                    <div class="px-3 py-2">
                        <ul class="list-none">
                            <li>
                                <router-link class="side-header-link" to="/"
                                    >Actions</router-link
                                >
                            </li>

                            <li>
                                <router-link
                                    class="side-header-link"
                                    :to="{ name: 'project' }"
                                    >Champs d'application</router-link
                                >
                            </li>

                            <!-- <li>
                                <router-link
                                    class="side-header-link"
                                    :to="{ name: 'contact' }"
                                    >Contact</router-link
                                >
                            </li> -->
                        </ul>
                    </div>
                </b-sidebar>

            <!-- navbar menu -->
        <div class="w80 mauto vls-w75 ms-w100 ss-w100 relative">
            <b-navbar toggleable="lg" type="light">
                <b-navbar-brand>
                    <router-link class="brand-title" to="/">
                        <!-- logo with text  -->
                        <logo color="black" />
                    </router-link>
                </b-navbar-brand>

                <!-- toggle button -->

                <div
                    v-b-toggle.sidebar-1
                    class="d-lg-none cursor-pointer"
                    variant="light"
                >
                    <font-awesome-icon icon="bars" />
                </div>

                <!-- toggle button -->

                <b-collapse id="nav-collapse" is-nav>
                    <b-navbar-nav class="ml-auto">
                        <b-nav-item>
                            <router-link
                            class="header-link"
                            :to="{name:'home'}"
                            >Actions</router-link
                            >
                        </b-nav-item>

                        <b-nav-item>
                            <router-link
                                class="header-link"
                                :to="{ name: 'project' }"
                                >Champs d'application</router-link
                            >
                        </b-nav-item>

                        <!-- <b-nav-item>
                            <router-link
                                class="header-link"
                                :to="{ name: 'contact' }"
                                >Contact</router-link
                            >
                        </b-nav-item> -->
                    </b-navbar-nav>
                </b-collapse>
            </b-navbar>
        </div>
    </div>
</template>

<script>
import logo from "./logo";
export default {
    props:["action", "project", "contact"],
    name: "HeaderPage",
    components: {
        logo
    },
    data() {
        return {
            //menuVisible: false
        };
    },
    methods: {}
};
</script>

<style>
.side-header-link {
    color: white;
    text-decoration: none;
    font-weight: 400;
    text-transform: uppercase;
    font-size: 14px;
    width: 100%;
    display: block;
    padding: 1em 0px;
    transition: 0.3s;
}

.side-active{
    color: #f8d289;
}

.side-header-link:hover {
    text-decoration: none;
    color: #f8d289;
    /* background-color: white; */
}
.header-link {
    color: black;
    text-decoration: none;
    font-weight: 400;
    text-transform: uppercase;
    font-size: 14px;
}

.active, .router-link-exact-active{
    color: #17a2b8;
}

#sidebar-1 .active, #sidebar-1 .router-link-exact-active{
     color: #f8d289;
}
.header-link:hover {
    text-decoration: none;
    color: #17a2b8;
}
.brand-title {
    color: black;
    text-decoration: none;
}
.brand-title:hover {
    color: black;
    text-decoration: none;
}

#sidebar-1___title__{
    font-size: 14px;
    padding-top: 20px !important;
    display: inline-block;
}

#sidebar-1{
    background-color:#05668D !important;
}
</style>
