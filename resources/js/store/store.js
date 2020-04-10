import Vue from 'vue';
import Vuex from 'vuex';
import axios from 'axios';
import {projectModule} from './module/projectModule';
import {actorModule} from './module/actorModule';
import {typeModule} from './module/typeModule';
import {statusModule} from './module/statusModule';
import {actionModule} from './module/actionModule';

Vue.use(Vuex);

export const store = new Vuex.Store({
    modules:{
        project: projectModule,
        actor: actorModule,
        status:statusModule,
        type:typeModule,
        action:actionModule,
    }
})
