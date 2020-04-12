import HomePage from '../page/HomePage'
import ActionPage from '../page/ActionPage'

export const routes = [
    {
        path:'/',
        component:HomePage
    },
    {
        path:'/action/:id',
        component:ActionPage,
        name:'showAction'
    }
];
