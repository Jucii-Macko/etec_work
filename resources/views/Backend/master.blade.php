<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title_page')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        background: '#ffffff',
                        foreground: '#4b5563',
                        card: '#f9fafb',
                        'card-foreground': '#4b5563',
                        primary: '#0891b2',
                        'primary-foreground': '#ffffff',
                        secondary: '#6366f1',
                        'secondary-foreground': '#ffffff',
                        muted: '#f9fafb',
                        'muted-foreground': '#4b5563',
                        accent: '#6366f1',
                        'accent-foreground': '#ffffff',
                        destructive: '#ea580c',
                        'destructive-foreground': '#ffffff',
                        border: '#e5e7eb',
                        input: '#ffffff',
                        ring: '#0891b2'
                    },
                    fontFamily: {
                        'sans': ['Open Sans', 'system-ui', 'sans-serif'],
                        'serif': ['Montserrat', 'Georgia', 'serif']
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-background text-foreground">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-card border-r border-border">
            <div class="p-6">
                <h1 class="text-2xl font-serif font-black text-primary">@yield('title_side')</h1>
            </div>
            <nav class="px-4 space-y-2">
                <a href="index.php" class="flex items-center px-4 py-3 text-sm font-medium rounded-lg bg-primary text-primary-foreground">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                    </svg>
                    Dashboard Students
                </a>
                <a href="{{route('allStudent')}}" class="flex items-center px-4 py-3 text-sm font-medium rounded-lg text-muted-foreground hover:bg-muted">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                    All Student
                </a>
                <a href="{{route('pageAddStudent')}}" class="flex items-center px-4 py-3 text-sm font-medium rounded-lg text-muted-foreground hover:bg-muted">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                    </svg>
                    Add Student
                </a>
                <a href="{{route('homePage')}}" class="flex items-center px-4 py-3 text-sm font-medium rounded-lg text-muted-foreground hover:bg-muted">
                    <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 640 640">
                        <path fill="#808791" d="M512.1 376.7C457 513.4 325 430.7 325 430.7C284.5 512.5 217.6 565.1 140.4 565.4C124.3 565.4 123.8 541 140.4 541C204.8 540.7 260.9 498.3 297.6 430.9C256.5 446.8 179 458.8 136 348.7C245 303.8 295.1 359.9 314.3 394.2C324.2 369.8 331.3 343.3 335.9 314.5C335.9 314.5 196.2 336.4 186.4 216.4C305.5 168.5 339 293.1 339 293.1C340.6 276.4 342.3 240.5 342.3 239.7C342.3 239.7 236 166 304.2 74.5C428.8 117.5 365.6 236.9 365.6 236.9C366.1 238.5 366.1 260.7 365.6 270.3C365.6 270.3 410.8 181.3 502 212.8C497.8 346.8 360.1 319.2 360.1 319.2C355.7 346.6 348.9 372.6 340.1 396.7C340.1 396.7 423.1 304.9 512.1 376.7z"/>
                    </svg>
                    Go to Front-Page
                </a>
            </nav>
        </aside>
        <!-- Main Content -->
       
        
            <main class="flex-1 overflow-y-auto p-6">
                <!-- Analytics Cards -->
                @yield('content')
                <!-- Product Management Table -->
                
            </main>
        </main>
    </div>