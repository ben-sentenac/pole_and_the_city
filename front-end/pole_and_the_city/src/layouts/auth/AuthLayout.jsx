import { Routes, Route } from "react-router-dom";
import routes from "@/routes";

function AuthLayout() {
    return (
        <div className="min-h-screen bg-blue-50/50">
            <div className="p-4 xl:m-10">
            <Routes>
                {routes.map(
                    ({ layout, pages }) =>
                        layout === "auth" &&
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

export default AuthLayout;