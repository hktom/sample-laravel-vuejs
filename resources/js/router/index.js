import Action from '../page/Action'
import Project from '../page/Project'
import Contact from '../page/Contact'
import showAction from '../page/action/showAction'
import showProject from '../page/project/showProject'


export const routes = [
    {
        path:'/',
        name:'home',
        component:Action
    },
    {
        path:'/champ-d-applications',
        name:'project',
        component:Project
    },
    {
        path:'/champ-d-application/:id',
        name:'showProject',
        component:showProject
    },
    {
        path:'/action/:id',
        name:'showAction',
        component:showAction,
    },
    {
        path:'/contact',
        name:'contact',
        component:Contact,
    }
];
