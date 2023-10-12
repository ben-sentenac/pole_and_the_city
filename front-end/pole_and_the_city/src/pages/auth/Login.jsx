import { useAuth } from "../../hooks/useAuth";
import {login } from "@/helpers/auth";
import { LoginForm } from "@/components/forms/LoginForm";
import { Navigate } from "react-router-dom";

function Login() {
  const  { accessToken, setAccessToken,setItem } = useAuth();

  const handleLogin = async ({ email = '', password = '' }) => {
    const user = await login({ email, password });
    setAccessToken(user.access_token);
    setItem(user.access_token);
  }


  if (!accessToken) {
    return (
      <div className="login">
        <LoginForm handleLogin={handleLogin} />
      </div>
    );
  }
  return (
    <Navigate to="/admin/index" replace />
  );

}

export default Login