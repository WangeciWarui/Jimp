export async function resolvePageComponent(path, pages) {
    console.groupCollapsed(`🔍 Inertia Page Resolver`);
    console.log(`Requested page path:`, path);
    console.log(`Available pages:`, Object.keys(pages));

    for (const p of (Array.isArray(path) ? path : [path])) {
        const page = pages[p];

        if (typeof page !== 'undefined') {
            console.log(`✅ Found and loaded page: ${p}`);
            console.groupEnd();
            return typeof page === 'function' ? page() : page;
        }
    }

    console.error(`❌ Page not found: ${path}`);
    console.warn(`Tip: Check file name, extension, or import path in app.jsx`);
    console.groupEnd();

    // Instead of throwing an error that breaks everything,
    // show a fallback "Not Found" page for debugging
    return () => (
        <div style={{
            display: 'flex',
            height: '100vh',
            flexDirection: 'column',
            justifyContent: 'center',
            alignItems: 'center',
            background: '#fafafa',
            color: '#444',
            fontFamily: 'sans-serif',
        }}>
            <h1>⚠️ Page Not Found</h1>
            <p>Could not resolve: <strong>{path}</strong></p>
            <p>Check console for details.</p>
        </div>
    );
}
