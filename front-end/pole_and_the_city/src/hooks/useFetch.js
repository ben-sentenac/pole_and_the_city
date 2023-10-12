import { useEffect, useState } from "react";



function useFetch(url, options = {}) {

    const [data, setData] = useState(null);
    const [loading, setLoading] = useState(true);
    const [error, setError] = useState(null);



    /*
        function reducer(state, action) {
            switch (action.type) {
                case 'loading':
                    return { ...state, loading: true };
                case 'success':
                    return { data: action.data, loading: false, error: null };
                case 'error':
                    return {
                        data: null, loading: false, error: action.error
                    }
                default:
                    return new Error('Unknown reducer action type');
            }
        }
    */
    useEffect(() => {
        (async () => {
            try {

                const response = await fetch(url, {
                    ...options,
                    headers: {
                        'Accept': 'application/json; charset=UTF-8',
                        ...options.headers
                    }
                });
                if (!response.ok) {
                    throw new Error(response.statusText);
                }
                const result = await response.json();
                setData(result);
                setLoading(false);
            } catch (error) {
                setError(error);
                setLoading(false);
            }

        })();
    }, [url,options]);
    
    return { data, loading, error };
}


export { useFetch }