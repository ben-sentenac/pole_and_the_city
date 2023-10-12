import { useEffect } from 'react';
import { Navigate } from "react-router-dom";
import { useAuth } from '@/hooks/useAuth';

function Logout() {
    const { removeItem, setAccessToken } = useAuth();
    useEffect(() => {
        removeItem();
        setAccessToken(null);
    });
    //setAccessToken(null);
    return (
        <Navigate to='/auth/login' replace />
    );
}

export default Logout;