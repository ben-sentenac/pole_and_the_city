import Index from "@/pages/admin/Index";
import Login from "@/pages/auth/Login";
import Logout from "@/pages/admin/Logout";

const routes = [
    {
        title:'admin',
        layout: 'admin',
        pages: [
            {
                name: 'index',
                path: '/index',
                element: <Index/>,
            },
            {
                icon: '',
                name: "logout",
                path: "/logout",
                element: <Logout />,
            },

        ]
    },
    {
        title:'login',
        layout: "auth",
        pages: [
            {
                icon: '',
                name: "login",
                path: "/login",
                element: <Login />,
            },
        ],
    },

];

export default routes;