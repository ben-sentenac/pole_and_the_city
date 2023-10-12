import { API_URL} from '@/config';

export async function login(credentials = { email: "", password: "" }) {
    const { email, password } = credentials;
    try {
        const response = await fetch(`${API_URL}/login`, {
            method: 'POST',
            headers: {
                Accept: 'application/json',
                "Content-Type": 'aplication/json',
            },
            body: JSON.stringify({ email, password }),
            //credentials:"include"
        });

        if (response.ok) {
            return response.json();
        }
        throw new Error(response.statusText);
    } catch (error) {
        console.error(error);
    }
}