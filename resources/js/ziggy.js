const Ziggy = {
    url: "http://localhost:8888/princetonhmo/public",
    port: 8888,
    defaults: {},
    routes: {
        "debugbar.openhandler": {
            uri: "_debugbar/open",
            methods: ["GET", "HEAD"],
        },
        "debugbar.clockwork": {
            uri: "_debugbar/clockwork/{id}",
            methods: ["GET", "HEAD"],
        },
        "debugbar.assets.css": {
            uri: "_debugbar/assets/stylesheets",
            methods: ["GET", "HEAD"],
        },
        "debugbar.assets.js": {
            uri: "_debugbar/assets/javascript",
            methods: ["GET", "HEAD"],
        },
        "debugbar.cache.delete": {
            uri: "_debugbar/cache/{key}/{tags?}",
            methods: ["DELETE"],
        },
        "pages.home": { uri: "/", methods: ["GET", "HEAD"] },
        "pages.board": { uri: "board", methods: ["GET", "HEAD"] },
        "pages.team": { uri: "team", methods: ["GET", "HEAD"] },
        "pages.individual": { uri: "individual", methods: ["GET", "HEAD"] },
        "pages.corporate": { uri: "corporate", methods: ["GET", "HEAD"] },
        "pages.aged": { uri: "aged", methods: ["GET", "HEAD"] },
        "pages.cart": { uri: "cart", methods: ["GET", "HEAD"] },
        "pages.enrollee": { uri: "enrollee", methods: ["GET", "HEAD"] },
        "pages.buy": { uri: "buy", methods: ["GET", "HEAD"] },
        "pages.quote": { uri: "quote", methods: ["GET", "HEAD"] },
        "pages.resources": { uri: "resources", methods: ["GET", "HEAD"] },
        "pages.provider": { uri: "provider", methods: ["GET", "HEAD"] },
        "pages.providers": { uri: "providers", methods: ["GET", "HEAD"] },
        "pages.benefits": { uri: "benefits", methods: ["GET", "HEAD"] },
        "pages.contact": { uri: "contact", methods: ["GET", "HEAD"] },
        "pages.faq": { uri: "faq", methods: ["GET", "HEAD"] },
        "pages.checkout": { uri: "checkout", methods: ["GET", "HEAD"] },
        dashboard: { uri: "dashboard", methods: ["GET", "HEAD"] },
        register: { uri: "register", methods: ["GET", "HEAD"] },
        login: { uri: "login", methods: ["GET", "HEAD"] },
        "password.request": {
            uri: "forgot-password",
            methods: ["GET", "HEAD"],
        },
        "password.email": { uri: "forgot-password", methods: ["POST"] },
        "password.reset": {
            uri: "reset-password/{token}",
            methods: ["GET", "HEAD"],
        },
        "password.update": { uri: "reset-password", methods: ["POST"] },
        "verification.notice": {
            uri: "verify-email",
            methods: ["GET", "HEAD"],
        },
        "verification.verify": {
            uri: "verify-email/{id}/{hash}",
            methods: ["GET", "HEAD"],
        },
        "verification.send": {
            uri: "email/verification-notification",
            methods: ["POST"],
        },
        "password.confirm": {
            uri: "confirm-password",
            methods: ["GET", "HEAD"],
        },
        logout: { uri: "logout", methods: ["POST"] },
    },
};

if (typeof window !== "undefined" && typeof window.Ziggy !== "undefined") {
    Object.assign(Ziggy.routes, window.Ziggy.routes);
}

export { Ziggy };