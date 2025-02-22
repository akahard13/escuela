import { Menu } from 'primereact/menu';
import { Button } from 'primereact/button';
import { useRef } from 'react';

const UserDropdown = ({ user }) => {
    const menu = useRef(null);

    const items = [
        {
            label: 'Profile',
            icon: 'pi pi-user',
            command: () => window.location.href = route('profile.edit')
        },
        {
            label: 'Log Out',
            icon: 'pi pi-sign-out',
            command: () => {
                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = route('logout');

                // Crear un input oculto con el token CSRF
                const csrfInput = document.createElement('input');
                csrfInput.type = 'hidden';
                csrfInput.name = '_token';
                csrfInput.value = csrfToken;

                form.appendChild(csrfInput);
                document.body.appendChild(form);
                form.submit();
            }
        }
    ];

    return (
        <div className="hidden sm:ms-6 sm:flex sm:items-center">
            <div className="relative ms-3">
                <Menu model={items} popup ref={menu} />
                <Button
                    label={user.name}
                    icon="pi pi-user"
                    iconPos="left"
                    className="p-button-text p-button-plain text-gray-500 hover:text-gray-700"
                    onClick={(event) => menu.current.toggle(event)}
                />
            </div>
        </div>
    );
};

export default UserDropdown;
