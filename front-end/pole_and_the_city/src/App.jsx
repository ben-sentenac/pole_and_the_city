import '@/App.css';
import AdminLayout from '@/layouts/admin/AdminLayout';
import { Routes, Route, Navigate } from "react-router-dom";
import AuthLayout from '@/layouts/auth/AuthLayout';
import { AuthRoute } from '@/layouts/AuthRoute';
import { UserContextProvider } from '@/context/UserContext';

function App() {
  return (
    <>
      <UserContextProvider>
        <Routes>
          <Route path="/admin/*" element={<AuthRoute><AdminLayout /></AuthRoute>} />
          <Route path="/auth/*" element={<AuthLayout />} />
          <Route path="*" element={<Navigate to="/dashboard/home" replace />} />
        </Routes>
      </UserContextProvider>
    </>

  )
}

export default App
