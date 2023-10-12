import { Routes, Route } from 'react-router-dom';
import SideNav from "@/components/navigation/SideNav";
import routes from "@/routes";

function AdminLayout() {
    return (
        <div className="min-h-screen bg-blue-50/50">
            <SideNav routes={routes} />
            <div className="p-4 xl:ml-80">
            <Routes>
                {routes.map(
                    ({ layout, pages }) =>
                        layout === "admin" &&
                        pages.map(({ path, element }) => (
                            // eslint-disable-next-line react/jsx-key
                            <Route exact path={path} element={element} />
                        ))
                )}
            </Routes>
            </div>
        </div>
    )
}

export default AdminLayout;