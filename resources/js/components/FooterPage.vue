<template>

<div id="footer" class="w100 py-5" style="background-color:#05668D">
    <div class="w80 mauto vls-w75 ms-w100 ss-w100">
        <div class="px-3">
            <b-row>
            <b-col lg="6" md="12">

                <logo color="white"/>
                <p class="white">
                     <strong>La biodiversité</strong> c’est notre assurance vie </br> face aux changements climatiques et une priorité pour réussir la <strong>transition écologique.</strong>
                 </p>
            </b-col>
            <b-col lg="3" md="12">
                <h6 class="white uppercase">Menu</h6>
                <ul class="list-none">
                    <li class="white">
                        <router-link class="footer-link" to="/">Actions</router-link>
                    </li>
                    <li class="white">
                        <router-link class="footer-link" :to="{name:'project'}">Champs d'application</router-link>
                    </li>
                    <!-- <li class="white">
                        <router-link class="footer-link" :to="{name:'contact'}">Contact</router-link>
                    </li> -->
                </ul>
            </b-col>
            <b-col lg="3" md="12">
                <h6 class="white uppercase">Suivez-nous sur</h6>
                <ul class="list-none">
                    <li class="white">
                        <a href="#" class="footer-link">Twitter</a>
                    </li>
                    <li class="white">
                        <a href="#" class="footer-link">Linkedin</a>
                    </li>
                    <li class="white">
                        <a href="#" class="footer-link">Facebook</a>
                    </li>
                </ul>
            </b-col>
        </b-row>
        </div>
    </div>
</div>

</template>

<script>
import logo from './logo';
export default {
        components:{
          logo,
      },
}
</script>

<style>
#footer ul li{
    margin: 15px 0px 15px 0px;
    text-decoration: underline dotted white;

}

.footer-link{
    color:white;
    text-decoration: none;
    font-weight: 400;
    text-transform: uppercase;
    font-size: 14px;
    width: 100%;
    display: block;
    transition: 0.3s;
}

.footer-link:hover{
    text-decoration: none;
    color:#F8D289;
    /* background-color: white; */
}
</style>
