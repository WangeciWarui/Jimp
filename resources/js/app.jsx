import '../css/app.css';
import './bootstrap';
import React from 'react';
import ReactDOM from 'react-dom/client';
//import { App } from './App';

import { createInertiaApp } from '@inertiajs/react';
import { resolvePageComponent } from './index.jsx';
import { createRoot } from 'react-dom/client';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            console.log(Object.keys(pages))
            `./Pages/${name}.jsx`,
            import.meta.glob('./pages/Auth/.jsx,'),
            import.meta.glob('./pages/Auth/.tsx,'),
        ),
    setup({ el, App, props }) {
        const root = createRoot(el);

        root.render(<App {...props} />);
    },
    progress: {
        color: '#4B5563',
    },
});
