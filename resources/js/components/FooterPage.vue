<template>

<div id="footer" class="w100 py-5" style="background-color:#05668D">
    <div class="w80 mauto">
        <b-row>
            <b-col lg="6" md="12">

                <logo color="white"/>
                <p class="white">
                     <b>La biodiversité</b> c’est notre assurance vie face aux changements climatiques et une priorité pour réussir la transition écologique.
                 </p>
                <!-- <img src="/img/header-logo-white.png"
                class="x30 ms-x15 ss-x15"/>
                  -->
                <!-- <img src="/img/logo_white.png" class="w60 cover"> -->
            </b-col>
            <b-col lg="3" md="12">
                <h6 class="white uppercase">Menu</h6>
                <ul class="list-none">
                    <li class="white">
                        <router-link class="footer-link" to="/">Actions</router-link>
                    </li>
                    <li class="white">
                        <router-link class="footer-link" to="/projects">Champs d'application</router-link>
                    </li>
                    <li class="white">
                        <router-link class="footer-link" to="/contact">Contact</router-link>
                    </li>
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
