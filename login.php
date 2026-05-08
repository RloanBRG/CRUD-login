<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>AdminConsole - Login</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "inverse-on-surface": "#f3eff5",
                        "primary": "#000036",
                        "on-error": "#ffffff",
                        "error-container": "#ffdad6",
                        "on-primary": "#ffffff",
                        "on-secondary-fixed-variant": "#594400",
                        "on-primary-fixed-variant": "#3e4277",
                        "on-secondary-container": "#745a00",
                        "outline": "#777680",
                        "secondary-container": "#ffd259",
                        "on-tertiary": "#ffffff",
                        "on-background": "#1b1b1f",
                        "surface-bright": "#fcf8fd",
                        "surface-container-low": "#f6f2f8",
                        "tertiary": "#150500",
                        "tertiary-fixed-dim": "#fbb892",
                        "primary-fixed": "#e0e0ff",
                        "surface-container-high": "#eae7ec",
                        "on-primary-container": "#8083bd",
                        "secondary-fixed": "#ffdf93",
                        "surface-container-lowest": "#ffffff",
                        "on-error-container": "#93000a",
                        "primary-container": "#171a4e",
                        "on-tertiary-fixed-variant": "#693b1e",
                        "tertiary-container": "#3a1600",
                        "secondary": "#765b00",
                        "inverse-primary": "#bfc2ff",
                        "on-secondary-fixed": "#241a00",
                        "secondary-fixed-dim": "#edc14a",
                        "inverse-surface": "#303034",
                        "on-tertiary-container": "#b57b58",
                        "surface-dim": "#dcd9de",
                        "background": "#fcf8fd",
                        "surface": "#fcf8fd",
                        "on-secondary": "#ffffff",
                        "surface-variant": "#e5e1e7",
                        "surface-tint": "#565a90",
                        "surface-container-highest": "#e5e1e7",
                        "on-tertiary-fixed": "#321200",
                        "error": "#ba1a1a",
                        "primary-fixed-dim": "#bfc2ff",
                        "outline-variant": "#c7c5d0",
                        "tertiary-fixed": "#ffdbc9",
                        "surface-container": "#f0edf2",
                        "on-primary-fixed": "#121549",
                        "on-surface-variant": "#46464f",
                        "on-surface": "#1b1b1f"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "lg": "1.5rem",
                        "container-padding": "2rem",
                        "xs": "0.5rem",
                        "md": "1rem",
                        "sidebar-width": "280px",
                        "sm": "0.75rem",
                        "unit": "4px",
                        "xl": "2.5rem"
                    },
                    "fontFamily": {
                        "body-lg": ["Inter"],
                        "h2": ["Inter"],
                        "h1": ["Inter"],
                        "h3": ["Inter"],
                        "body-md": ["Inter"],
                        "label-sm": ["Inter"]
                    },
                    "fontSize": {
                        "body-lg": ["16px", {
                            "lineHeight": "1.6",
                            "fontWeight": "400"
                        }],
                        "h2": ["24px", {
                            "lineHeight": "1.3",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "600"
                        }],
                        "h1": ["32px", {
                            "lineHeight": "1.2",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "h3": ["20px", {
                            "lineHeight": "1.4",
                            "letterSpacing": "0",
                            "fontWeight": "600"
                        }],
                        "body-md": ["14px", {
                            "lineHeight": "1.5",
                            "fontWeight": "400"
                        }],
                        "label-sm": ["12px", {
                            "lineHeight": "1",
                            "letterSpacing": "0.05em",
                            "fontWeight": "600"
                        }]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: "FILL" 0, "wght" 400, "GRAD" 0, "opsz" 24;
            vertical-align: middle;
        }
    </style>
</head>

<body class="bg-surface-container-low font-body-md text-on-background min-h-screen flex items-center justify-center p-md">
    <main class="w-full max-w-md">
        <!-- Centered Login Card -->
        <section class="bg-surface border border-outline-variant rounded-xl shadow-xl p-xl overflow-hidden">
            <!-- Branding Header -->
            <div class="text-center mb-xl">
                <h1 class="font-h1 text-h1 text-primary-container mb-xs">AdminConsole</h1>
                <p class="font-label-sm text-label-sm text-secondary uppercase tracking-widest">Enterprise Edition</p>
            </div>
            <!-- Form Welcome Text -->
            <div class="mb-lg">
                <h2 class="font-h2 text-h2 text-primary-container mb-xs">Welcome Back</h2>
                <p class="font-body-md text-body-md text-on-surface-variant">Please enter your administrative credentials.</p>
            </div>
            <!-- Actionable Form -->
            <form action="validar.php" class="space-y-lg" method="POST">
                <!-- Email Field -->
                <div class="space-y-xs">
                    <label class="font-label-sm text-label-sm text-on-surface-variant block uppercase" for="email">Email Address</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-outline">mail</span>
                        <input class="w-full pl-[3rem] pr-md py-sm border border-outline-variant rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-primary-container focus:border-primary-container transition-all text-body-md" id="email" placeholder="admin@enterprise.com" required="" type="email" name="email"/>
                    </div>
                </div>
                <!-- Password Field -->
                <div class="space-y-xs">
                    <div class="flex justify-between items-center">
                        <label class="font-label-sm text-label-sm text-on-surface-variant block uppercase" for="password">Password</label>
                        <a class="font-label-sm text-label-sm text-secondary hover:underline" href="#">Forgot password?</a>
                    </div>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-outline">lock</span>
                        <input class="w-full pl-[3rem] pr-md py-sm border border-outline-variant rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-primary-container focus:border-primary-container transition-all text-body-md" id="password" placeholder="••••••••" required="" type="password" />
                    </div>
                </div>
                <!-- Options -->
                <div class="flex items-center">
                    <input class="w-4 h-4 text-secondary border-outline-variant rounded focus:ring-secondary" id="remember" type="checkbox" />
                    <label class="ml-sm font-body-md text-body-md text-on-surface" for="remember">Remember this device</label>
                </div>
                <!-- Submit Button -->
                <button class="w-full bg-[#dbb13b] text-on-secondary-container font-h3 text-h3 py-md rounded-lg shadow-md hover:brightness-110 transition-all duration-200 active:scale-[0.98] flex justify-center items-center gap-sm" type="submit">
                    Entrar
                    <span class="material-symbols-outlined">login</span>
                </button>
            </form>
            <!-- Footer Support -->
            <div class="mt-xl text-center">
                <p class="font-body-md text-body-md text-on-surface-variant">
                    Technical issues? <a class="text-secondary font-semibold hover:underline" href="#">Contact Support</a>
                </p>
            </div>
            <!-- Trust Indicators -->
            <div class="mt-xl pt-lg border-t border-outline-variant flex justify-center gap-xl grayscale opacity-50">
                <div class="flex items-center gap-xs">
                    <span class="material-symbols-outlined text-sm">verified_user</span>
                    <span class="font-label-sm text-[10px]">AES-256 SECURED</span>
                </div>
                <div class="flex items-center gap-xs">
                    <span class="material-symbols-outlined text-sm">language</span>
                    <span class="font-label-sm text-[10px]">GLOBAL NODE ACTIVE</span>
                </div>
            </div>
        </section>
    </main>
</body>

</html>
