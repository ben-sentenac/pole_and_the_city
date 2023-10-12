import { useState } from 'react';
import {
    Card,
    Input,
    Button,
    Typography,
} from "@material-tailwind/react";

const defaultFormFields = {
    email: '',
    password: ''
};


export function LoginForm({ handleLogin }) {
    const [formFields, setFormField] = useState(defaultFormFields);

    const { email, password } = formFields;

    const handleSubmit = (e) => {
        e.preventDefault();
        try {
            handleLogin({ email, password });
        } catch (error) {
            console.error(error);
        } finally {
            resetFormField();
        }
    }

    const handleChange = (e) => {
        const { name, value } = e.target;
        setFormField({ ...formFields, [name]: value });
    }

    const resetFormField = () => {
        setFormField(defaultFormFields);
    }

    return (
        <Card color="transparent" shadow={false}>
            <Typography variant="h4" color="blue-gray">
                Se connecter
            </Typography>
            <Typography color="gray" className="mt-1 font-normal">
                Veuillez entrer votre email et mot de passe
            </Typography>
            <form onSubmit={handleSubmit} method="POST" className="mt-8 mb-2 w-80 max-w-screen-lg sm:w-96">
                <div className="mb-4 flex flex-col gap-6">
                    <Input onChange={handleChange} size="lg" label="Email" name="email" value={email} aria-required aria-label="email" />
                    <Input onChange={handleChange} type="password" size="lg" label="Password" name="password" value={password} aria-label="password" aria-required />
                </div>
                <Button type="submit" className="mt-6" fullWidth>
                    Se connecter
                </Button>
                <Typography color="gray" className="mt-4 text-center font-normal">
                    Already have an account?{" "}
                    <a href="#" className="font-medium text-gray-900">
                        Sign In
                    </a>
                </Typography>
            </form>
        </Card>
    );
}