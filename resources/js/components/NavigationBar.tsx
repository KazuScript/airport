import { Disclosure, DisclosureButton, DisclosurePanel, Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/react'
import { Bars3Icon, ChevronDownIcon, XMarkIcon } from '@heroicons/react/20/solid'
import LogoAirport from '../../../public/images/Logo.png';

type navigation = {
    name: string
    href?: string
    children?: { name: string; href: string }[]
}

const navigation = [
    { name: 'Check-in', href: '#', current: true },
    {
        name: 'Pasajeros',
        children: [
            { name: 'Vuelos y Aerolíneas', href: '#' },
            { name: 'Estacionamiento', href: '#' },
            { name: 'Transporte oficial', href: '#' },
            { name: 'Documentación SAG', href: '#' },
            { name: 'Objetos perdidos', href: '#' },
            { name: 'Traslado de mascotas', href: '#' },
        ],
    },
    {
        name: 'Corporativo',
        children: [
            { name: 'Aerolíneas y operadoras', href: '#' },
            { name: 'Correo y carga', href: '#' },
            { name: 'Proveedores', href: '#' },
            { name: 'Publicidad', href: '#' },
            { name: 'Contacto', href: '#' },
        ],
    },
    { name: 'Tiendas', href: '#' },
    {
        name: 'Servicios',
        children: [
            { name: 'Equipaje', href: '#' },
            { name: 'Asistencia especial', href: '#' },
            { name: 'Wifi', href: '#' },
            { name: 'Cajeros', href: '#' },
            { name: 'Casa de cambios', href: '#' },
            { name: 'Bancos', href: '#' },
            { name: 'Módulos informativos', href: '#' },
            { name: 'Salas VIP', href: '#' },
        ],
    },
]


function classNames(...classes: (string | boolean | undefined)[]) {
    return classes.filter(Boolean).join(' ')
}

export default function NavigationBar() {

    return (
        <Disclosure as="nav" className="relative" style={{ "backgroundColor": "#052F4A" }}>
            <div className="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                <div className="relative flex h-16 items-center justify-between">

                    <div className="flex flex-1 items-center justify-center sm:items-stretch sm:justify-center">
                        <div className="flex shrink-0 items-center gap-3">
                            <img
                                alt="Airport logo"
                                src={LogoAirport}
                                className="h-9 w-auto"
                            />

                            <div className="leading-tight">
                                <span className="block text-white text-lg font-bold tracking-wide">
                                    AIRPORT
                                </span>
                                <span className="block text-xs text-white/70">
                                    International
                                </span>
                            </div>
                        </div>

                        <div className="hidden sm:ml-6 sm:block">
                            <div className="flex space-x-4 items-center">

                                {navigation.map((item) =>
                                    !item.children ? (
                                        <a
                                            key={item.name}
                                            href={item.href}
                                            aria-current={item.current ? 'page' : undefined}
                                            className={classNames(
                                                item.current
                                                    ? 'bg-white/10 text-white'
                                                    : 'text-gray-300 hover:bg-white/5 hover:text-white',
                                                'rounded-md px-3 py-2 text-sm font-medium'
                                            )}
                                        >
                                            {item.name}
                                        </a>
                                    ) : (
                                        <Menu as="div" className="relative" key={item.name}>
                                            <MenuButton
                                                className="inline-flex items-center gap-1 rounded-md px-3 py-2 text-sm font-medium text-gray-200 hover:bg-white/5 hover:text-white"
                                            >
                                                {item.name}
                                                <ChevronDownIcon className="h-4 w-4 opacity-70 transition-transform duration-200 data-[open]:rotate-180" />
                                            </MenuButton>

                                            <MenuItems className="absolute left-0 mt-2 w-48 origin-top-left rounded-md bg-[#063a5c] shadow-lg ring-1 ring-black/20 focus:outline-none">
                                                {item.children.map((child) => (
                                                    <MenuItem key={child.name}>
                                                        {({ active }) => (
                                                            <a
                                                                href={child.href}
                                                                className={classNames(
                                                                    active && 'bg-white/10',
                                                                    'block px-4 py-2 text-sm text-white'
                                                                )}
                                                            >
                                                                {child.name}
                                                            </a>
                                                        )}
                                                    </MenuItem>
                                                ))}
                                            </MenuItems>
                                        </Menu>
                                    )
                                )}
                            </div>
                        </div>
                    </div>
                    <div className="absolute inset-y-0 left-0 flex items-center sm:hidden">
                        {/* Mobile menu button*/}
                        <DisclosureButton className="group relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:-outline-offset-1 focus:outline-indigo-500">
                            <span className="absolute -inset-0.5" />
                            <span className="sr-only">Open main menu</span>
                            <Bars3Icon aria-hidden="true" className="block size-6 group-data-open:hidden" />
                            <XMarkIcon aria-hidden="true" className="hidden size-6 group-data-open:block" />
                        </DisclosureButton>
                    </div>
                </div>
            </div>

            <DisclosurePanel className="sm:hidden">
                <div className="space-y-1 px-2 pt-2 pb-3">
                    {navigation.map((item) =>
                        !item.children ? (
                            <DisclosureButton
                                key={item.name}
                                as="a"
                                href={item.href}
                                aria-current={item.current ? 'page' : undefined}
                                className={classNames(
                                    item.current
                                        ? 'bg-white/10 text-white'
                                        : 'text-gray-300 hover:bg-white/5 hover:text-white',
                                    'block rounded-md px-3 py-2 text-base font-medium'
                                )}
                            >
                                {item.name}
                            </DisclosureButton>
                        ) : (
                            <Disclosure key={item.name}>
                                {({ open }) => (
                                    <>
                                        <DisclosureButton className="flex w-full items-center justify-between rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">
                                            {item.name}
                                            <span className="text-sm">{open ? '−' : '+'}</span>
                                        </DisclosureButton>

                                        <DisclosurePanel className="pl-4">
                                            {item.children.map((child) => (
                                                <a
                                                    key={child.name}
                                                    href={child.href}
                                                    className="block rounded-md px-3 py-2 text-sm text-gray-300 hover:bg-white/5 hover:text-white"
                                                >
                                                    {child.name}
                                                </a>
                                            ))}
                                        </DisclosurePanel>
                                    </>
                                )}
                            </Disclosure>
                        )
                    )}
                </div>
            </DisclosurePanel>

        </Disclosure>
    );
}