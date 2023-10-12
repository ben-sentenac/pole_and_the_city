import { useState, createContext, useEffect, useCallback } from "react";
import { useSessionStorage } from '@/hooks/useSessionStorage';

export const UserContext = createContext({
    accessToken: null,
    setAccessToken: () => null,
    authenticated: false,
    setAuthenticated: () => false,

});

export function UserContextProvider({ children }) {
    const [accessToken, setAccessToken] = useState(null);
    const { getItem, setItem,removeItem } = useSessionStorage('jeton_token');
    const value = { accessToken, setAccessToken, setItem, removeItem};
    
    const getSessionToken = useCallback(() => {
        const token = getItem();
        setAccessToken(token);
    }, [getItem]);

    useEffect(() => {
        getSessionToken();
        return () => { };
    }, [accessToken, getSessionToken]);

    return (<UserContext.Provider value={value}>
        {children}
    </UserContext.Provider>);
}


  