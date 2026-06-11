<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Préparateur - PharmaStock</title>
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
    <aside class="w-64 bg-white border-r border-slate-200 flex flex-col shadow-sm z-10">
        <div class="h-16 flex items-center px-6 border-b border-slate-100">
            <i class="fa-solid fa-notes-medical text-indigo-600 text-xl mr-3"></i>
            <span class="font-semibold text-slate-800 text-base">PharmaStock</span>
        </div>
        <div class="p-4 flex-1">
            <p class="text-[10px] text-slate-400 font-medium mb-4 uppercase tracking-wider">Espace de travail</p>
            <nav class="space-y-2">
                <!-- Actif -->
                <a href="#" class="w-full flex items-center px-4 py-2.5 text-indigo-700 bg-indigo-50 rounded-lg transition-all duration-200 font-medium">
                    <i class="fa-solid fa-box w-5"></i> Opérations (FEFO)
                </a>
                <a href="#" class="w-full flex items-center px-4 py-2.5 text-slate-500 hover:bg-slate-50 rounded-lg transition-all duration-200">
                    <i class="fa-solid fa-barcode w-5"></i> Scanner Entrée
                </a>
            </nav>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 overflow-y-auto p-8 animate-fade-in">
        <header class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-2xl font-semibold text-slate-800">Espace Préparateur</h1>
                <p class="text-slate-500 text-xs mt-1">Gestion des entrées et dispensation intelligente</p>
            </div>
            <div class="flex gap-3">
                <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300 flex items-center">
                    <i class="fa-solid fa-plus mr-2"></i> Nouvelle Réception
                </button>
            </div>
        </header>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Action FEFO -->
            <div class="lg:col-span-2 bg-white rounded-xl shadow-sm border border-slate-100 p-6 hover:shadow-md transition-shadow">
                <h2 class="text-sm font-medium text-slate-800 border-b border-slate-100 pb-3 mb-4">
                    <i class="fa-solid fa-hand-holding-medical text-indigo-500 mr-2"></i> Sortie recommandée (FEFO)
                </h2>
                <div class="bg-indigo-50/50 rounded-xl p-5 border border-indigo-100/50 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
                    <div>
                        <span class="bg-indigo-100 text-indigo-700 text-[10px] font-semibold px-2 py-0.5 rounded uppercase tracking-wide">Ordonnance en cours</span>
                        <h3 class="text-lg font-medium text-slate-800 mt-2">Doliprane 1000mg - Comprimés</h3>
                        <p class="text-slate-500 text-xs mt-1">Le système a identifié le lot le plus proche de la péremption.</p>
                        <div class="mt-4 flex flex-wrap gap-4">
                            <div class="bg-white px-3 py-2 rounded-lg border border-slate-200 shadow-sm">
                                <span class="block text-[10px] text-slate-400 uppercase">Lot à prélever</span>
                                <span class="font-medium text-slate-800">LOT-8932A</span>
                            </div>
                            <div class="bg-white px-3 py-2 rounded-lg border border-orange-200 shadow-sm">
                                <span class="block text-[10px] text-orange-500 uppercase">Péremption (DLU)</span>
                                <span class="font-medium text-orange-600">12 Août 2026</span>
                            </div>
                        </div>
                    </div>
                    <button class="bg-indigo-600 text-white w-12 h-12 rounded-full flex items-center justify-center hover:bg-indigo-700 hover:scale-105 transition-all shadow-md">
                        <i class="fa-solid fa-check"></i>
                    </button>
                </div>
            </div>

            <!-- Notifications Rapides -->
            <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6 hover:shadow-md transition-shadow">
                <h2 class="text-sm font-medium text-slate-800 border-b border-slate-100 pb-3 mb-4">
                    <i class="fa-solid fa-bell text-amber-500 mr-2"></i> Alertes J-30
                </h2>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3 group cursor-pointer">
                        <div class="w-8 h-8 rounded-lg bg-amber-50 text-amber-500 flex items-center justify-center flex-shrink-0 group-hover:bg-amber-100 transition-colors">
                            <i class="fa-solid fa-pills text-xs"></i>
                        </div>
                        <div>
                            <p class="text-slate-800 font-medium text-sm group-hover:text-indigo-600 transition-colors">Amoxicilline 500mg</p>
                            <p class="text-[11px] text-slate-500 mt-0.5">Lot #AMX-09 (15 boîtes) périme dans 28 jours.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </main>
</body>
</html>