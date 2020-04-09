import Vue from 'vue';
import Vuex from 'vuex';
import axios from 'axios';
import {projectModule} from './module/projectModule';
import {actorModule} from './module/actorModule';

Vue.use(Vuex);

export const store = new Vuex.Store({
    modules:{
        project: projectModule,
        actor: actorModule,
    }
})
