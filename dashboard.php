<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>AdminConsole - Enterprise Edition</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
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
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .sidebar-active {
            border-left: 4px solid #dbb13b;
            /* Harvest Gold mapping */
            background-color: rgba(255, 255, 255, 0.05);
        }

        .table-row-hover:hover {
            background-color: rgba(219, 177, 59, 0.05);
        }
    </style>
</head>

<body class="bg-background text-on-background font-body-md">
    <!-- Shell Container -->
    <div class="flex min-h-screen">
        <!-- Sidebar Navigation (JSON: SideNavBar) -->
        <aside class="w-sidebar-width h-full fixed left-0 top-0 bg-primary-container shadow-md border-r border-outline-variant flex flex-col z-50">
            <!-- Brand Logo Area -->
            <div class="p-lg flex items-center space-x-md">
                <span class="font-h2 text-h2 font-bold text-white">AdminConsole</span>
            </div>
            <div class="px-md mb-lg">
                <p class="text-on-primary-container text-label-sm opacity-70 px-md">Enterprise Edition</p>
            </div>
            <!-- Navigation Links -->
            <nav class="flex-grow overflow-y-auto">
                <ul class="space-y-unit">
                    <li>
                        <a class="flex items-center px-lg py-md border-l-4 border-secondary text-secondary font-semibold bg-white/5 transition-colors duration-200" href="#">
                            <span class="material-symbols-outlined mr-md" data-icon="dashboard">dashboard</span>
                            <span class="font-body-md">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="text-on-primary-container hover:text-white flex items-center px-lg py-md hover:bg-white/10 transition-colors duration-200" href="#">
                            <span class="material-symbols-outlined mr-md" data-icon="group">group</span>
                            <span class="font-body-md">User Management</span>
                        </a>
                    </li>
                    <li>
                        <a class="text-on-primary-container hover:text-white flex items-center px-lg py-md hover:bg-white/10 transition-colors duration-200" href="#">
                            <span class="material-symbols-outlined mr-md" data-icon="analytics">analytics</span>
                            <span class="font-body-md">System Analytics</span>
                        </a>
                    </li>
                    <li>
                        <a class="text-on-primary-container hover:text-white flex items-center px-lg py-md hover:bg-white/10 transition-colors duration-200" href="#">
                            <span class="material-symbols-outlined mr-md" data-icon="history_edu">history_edu</span>
                            <span class="font-body-md">Audit Logs</span>
                        </a>
                    </li>
                    <li>
                        <a class="text-on-primary-container hover:text-white flex items-center px-lg py-md hover:bg-white/10 transition-colors duration-200" href="#">
                            <span class="material-symbols-outlined mr-md" data-icon="shield">shield</span>
                            <span class="font-body-md">Security Settings</span>
                        </a>
                    </li>
                    <li>
                        <a class="text-on-primary-container hover:text-white flex items-center px-lg py-md hover:bg-white/10 transition-colors duration-200" href="#">
                            <span class="material-symbols-outlined mr-md" data-icon="contact_support">contact_support</span>
                            <span class="font-body-md">Support Tickets</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- Bottom CTA & Profile -->
            <div class="p-lg mt-auto border-t border-white/10">
                <nav class="mb-md">
                    <ul>
                        <li>
                            <a class="text-on-primary-container hover:text-white flex items-center px-lg py-md hover:bg-white/10 transition-colors duration-200 -mx-lg" href="#">
                                <span class="material-symbols-outlined mr-md" data-icon="logout">logout</span>
                                <span class="font-body-md">Logout</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <button class="w-full bg-secondary text-on-secondary font-semibold py-md rounded-lg shadow-md active:scale-95 transition-transform">
                    Generate Report
                </button>
                <div class="mt-lg flex items-center space-x-md text-white/80">
                    <img alt="System Administrator Logo" class="w-10 h-10 rounded-full border-2 border-secondary object-cover" data-alt="A professional headshot of a mature corporate executive wearing a tailored charcoal suit and a crisp white shirt. The background is a blurred high-end office environment with soft morning light filtering through glass partitions. The overall mood is authoritative, reliable, and sophisticated, reflecting a modern corporate leadership aesthetic with natural, balanced skin tones." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBkkprmktmySXiU3rUxWIpvfRc6v-SyG3nvwMQtbvh02EqUBXXt4hcI8yT-Wr3cedb8uZRpN4hHR2uAp6pbbtTxJObo00IEvolI23QIPjKNXYIkhBWrJ52RYRUYwfb1R43QKrxcZXQHTFJGzZCJy0aZOwJ9u2znNWKWOcp3EtrvLX2AFx1wVhfLQdSNk6SW8Bv8TmVtTLZDu4Tm-ADMLyx6-ZLfKq4Ls9ES0Rr-CPYERxI5P8yb_n95UF3p1B2KLPFTHEbUusV43lE" />
                    <div>
                        <p class="text-label-sm font-bold">Admin User</p>
                        <p class="text-[10px] opacity-60">System Admin</p>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Main Content Area -->
        <main class="flex-grow ml-sidebar-width min-h-screen flex flex-col">
            <!-- Top Navigation (JSON: TopNavBar) -->
            <header class="flex justify-between items-center h-16 px-container-padding bg-surface border-b border-outline-variant sticky top-0 z-40">
                <div class="flex items-center flex-grow max-w-xl">
                    <div class="relative w-full focus-within:ring-2 focus-within:ring-primary rounded-lg transition-all">
                        <span class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
                        <input class="w-full pl-xl pr-md py-xs bg-surface-container-low border-none rounded-lg text-body-md focus:ring-0" placeholder="Search system resources..." type="text" />
                    </div>
                </div>
                <div class="flex items-center space-x-lg">
                    <button class="text-on-surface-variant hover:text-primary transition-colors">
                        <span class="material-symbols-outlined">notifications</span>
                    </button>
                    <button class="text-on-surface-variant hover:text-primary transition-colors">
                        <span class="material-symbols-outlined">settings</span>
                    </button>
                    <button class="text-on-surface-variant hover:text-primary transition-colors">
                        <span class="material-symbols-outlined">help</span>
                    </button>
                    <div class="h-8 w-px bg-outline-variant mx-xs"></div>
                    <span class="text-primary font-bold text-body-md">System Admin</span>
                </div>
            </header>
            <!-- Dashboard Content -->
            <section class="p-container-padding space-y-xl">
                <!-- Welcome Section -->
                <div>
                    <h1 class="font-h1 text-h1 text-primary">System Dashboard</h1>
                    <p class="text-on-surface-variant">Real-time oversight and administrative control panel.</p>
                </div>
                <!-- Statistics Cards (Bento Style) -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-lg">
                    <!-- Total Users -->
                    <div class="bg-surface-container-lowest p-lg rounded-xl shadow-[0_4px_6px_-1px_rgb(0_0_0/0.05)] border border-outline-variant flex flex-col justify-between h-40">
                        <div class="flex justify-between items-start">
                            <span class="text-label-sm text-on-surface-variant uppercase tracking-wider">Total Users</span>
                            <span class="p-xs bg-primary-fixed text-on-primary-fixed rounded-lg">
                                <span class="material-symbols-outlined text-[20px]">group</span>
                            </span>
                        </div>
                        <div class="mt-md">
                            <h2 class="text-h1 font-h1 text-primary">12,482</h2>
                            <div class="flex items-center text-[12px] text-green-600 font-bold mt-xs">
                                <span class="material-symbols-outlined text-[14px] mr-unit">trending_up</span>
                                8.2% from last month
                            </div>
                        </div>
                    </div>
                    <!-- Active Sessions -->
                    <div class="bg-surface-container-lowest p-lg rounded-xl shadow-[0_4px_6px_-1px_rgb(0_0_0/0.05)] border border-outline-variant flex flex-col justify-between h-40">
                        <div class="flex justify-between items-start">
                            <span class="text-label-sm text-on-surface-variant uppercase tracking-wider">Active Sessions</span>
                            <span class="p-xs bg-secondary-fixed text-on-secondary-fixed rounded-lg">
                                <span class="material-symbols-outlined text-[20px]">bolt</span>
                            </span>
                        </div>
                        <div class="mt-md">
                            <h2 class="text-h1 font-h1 text-primary">1,102</h2>
                            <div class="flex items-center text-[12px] text-primary-container font-bold mt-xs">
                                <span class="material-symbols-outlined text-[14px] mr-unit">analytics</span>
                                Stable performance
                            </div>
                        </div>
                    </div>
                    <!-- System Health -->
                    <div class="bg-surface-container-lowest p-lg rounded-xl shadow-[0_4px_6px_-1px_rgb(0_0_0/0.05)] border border-outline-variant flex flex-col justify-between h-40">
                        <div class="flex justify-between items-start">
                            <span class="text-label-sm text-on-surface-variant uppercase tracking-wider">System Health</span>
                            <span class="p-xs bg-error-container text-on-error-container rounded-lg">
                                <span class="material-symbols-outlined text-[20px]">monitor_heart</span>
                            </span>
                        </div>
                        <div class="mt-md">
                            <h2 class="text-h1 font-h1 text-primary">99.9%</h2>
                            <div class="flex items-center text-[12px] text-on-surface-variant font-bold mt-xs">
                                <span class="material-symbols-outlined text-[14px] mr-unit">check_circle</span>
                                All systems operational
                            </div>
                        </div>
                    </div>
                </div>
                <!-- User Management Section -->
                <div class="bg-surface-container-lowest rounded-xl shadow-[0_4px_6px_-1px_rgb(0_0_0/0.05)] border border-outline-variant overflow-hidden">
                    <div class="p-lg border-b border-outline-variant flex flex-col md:flex-row justify-between items-start md:items-center gap-md">
                        <div>
                            <h3 class="font-h3 text-h3 text-primary">User Management</h3>
                            <p class="text-body-md text-on-surface-variant">Review and manage enterprise system access.</p>
                        </div>
                        <div class="flex items-center space-x-md w-full md:w-auto">
                            <div class="relative flex-grow">
                                <span class="material-symbols-outlined absolute left-sm top-1/2 -translate-y-1/2 text-on-surface-variant text-[20px]">search</span>
                                <input class="pl-xl pr-md py-xs bg-surface-container-low border border-outline-variant rounded-lg text-body-md focus:ring-2 focus:ring-primary w-full md:w-64" placeholder="Search users..." type="text" />
                            </div>
                            <button class="bg-secondary text-on-secondary font-bold px-lg py-xs rounded-lg flex items-center shadow-sm hover:brightness-110 active:scale-95 transition-all" id="addUserBtn">
                                <span class="material-symbols-outlined mr-xs text-[18px]">person_add</span>
                                Add User
                            </button>
                        </div>
                    </div>
                    <!-- Data Table -->
                    <div class="overflow-x-auto">
                        <table class="w-full text-left">
                            <thead class="bg-surface-container-low border-b border-outline-variant">
                                <tr>
                                    <th class="px-lg py-md text-label-sm text-on-surface-variant font-bold uppercase">ID</th>
                                    <th class="px-lg py-md text-label-sm text-on-surface-variant font-bold uppercase">User Profile</th>
                                    <th class="px-lg py-md text-label-sm text-on-surface-variant font-bold uppercase">Email Address</th>
                                    <th class="px-lg py-md text-label-sm text-on-surface-variant font-bold uppercase">Status</th>
                                    <th class="px-lg py-md text-label-sm text-on-surface-variant font-bold uppercase text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-outline-variant">
                                <tr class="table-row-hover transition-colors">
                                    <td class="px-lg py-md font-bold text-primary">#USR-001</td>
                                    <td class="px-lg py-md">
                                        <div class="flex items-center space-x-md">
                                            <div class="w-8 h-8 rounded-full bg-primary-fixed text-on-primary-fixed flex items-center justify-center font-bold text-[12px]">JS</div>
                                            <span class="font-semibold text-primary">Jonathan Sterling</span>
                                        </div>
                                    </td>
                                    <td class="px-lg py-md text-on-surface-variant">j.sterling@enterprise.com</td>
                                    <td class="px-lg py-md">
                                        <span class="bg-green-100 text-green-800 text-[10px] font-bold px-sm py-unit rounded-full uppercase tracking-tighter border border-green-200">Active</span>
                                    </td>
                                    <td class="px-lg py-md text-right space-x-xs">
                                        <button class="p-xs hover:bg-surface-container-high rounded transition-colors text-primary" title="Edit">
                                            <span class="material-symbols-outlined text-[20px]">edit</span>
                                        </button>
                                        <button class="p-xs hover:bg-error-container rounded transition-colors text-error" title="Delete">
                                            <span class="material-symbols-outlined text-[20px]">delete</span>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="table-row-hover transition-colors">
                                    <td class="px-lg py-md font-bold text-primary">#USR-002</td>
                                    <td class="px-lg py-md">
                                        <div class="flex items-center space-x-md">
                                            <div class="w-8 h-8 rounded-full bg-secondary-fixed text-on-secondary-fixed flex items-center justify-center font-bold text-[12px]">AW</div>
                                            <span class="font-semibold text-primary">Alicia Wright</span>
                                        </div>
                                    </td>
                                    <td class="px-lg py-md text-on-surface-variant">a.wright@enterprise.com</td>
                                    <td class="px-lg py-md">
                                        <span class="bg-green-100 text-green-800 text-[10px] font-bold px-sm py-unit rounded-full uppercase tracking-tighter border border-green-200">Active</span>
                                    </td>
                                    <td class="px-lg py-md text-right space-x-xs">
                                        <button class="p-xs hover:bg-surface-container-high rounded transition-colors text-primary" title="Edit">
                                            <span class="material-symbols-outlined text-[20px]">edit</span>
                                        </button>
                                        <button class="p-xs hover:bg-error-container rounded transition-colors text-error" title="Delete">
                                            <span class="material-symbols-outlined text-[20px]">delete</span>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="table-row-hover transition-colors">
                                    <td class="px-lg py-md font-bold text-primary">#USR-003</td>
                                    <td class="px-lg py-md">
                                        <div class="flex items-center space-x-md">
                                            <div class="w-8 h-8 rounded-full bg-surface-variant text-on-surface-variant flex items-center justify-center font-bold text-[12px]">MB</div>
                                            <span class="font-semibold text-primary">Marcus Bennett</span>
                                        </div>
                                    </td>
                                    <td class="px-lg py-md text-on-surface-variant">m.bennett@enterprise.com</td>
                                    <td class="px-lg py-md">
                                        <span class="bg-surface-container-high text-on-surface-variant text-[10px] font-bold px-sm py-unit rounded-full uppercase tracking-tighter border border-outline-variant">Pending</span>
                                    </td>
                                    <td class="px-lg py-md text-right space-x-xs">
                                        <button class="p-xs hover:bg-surface-container-high rounded transition-colors text-primary" title="Edit">
                                            <span class="material-symbols-outlined text-[20px]">edit</span>
                                        </button>
                                        <button class="p-xs hover:bg-error-container rounded transition-colors text-error" title="Delete">
                                            <span class="material-symbols-outlined text-[20px]">delete</span>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="table-row-hover transition-colors">
                                    <td class="px-lg py-md font-bold text-primary">#USR-004</td>
                                    <td class="px-lg py-md">
                                        <div class="flex items-center space-x-md">
                                            <div class="w-8 h-8 rounded-full bg-primary-fixed text-on-primary-fixed flex items-center justify-center font-bold text-[12px]">CP</div>
                                            <span class="font-semibold text-primary">Catherine Pierce</span>
                                        </div>
                                    </td>
                                    <td class="px-lg py-md text-on-surface-variant">c.pierce@enterprise.com</td>
                                    <td class="px-lg py-md">
                                        <span class="bg-green-100 text-green-800 text-[10px] font-bold px-sm py-unit rounded-full uppercase tracking-tighter border border-green-200">Active</span>
                                    </td>
                                    <td class="px-lg py-md text-right space-x-xs">
                                        <button class="p-xs hover:bg-surface-container-high rounded transition-colors text-primary" title="Edit">
                                            <span class="material-symbols-outlined text-[20px]">edit</span>
                                        </button>
                                        <button class="p-xs hover:bg-error-container rounded transition-colors text-error" title="Delete">
                                            <span class="material-symbols-outlined text-[20px]">delete</span>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Pagination -->
                    <div class="p-md border-t border-outline-variant flex justify-between items-center bg-surface-container-low">
                        <span class="text-label-sm text-on-surface-variant">Showing 1-4 of 1,240 records</span>
                        <div class="flex space-x-xs">
                            <button class="p-xs bg-surface-container-lowest border border-outline-variant rounded hover:bg-white transition-all disabled:opacity-50" disabled="">
                                <span class="material-symbols-outlined text-[18px]">chevron_left</span>
                            </button>
                            <button class="px-md py-xs bg-secondary text-on-secondary rounded text-label-sm font-bold">1</button>
                            <button class="px-md py-xs bg-surface-container-lowest border border-outline-variant rounded hover:bg-white text-label-sm font-bold">2</button>
                            <button class="px-md py-xs bg-surface-container-lowest border border-outline-variant rounded hover:bg-white text-label-sm font-bold">3</button>
                            <button class="p-xs bg-surface-container-lowest border border-outline-variant rounded hover:bg-white transition-all">
                                <span class="material-symbols-outlined text-[18px]">chevron_right</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Featured Analytics (Asymmetric/High-End) -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-lg h-auto lg:h-[400px]">
                    <div class="lg:col-span-8 bg-primary-container text-white p-xl rounded-2xl relative overflow-hidden flex flex-col justify-between">
                        <div class="relative z-10">
                            <h3 class="text-h2 font-h2 mb-md">System Traffic Optimization</h3>
                            <p class="text-on-primary-container max-w-md">Our global infrastructure observed a 15% increase in efficiency across EMEA nodes after the latest firmware deployment.</p>
                        </div>
                        <div class="relative z-10 grid grid-cols-2 md:grid-cols-4 gap-lg mt-xl">
                            <div>
                                <p class="text-label-sm opacity-60">Uptime</p>
                                <p class="text-h3 font-bold">99.98%</p>
                            </div>
                            <div>
                                <p class="text-label-sm opacity-60">Avg Latency</p>
                                <p class="text-h3 font-bold">14ms</p>
                            </div>
                            <div>
                                <p class="text-label-sm opacity-60">Load Factor</p>
                                <p class="text-h3 font-bold">42%</p>
                            </div>
                            <div>
                                <p class="text-label-sm opacity-60">Node Status</p>
                                <div class="flex items-center space-x-xs mt-unit">
                                    <div class="w-2 h-2 rounded-full bg-green-400"></div>
                                    <span class="text-body-md font-bold">Global Ready</span>
                                </div>
                            </div>
                        </div>
                        <!-- Abstract Background Decoration -->
                        <div class="absolute -right-20 -bottom-20 w-80 h-80 bg-white/5 rounded-full blur-3xl"></div>
                        <div class="absolute right-10 top-10 w-40 h-40 border border-white/10 rounded-full"></div>
                    </div>
                    <div class="lg:col-span-4 bg-secondary-container p-xl rounded-2xl flex flex-col justify-between">
                        <div class="space-y-md">
                            <div class="w-12 h-12 bg-secondary text-on-secondary rounded-xl flex items-center justify-center shadow-lg">
                                <span class="material-symbols-outlined text-[28px]">verified_user</span>
                            </div>
                            <h3 class="text-h3 font-h3 text-on-secondary-container">Security Audit</h3>
                            <p class="text-body-md text-on-secondary-container/80">Last comprehensive security scan completed successfully without any critical vulnerabilities detected.</p>
                        </div>
                        <button class="bg-primary text-white font-bold py-md rounded-xl mt-lg hover:bg-primary/90 transition-all">
                            View Security Report
                        </button>
                    </div>
                </div>
            </section>
            <!-- Sticky Bottom FAB (Conditional for Mobile) -->
            <button class="md:hidden fixed bottom-lg right-lg bg-secondary text-on-secondary w-14 h-14 rounded-full shadow-2xl flex items-center justify-center active:scale-95 transition-transform z-50">
                <span class="material-symbols-outlined">add</span>
            </button>
        </main>
    </div>
    <!-- Add New User Modal -->
    <div class="fixed inset-0 bg-primary/60 backdrop-blur-md z-[100] flex items-center justify-center hidden" id="userModal">
        <div class="bg-surface p-xl rounded-2xl shadow-2xl w-full max-w-md border border-outline-variant animate-in fade-in zoom-in duration-200">
            <div class="flex justify-between items-center mb-xl">
                <h3 class="text-h2 font-h2 text-primary">Add New User</h3>
                <button class="p-xs hover:bg-surface-container-high rounded-full transition-colors text-on-surface-variant" onclick="closeUserModal()">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            <form class="space-y-lg" method="POST" action="cadastrar.php">
                <div class="space-y-unit">
                    <label class="text-label-sm text-on-surface-variant font-bold uppercase tracking-wider">Name</label>
                    <input class="w-full bg-surface-container-low border border-outline-variant rounded-lg px-md py-sm focus:ring-2 focus:ring-primary outline-none transition-all placeholder:text-outline/50" name="nome" placeholder="Full Name" required="" type="text" />
                </div>
                <div class="space-y-unit">
                    <label class="text-label-sm text-on-surface-variant font-bold uppercase tracking-wider">Email Address</label>
                    <input class="w-full bg-surface-container-low border border-outline-variant rounded-lg px-md py-sm focus:ring-2 focus:ring-primary outline-none transition-all placeholder:text-outline/50" name="email" placeholder="Email Address" required="" type="email" />
                </div>
                <div class="space-y-unit">
                    <label class="text-label-sm text-on-surface-variant font-bold uppercase tracking-wider">Password</label>
                    <input class="w-full bg-surface-container-low border border-outline-variant rounded-lg px-md py-sm focus:ring-2 focus:ring-primary outline-none transition-all placeholder:text-outline/50" name="senha" placeholder="Password" required="" type="password" />
                </div>
                <div class="pt-xl flex gap-md">
                    <button class="flex-grow py-md border border-outline-variant rounded-lg font-bold text-on-surface-variant hover:bg-surface-container-high transition-all" onclick="closeUserModal()" type="button">
                        Cancel
                    </button>
                    <button class="flex-grow py-md bg-secondary text-on-secondary rounded-lg font-bold shadow-lg hover:brightness-110 active:scale-95 transition-all" type="submit">
                        Create User
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script>
        const userModal = document.getElementById('userModal');
        const addUserBtn = document.getElementById('addUserBtn');

        function openUserModal() {
            userModal.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        }

        function closeUserModal() {
            userModal.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }

        // Event Listeners
        if (addUserBtn) {
            addUserBtn.addEventListener('click', openUserModal);
        }

        // Close modal on click outside content
        userModal.addEventListener('click', (e) => {
            if (e.target === userModal) {
                closeUserModal();
            }
        });

        // Close modal on escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !userModal.classList.contains('hidden')) {
                closeUserModal();
            }
        });
    </script>
</body>

</html>