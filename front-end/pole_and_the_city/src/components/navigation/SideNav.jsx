import { NavLink } from "react-router-dom";
import { Button } from "@material-tailwind/react";
/* eslint-disable no-unused-vars */

/* eslint-disable react/prop-types */
const sidenavTypes = {
    dark: "bg-gradient-to-br from-blue-gray-800 to-blue-gray-900",
    white: "bg-white shadow-lg",
    transparent: "bg-transparent",
};

function SideNav({ routes }) {
    return (
        <aside className={`${sidenavTypes['dark']} fixed inset-0 z-50 my-4 ml-4 h-[calc(100vh-32px)] w-72 rounded-xl transition-transform duration-300 xl:translate-x-0`}>
            <div className="m-4">
                {
                    routes.map(({ layout, pages, title }, key) => (
                        title !== 'login' &&
                        <ul key={key} className="mb-4 flex flex-col gap-1">
                            {title && (
                                <li className="mx-3.5 mt-4 mb-2">
                                    {title}
                                </li>)
                            }
                            {
                                pages.map(({ name, path }, key) => (
                                    <li key={name}>
                                        <NavLink to={`/${layout}${path}`}>
                                            <Button className="flex items-center gap-4 px-4 capitalize"
                                                color="white"
                                                fullWidth
                                            >
                                                {name}
                                            </Button>
                                        </NavLink>
                                    </li>
                                ))
                            }
                        </ul>
                    ))
                }

            </div>
        </aside>
    );
}


export default SideNav;