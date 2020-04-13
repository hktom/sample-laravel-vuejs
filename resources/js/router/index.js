import HomePage from '../page/HomePage'
import ActionPage from '../page/ActionPage'

export const routes = [
    {
        path:'/',
        name:'home',
        component:HomePage
    },
    {
        path:'/action/:id',
        component:ActionPage,
        name:'showAction'
    }
];
