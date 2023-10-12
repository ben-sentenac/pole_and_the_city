import { Navigate } from "react-router-dom";
import { useAuth } from "../hooks/useAuth";


export function AuthRoute({ children }) {

    const { accessToken } = useAuth();

    return accessToken ? children : <Navigate to="/auth/login" replace />
}