import Vue from 'vue';
import Vuex from 'vuex';
import axios from 'axios';
import {projectModule} from './module/projectModule';
import {actionModule} from './module/actionModule';
import {actorModule} from './module/actorModule';
import {typeModule} from './module/typeModule';
import {statusModule} from './module/statusModule';
import {echelleModule} from './module/echelleModule';
import {paramsModule} from './module/paramsModule';

Vue.use(Vuex);

export const store = new Vuex.Store({
    modules:{
        project: projectModule,
        action:actionModule,
        actor: actorModule,
        status:statusModule,
        types:typeModule,
        echelle:echelleModule,
        params:paramsModule,
    }
})
