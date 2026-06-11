<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - PharmaStock</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Poppins', 'sans-serif'] },
                    animation: { 'fade-in': 'fadeIn 0.5s ease-out forwards' },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(15px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    }
                }
            }
        }
    </script>
    <style>body { font-weight: 300; }</style>
</head>
<body class="bg-slate-50 text-slate-700 text-sm antialiased flex h-screen overflow-hidden">

    <!-- Sidebar -->
    <aside class="w-64 bg-slate-900 border-r border-slate-800 flex flex-col shadow-lg z-10 text-slate-300">
        <div class="h-16 flex items-center px-6 border-b border-slate-800">
            <i class="fa-solid fa-shield-halved text-blue-400 text-xl mr-3"></i>
            <span class="font-semibold text-white text-base">Pharma Admin</span>
        </div>
        <div class="p-4 flex-1">
            <p class="text-[10px] text-slate-500 font-medium mb-4 uppercase tracking-wider">Administration</p>
            <nav class="space-y-2">
                <!-- Actif -->
                <a href="#" class="w-full flex items-center px-4 py-2.5 text-blue-400 bg-slate-800/50 rounded-lg transition-all duration-200 font-medium border border-slate-700">
                    <i class="fa-solid fa-chart-pie w-5"></i> Rapports Financiers
                </a>
                <a href="#" class="w-full flex items-center px-4 py-2.5 text-slate-400 hover:bg-slate-800 hover:text-slate-200 rounded-lg transition-all duration-200">
                    <i class="fa-solid fa-users-gear w-5"></i> Utilisateurs
                </a>
                <a href="#" class="w-full flex items-center px-4 py-2.5 text-slate-400 hover:bg-slate-800 hover:text-slate-200 rounded-lg transition-all duration-200">
                    <i class="fa-solid fa-server w-5"></i> Base Claude Bernard
                </a>
            </nav>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 overflow-y-auto p-8 animate-fade-in bg-slate-50">
        <header class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-2xl font-semibold text-slate-800">Espace Administrateur</h1>
                <p class="text-slate-500 text-xs mt-1">Gestion financière des pertes et configuration système</p>
            </div>
            <button class="bg-slate-800 text-white px-4 py-2 rounded-lg hover:bg-slate-900 hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300 flex items-center">
                <i class="fa-solid fa-file-pdf mr-2"></i> Rapport Périmés
            </button>
        </header>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Rapport Perte -->
            <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6 hover:shadow-md transition-all">
                <div class="flex justify-between items-start mb-6">
                    <div>
                        <h2 class="text-sm font-medium text-slate-800">Valeur du stock périmé</h2>
                        <p class="text-xs text-slate-400 mt-1">Estimation des pertes ce mois-ci</p>
                    </div>
                    <span class="bg-slate-100 text-slate-600 text-[10px] px-2.5 py-1 rounded-md uppercase font-medium">Juin 2026</span>
                </div>
                
                <div class="mb-8 flex items-end gap-3">
                    <h3 class="text-4xl font-semibold text-slate-800">4 250 <span class="text-lg text-slate-400 font-normal">MAD</span></h3>
                    <div class="bg-red-50 text-red-600 px-2 py-0.5 rounded text-[10px] font-medium flex items-center mb-1 border border-red-100">
                        <i class="fa-solid fa-arrow-trend-up mr-1"></i> +12%
                    </div>
                </div>

                <!-- Simple CSS Bar Chart -->
                <div class="h-32 w-full flex items-end gap-2 pt-4 border-b border-slate-100">
                    <div class="w-1/6 bg-slate-200 rounded-t-sm h-[40%] hover:bg-blue-300 transition-colors cursor-pointer relative group">
                        <span class="absolute -top-6 left-1/2 -translate-x-1/2 text-[10px] bg-slate-800 text-white px-2 py-0.5 rounded opacity-0 group-hover:opacity-100 transition-opacity">Jan</span>
                    </div>
                    <div class="w-1/6 bg-slate-200 rounded-t-sm h-[60%] hover:bg-blue-300 transition-colors cursor-pointer"></div>
                    <div class="w-1/6 bg-slate-200 rounded-t-sm h-[30%] hover:bg-blue-300 transition-colors cursor-pointer"></div>
                    <div class="w-1/6 bg-slate-200 rounded-t-sm h-[80%] hover:bg-blue-300 transition-colors cursor-pointer"></div>
                    <div class="w-1/6 bg-slate-200 rounded-t-sm h-[50%] hover:bg-blue-300 transition-colors cursor-pointer"></div>
                    <div class="w-1/6 bg-blue-500 rounded-t-sm h-[90%] shadow-[0_0_10px_rgba(59,130,246,0.3)] cursor-pointer"></div>
                </div>
                <div class="flex justify-between text-[9px] text-slate-400 mt-2 uppercase">
                    <span>Jan</span><span>Fev</span><span>Mar</span><span>Avr</span><span>Mai</span><span>Juin</span>
                </div>
            </div>

            <!-- System Settings Widget -->
            <div class="space-y-6">
                <div class="bg-gradient-to-br from-blue-600 to-indigo-700 rounded-xl shadow-md p-6 text-white relative overflow-hidden group">
                    <div class="absolute -right-4 -top-4 opacity-10 transform group-hover:scale-110 transition-transform duration-500">
                        <i class="fa-solid fa-database text-9xl"></i>
                    </div>
                    <h2 class="text-sm font-medium mb-1 relative z-10 flex items-center">
                        <span class="w-2 h-2 rounded-full bg-green-400 mr-2 animate-pulse shadow-[0_0_8px_rgba(74,222,128,0.8)]"></span> API Claude Bernard
                    </h2>
                    <p class="text-[11px] text-blue-100 mb-5 relative z-10 w-4/5">La synchronisation avec la base de données nationale des médicaments est active.</p>
                    <button class="bg-white/10 backdrop-blur-sm border border-white/20 text-white text-xs px-4 py-2 rounded-lg hover:bg-white/20 transition-colors relative z-10">
                        Forcer la synchronisation
                    </button>
                </div>
                
                <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6 hover:shadow-md transition-all">
                    <h2 class="text-sm font-medium text-slate-800 mb-4 flex items-center">
                        <i class="fa-solid fa-user-shield text-slate-400 mr-2"></i> Accès Récent
                    </h2>
                    <div class="flex items-center justify-between p-3 bg-slate-50 rounded-lg border border-slate-100 mb-2">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-slate-200 flex items-center justify-center text-slate-500 text-xs">A</div>
                            <div>
                                <p class="text-xs font-medium text-slate-700">Amine (Pharmacien)</p>
                                <p class="text-[10px] text-slate-400">Connecté il y a 5 min</p>
                            </div>
                        </div>
                        <span class="text-[10px] bg-green-100 text-green-700 px-2 py-0.5 rounded-full font-medium">Actif</span>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>