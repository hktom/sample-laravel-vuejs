import Action from '../page/Action'
import Project from '../page/Project'
import Contact from '../page/Contact'
import showAction from '../page/action/showAction'
import showProject from '../page/project/showProject'


export const routes = [
    {
        path:'/',
        name:'home',
        component:Action,
        meta: {
            title: 'PLAN BIODIVERSITÉ 2020-2023 DE LA STRATÉGIE BIODIVERSITÉ GENÈVE 2030',
            metaTags: [
              {
                name: 'description',
                content: 'La biodiversité c’est notre assurance vie face aux changements climatiques. Il faut en faire une priorité pour réussir la transition écologique.'
              },
              {
                property: 'og:description',
                content: 'La biodiversité c’est notre assurance vie face aux changements climatiques. Il faut en faire une priorité pour réussir la transition écologique.'
              }
            ]
          }
    },
    {
        path:'/champ-d-applications',
        name:'project',
        component:Project,
        meta: {
            title: "Champs d'application",
            metaTags: [
              {
                name: 'description',
                content: 'La biodiversité c’est notre assurance vie face aux changements climatiques. Il faut en faire une priorité pour réussir la transition écologique.'
              },
              {
                property: 'og:description',
                content: 'La biodiversité c’est notre assurance vie face aux changements climatiques. Il faut en faire une priorité pour réussir la transition écologique.'
              }
            ]
          }
    },
    {
        path:'/champ-d-application/:id',
        name:'showProject',
        component:showProject,
        // meta: {
        //     title: 'Home Page - Example App',
        //     metaTags: [
        //       {
        //         name: 'description',
        //         content: 'The home page of our example app.'
        //       },
        //       {
        //         property: 'og:description',
        //         content: 'The home page of our example app.'
        //       }
        //     ]
        //   }
    },
    {
        path:'/action/:id',
        name:'showAction',
        component:showAction,
        // meta: {
        //     title: 'Home Page - Example App',
        //     metaTags: [
        //       {
        //         name: 'description',
        //         content: 'The home page of our example app.'
        //       },
        //       {
        //         property: 'og:description',
        //         content: 'The home page of our example app.'
        //       }
        //     ]
        //   }
    },
    {
        path:'/contact',
        name:'contact',
        component:Contact,
        meta: {
            title: 'Contact',
            metaTags: [
              {
                name: 'description',
                content: 'La biodiversité c’est notre assurance vie face aux changements climatiques. Il faut en faire une priorité pour réussir la transition écologique.'
              },
              {
                property: 'og:description',
                content: 'La biodiversité c’est notre assurance vie face aux changements climatiques. Il faut en faire une priorité pour réussir la transition écologique.'
              }
            ]
          }
    }
];
