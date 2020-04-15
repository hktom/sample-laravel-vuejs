import HomePage from '../page/HomePage'
import ActionPage from '../page/ActionPage'
import ProjectPage from '../page/ProjectPage'
import showProject from '../page/project/showProject'
import contributorPage from '../page/contributorPage'

export const routes = [
    {
        path:'/',
        name:'home',
        component:HomePage
    },
    {
        path:'/projects',
        name:'project',
        component:ProjectPage
    },
    {
        path:'/projects/:id',
        name:'shwoProject',
        component:showProject
    },
    {
        path:'/contributeurs',
        name:'contributor',
        component:contributorPage
    },
    {
        path:'/action/:id',
        name:'showAction',
        component:ActionPage,
    }
];
