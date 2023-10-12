export function useSessionStorage(defaultKey) {
    const getItem = (key) => sessionStorage.getItem(key ?? defaultKey);
    const setItem = (value, key) => sessionStorage.setItem(key ?? defaultKey, value);
    const removeItem = (key) => sessionStorage.removeItem(key ?? defaultKey);

    return {
        getItem,
        setItem,
        removeItem
    }
}