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

    <aside class="w-64 bg-slate-950 border-r border-slate-900 flex flex-col shadow-xl z-10 text-slate-400">
        <div class="h-16 flex items-center px-6 border-b border-slate-900/50">
            <div class="w-8 h-8 rounded-lg bg-blue-600/10 flex items-center justify-center mr-3 border border-blue-500/20">
                <i class="fa-solid fa-shield-halved text-blue-500 text-sm"></i>
            </div>
            <span class="font-semibold text-white text-base tracking-tight">Pharma Admin</span>
        </div>
        
        <div class="p-4 flex-1 overflow-y-auto">
            <p class="text-[10px] text-slate-600 font-semibold mb-4 uppercase tracking-wider px-2">Navigation</p>
            <nav class="space-y-1.5">
                <a href="#" class="w-full flex items-center px-4 py-2.5 text-white bg-blue-600 rounded-xl transition-all duration-200 font-medium shadow-md shadow-blue-600/10">
                    <i class="fa-solid fa-chart-pie w-5 text-sm"></i> Vue d'ensemble
                </a>
                <a href="#" class="w-full flex items-center px-4 py-2.5 hover:bg-slate-900 hover:text-slate-200 rounded-xl transition-all duration-150 group">
                    <i class="fa-solid fa-users-gear w-5 text-sm text-slate-500 group-hover:text-slate-400"></i> Utilisateurs
                </a>
                <a href="#" class="w-full flex items-center px-4 py-2.5 hover:bg-slate-900 hover:text-slate-200 rounded-xl transition-all duration-150 group">
                    <i class="fa-solid fa-server w-5 text-sm text-slate-500 group-hover:text-slate-400"></i> Base Claude Bernard
                </a>
            </nav>
        </div>

        <div class="p-4 border-t border-slate-900 bg-slate-950/40">
            <div class="flex items-center gap-3 mb-4 px-2 py-1.5 rounded-xl bg-slate-900/40 border border-slate-900">
                <div class="w-9 h-9 rounded-xl bg-gradient-to-tr from-blue-600 to-indigo-600 text-white flex items-center justify-center font-semibold text-sm shadow-inner">
                    AD
                </div>
                <div class="flex-1 overflow-hidden">
                    <p class="text-xs font-semibold text-slate-200 truncate">Anass (Directeur)</p>
                    <p class="text-[10px] text-slate-500 truncate">admin@pharmastock.ma</p>
                </div>
            </div>
            <a href="#" class="w-full flex items-center px-4 py-2.5 text-xs text-red-400 hover:bg-red-500/10 hover:text-red-300 rounded-xl transition-all duration-200 font-medium group">
                <i class="fa-solid fa-arrow-right-from-bracket w-5 text-sm text-red-400/70 group-hover:text-red-400"></i> Déconnexion
            </a>
        </div>
    </aside>

    <main class="flex-1 overflow-y-auto p-8 animate-fade-in bg-slate-50">
        <header class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-2xl font-semibold text-slate-800 tracking-tight">Espace Administrateur</h1>
                <p class="text-slate-500 text-xs mt-1">Gestion financière des pertes et configuration globale du système</p>
            </div>
            <button class="bg-slate-900 text-white px-4 py-2.5 rounded-xl hover:bg-slate-800 hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300 flex items-center text-xs font-medium">
                <i class="fa-solid fa-file-pdf mr-2"></i> Exporter Rapport Périmés
            </button>
        </header>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            
            <div class="lg:col-span-2 space-y-4">
                <p class="text-xs font-semibold uppercase tracking-wider text-slate-400 mb-1">Indicateurs clés</p>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex flex-col justify-between group hover:shadow-md transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-xs font-medium text-slate-400">Pertes du mois (Périmés)</span>
                            <div class="w-8 h-8 rounded-xl bg-red-50 text-red-500 flex items-center justify-center text-xs shadow-inner">
                                <i class="fa-solid fa-chart-line-down"></i>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-2xl font-semibold text-slate-800">4 250 <span class="text-xs font-normal text-slate-400">MAD</span></h3>
                            <div class="mt-2 flex items-center gap-1.5">
                                <span class="inline-flex items-center text-[10px] font-medium bg-red-50 text-red-600 px-1.5 py-0.5 rounded border border-red-100">
                                    <i class="fa-solid fa-arrow-up mr-0.5"></i> +12%
                                </span>
                                <span class="text-[10px] text-slate-400">par rapport au mois dernier</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex flex-col justify-between group hover:shadow-md transition-all duration-200">
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-xs font-medium text-slate-400">Pertes évitées via FEFO</span>
                            <div class="w-8 h-8 rounded-xl bg-emerald-50 text-emerald-500 flex items-center justify-center text-xs shadow-inner">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-2xl font-semibold text-slate-800">18 900 <span class="text-xs font-normal text-slate-400">MAD</span></h3>
                            <div class="mt-2 flex items-center gap-1.5">
                                <span class="inline-flex items-center text-[10px] font-medium bg-emerald-50 text-emerald-600 px-1.5 py-0.5 rounded border border-emerald-100">
                                    <i class="fa-solid fa-arrow-down mr-0.5"></i> -34%
                                </span>
                                <span class="text-[10px] text-slate-400">gaspillage en moins</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm flex flex-col justify-between group hover:shadow-md transition-all duration-200 sm:col-span-2">
                        <div class="flex items-center justify-between mb-3">
                            <div>
                                <span class="text-xs font-medium text-slate-400">Catalogue des produits actifs</span>
                                <h3 class="text-xl font-semibold text-slate-800 mt-1">12 450 Références</h3>
                            </div>
                            <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shadow-inner">
                                <i class="fa-solid fa-box-archive"></i>
                            </div>
                        </div>
                        <div class="pt-3 border-t border-slate-100 flex justify-between items-center text-[11px] text-slate-500">
                            <span>Mise à jour automatique (Claude Bernard)</span>
                            <span class="text-blue-600 font-medium flex items-center"><span class="w-1.5 h-1.5 rounded-full bg-blue-500 mr-1.5"></span> Stable</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-y-6 lg:pt-6">
                <div class="bg-gradient-to-br from-blue-600 to-indigo-700 rounded-2xl shadow-md p-6 text-white relative overflow-hidden group">
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
                
                <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6 hover:shadow-md transition-all">
                    <h2 class="text-sm font-medium text-slate-800 mb-4 flex items-center">
                        <i class="fa-solid fa-user-shield text-slate-400 mr-2"></i> Accès Récent
                    </h2>
                    <div class="flex items-center justify-between p-3 bg-slate-50 rounded-xl border border-slate-100/80 mb-2">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-xl bg-slate-200 flex items-center justify-center text-slate-600 text-xs font-semibold">A</div>
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