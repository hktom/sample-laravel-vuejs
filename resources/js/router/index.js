import HomePage from '../page/HomePage'
import ActionPage from '../page/ActionPage'
import ProjectPage from '../page/ProjectPage'
import showProject from '../page/project/showProject'


export const routes = [
    {
        path:'/',
        name:'home',
        component:HomePage
    },
    {
        path:'/champ-d-applications',
        name:'project',
        component:ProjectPage
    },
    {
        path:'/champ-d-application/:id',
        name:'shwoProject',
        component:showProject
    },
    {
        path:'/action/:id',
        name:'showAction',
        component:ActionPage,
    }
];
